<?php
class Property_model extends CI_Model {

	function __construct()
	{ 
		parent::__construct();
		$this->load->database(); 
	}
    function no()
    {
        $conQ = $this->db->query("SELECT * FROM ".dbpre('property')." " );
        return $conQ->result();
    }

    function get_properties()
    {
        if( $this->uri->segment(3) )
            $claim = dbpre('claim_property_map').".claim_id='".$this->uri->segment(3)."' AND ";

        $conQ = $this->db->query("SELECT ".dbpre('property').".* FROM
        ".dbpre('property')." LEFT OUTER JOIN ".dbpre('claim_property_map')." ON ".dbpre('property').".property_id = ".dbpre('claim_property_map').".property_id
        WHERE ".$claim." ".dbpre('property').".client_id=".$this->session->userdata('client_id') );

        return $conQ->result();
    }
    function get_claims($id)
    {
        $query = $this->db->query("SELECT * FROM ".dbpre('claim')." WHERE claim_id IN ( SELECT property_claim_id FROM ".dbpre('property')." WHERE property_id='".mysql_real_escape_string($id)."')");

        return $query->result();
    }
	function get_property()
	{
        $query = $this->db->query("SELECT * FROM
        ".dbpre('property')." INNER JOIN ".dbpre('claim_property_map')." ON ".dbpre('property').".property_id = ".dbpre('claim_property_map').".property_id
        WHERE ".dbpre('claim_property_map').".property_id='".mysql_escape_string( ( $this->uri->segment(4) ? $this->uri->segment(4) : $this->uri->segment(3) ) )."' AND ".dbpre('claim_property_map').".client_id=".$this->session->userdata('client_id') );

        return $query->row();
	}
    function get_property_contact($claim_id)
    {
        if( $claim_id=='' )
            $claim_id=$this->uri->segment(3);

        $query = $this->db->query("SELECT *
FROM live_contacts INNER JOIN live_contacts_to ON live_contacts.contact_id = live_contacts_to.contact_id
WHERE live_contacts_to.contact_primary IS NOT NULL AND
live_contacts_to.claim_id=".$claim_id );
        return $query->row();
    }
	function property_save()
	{ 
		//prep object for save
		$propObj = new stdclass; 
		//set property form fields  
		$propObj->client_id				 = $this->account_model->client_id();
        $propObj->property_id            = $this->input->post('property_id');
		$propObj->property_name          = $this->input->post('property_name');
		$propObj->property_construction  = $this->input->post('property_construction');
		$propObj->property_type          = $this->input->post('property_type');
		$propObj->property_address_1     = $this->input->post('property_address_1');
		$propObj->property_address_2     = $this->input->post('property_address_2');
		$propObj->property_city          = $this->input->post('property_city');
		$propObj->property_state         = $this->input->post('property_state');
		$propObj->property_zip           = $this->input->post('property_zip');
		$propObj->property_telephone     = $this->input->post('property_telephone');
		$propObj->property_other_label   = $this->input->post('property_other_label');
		$propObj->number_structures      = $this->input->post('number_structures');
		$propObj->property_year_built    = $this->input->post('property_year_built');
		$propObj->property_total_sqft    = str_replace(array(',','$'),'',$this->input->post('property_total_sqft') );
		$propObj->property_insured_value = str_replace(array(',','/'),'',$this->input->post('property_insured_value') );
		$propObj->property_description   = $this->input->post('property_description');
		$propObj->property_deductible    = str_replace(array(',','$'),'',$this->input->post('property_deductible') );

		#$propObj->property_folder_id 	 = $folder_id;
		
		//add property types
		if( $this->input->post('new_property')!='' ) $propObj->property_type = $this->_addprop();
		else $propObj->property_type = $this->input->post('property_type');
		
		//add construction  
		if( $this->input->post('new_construction')!='' ) $propObj->property_construction = $this->_addcon();
		else $propObj->property_construction = $this->input->post('property_construction');
		
		//get new lat & long
		if( $this->input->post('property_address_1') != '' ) 
		{ 
			$propObj->property_lat = $this->_getPos('lat');
			$propObj->property_lon = $this->_getPos('lon');
		} 
		
		//set reporting data
		$propObj->property_create_tstamp = time();
		$propObj->property_create_userid = $this->session->userdata('user_id');; 
		 
		#if( strlen($address)!=0 ) $propObj->map_address_val=$db->insertid();
		
		
		if( $propObj->property_id = $this->input->post('property_id') )
		{
			$propObj->property_lastmod_tstamp = time();
			$propObj->property_lastmod_userid = $this->session->userdata('user_id');
            $this->db->where('property_id',$propObj->property_id);
			$this->db->update( dbpre('property'),$propObj);
			$new_prop = $this->input->post('property_name');
			$old_prop = $this->input->post('property_save_name'); 
			$property_id = $propObj->property_id;
		}
		else
		{
			$this->db->insert(dbpre('property'),$propObj);
			$property_id = $this->db->insert_id();
            $this->_addmap($property_id,$this->input->post('claim_id'));
		} 
		
		
		//handle property folder
		$new_prop_name = $this->input->post( 'property_name' );
		$old_prop_name = $this->input->post( 'property_save_name' );
		
		#folders::set_property_folder( $new_prop_name,$old_prop_name,$folder_id,$property_id );

		return $property_id;
	}
	//sub functions for save prop
	function _addprop()
	{
		$newprop = new stdclass;
		$newprop->value_value = ucwords(strtolower($this->input->post('new_property')));
		$newprop->value_label = ucwords(strtolower($this->input->post('new_property'))); 
		$newprop->list_id     = '7';
		$newprop->client_id   = $this->session->userdata('client_id');
		#return Fields::val_save('new_claims_values',$newprop);
	}
	function _addcon()
	{
		$newcons = new stdclass;
		$newcons->value_value = ucwords($this->input->post('new_construction'));
		$newcons->value_label = ucwords($this->input->post('new_construction'));
		$newcons->client_id   = $this->session->userdata('client_id');
		$newcons->list_id     = '3';
		#return Fields::val_save('new_claims_values',$newcons);
	}
    function _addmap($prop,$claim)
    {
        $new = new stdclass;
        $new->claim_id = $claim;
        $new->property_id = $prop;
        $new->client_id = $this->account_model->client_id();
        $this->db->insert(dbpre('claim_property_map'),$new);
    }
    function _getPos($latlan='')
    {
        $mapaddress = urlencode($this->input->post('property_address_1').' '.$this->input->post('property_city').' '.$this->input->post('property_state').' '.$this->input->post('property_zip') );

        echo $mapaddress;$request_url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$mapaddress."&sensor=true";
        $xml = simplexml_load_file($request_url) or die("url not loading");
        $status = $xml->status;

        if ($status=="OK") {
            $Lat = $xml->result->geometry->location->lat;
            $Lon = $xml->result->geometry->location->lng;
            $LatLng = "$Lat,$Lon";
        }
        else
        {
            $Lat = 0;
            $Lon = 0;
            $LatLng = "$Lat,$Lon";
        }

        if($latlan=='lat') return $Lat;
        else if($latlan=='lon') return $Lon;
        else return $LatLng;
    }

	public function property_all(){
		$conQ = $this->db->query("SELECT * FROM live_property");
		return $conQ->result();
	}

}
?>
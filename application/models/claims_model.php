<?php
class Claims_model extends CI_Model {
 
    function __construct()
    { 
        parent::__construct();
		$this->load->database(); 
    }

    function save()
    {
        echo '<pre>';
        $add = new stdclass;
        $add->claim_number = $this->input->post('claim_number');
        $add->claim_date_taken = date('Y-m-d',strtotime($this->input->post('claim_date_taken')));
        $add->claim_ctype = $this->input->post('loss_type');
        $add->claim_folder_id = $this->input->post('claim_folder_id');
        $add->claim_policy_carrier = $this->input->post('claim_policy_carrier');
        $add->claim_carrier_adjuster = $this->input->post('claim_carrier_adjuster');
        $add->claim_carrier_estimator = $this->input->post('claim_carrier_estimator');
        $add->claim_loss_value = str_replace(array('$',','),'',$this->input->post('claim_loss_value'));
        $add->claim_loss_date = date('Y-m-d',strtotime($this->input->post('claim_loss_date')));
        $add->claim_loss_sqft = $this->input->post('claim_loss_sqft');
        $add->claim_policy_date = date('Y-m-d',strtotime($this->input->post('claim_policy_date')));
        $add->claim_deduct = str_replace(array('$',','),'',$this->input->post('claim_deduct'));
        $add->claim_note = $this->input->post('claim_note');
        $add->claim_adjuster = $this->input->post('claim_adjuster');
        $add->claim_estimator = $this->input->post('claim_estimator');
        $add->claim_last_update = time();
        $add->claim_last_user = $this->session->userdata('user_id');
        $add->claim_policy_amount = str_replace(array('$',','),'',$this->input->post('claim_policy_amount'));

        if( !$this->input->post('claim_id') ) :
            $add->claim_date_added = time();
            $add->client_id = $this->account_model->client_id();
            $add->created_on = time();
            $add->created_by = $this->session->userdata('user_id');
            $this->db->insert(dbpre('claim'),$add);
            $claim_id = $this->db->insert_id();
        else:
            $this->db->where('claim_id',$this->input->post('claim_id'));
            $this->db->update(dbpre('claim'),$add);
            $claim_id = $this->input->post('claim_id');
        endif;

        return $claim_id;

    }
    function delete()
    {
        $query = $this->db->query("DELETE FROM ".dbpre('claim')." WHERE claim_id='".mysql_real_escape_string($this->input->post('claim_id'))."'");
        return true;
    }
    function _checkClaim()
    {
        $cnum=$this->uri->segment(3);
        $query=$this->db->query(  "SELECT * from ".dbpre('claim')." WHERE claim_id = '".mysql_escape_string( $cnum )."'");
        return count($query->result());
    }
    function _addType()
    {
        $newprop = new stdclass;
        $newprop->value_value = $this->input->post('new_ctype');
        $newprop->value_label = $this->input->post('new_ctype');
        $newprop->list_id     = '2';
        $newprop->client_id   = $this->account_model->client_id();
        $this->db->insert('claims_values',$newprop);
        return $this->db->insert_id();
    }
    function getTeams()
    {
        $query = $this->db->query("SELECT ".dbpre('claim_teams').".team_id
		FROM ".dbpre('claim_teams')."
		WHERE ".dbpre('claim_teams').".client_id = ".$this->account_model->client_id()." AND ".dbpre('claim_teams').".claim_id = ".$this->input->post('claim_id') );
        return $query->result();
    }
    function getTeamsCnt()
    {
        return count( $this->getTeams() );
    }
    /**********/
	function getContact($property_id) 
	{
    	$folder_name     =mysql_escape_string($_POST['folder_name']);
    	$property_id     =mysql_escape_string($_POST['property_id']);
    	//die();

    	$conQ = $this->db->query("select * from ".dbpre('contacts')." where property_id='$property_id' AND client_id=".$this->account_model->client_id());

        if($conQ->num_rows()>0) return $conQ->result();
	}    
	function get_contacts()
	{ 

		$property_id = $this->uri->segment(3);
		$consQ = $this->db->query("SELECT ".dbpre('contacts_to').".contact_primary as primary_contact,
			".dbpre('contacts').".*
		FROM ".dbpre('contacts_to')." INNER JOIN ".dbpre('contacts')." ON ".dbpre('contacts_to').".contact_id = ".dbpre('contacts').".contact_id
		WHERE ".dbpre('contacts_to').".claim_id='$property_id' AND ".dbpre('contacts').".client_id=".$this->account_model->client_id());

		if( $consQ->num_rows()>0 ) return $consQ->result();
		else return array();
	}
    function get()
    {
        if( $this->_checkClaim()>0 ) :
        $query = $this->db->query("SELECT * FROM ".dbpre('claim')." WHERE client_id=".$this->account_model->client_id()." AND claim_id=".mysql_real_escape_string($this->uri->segment(3)));
        return $query->row();
        else:
            header('location: '.base_url().'index.php');
            exit;
        endif;
    }
    function getList()
    {
        $query = $this->db->query("SELECT *,
        ( SELECT count('property_id') FROM ".dbpre('claim')." WHERE claim_id=".dbpre('property').".property_claim_id  ) as pcnt,
        ( SELECT count('contact_id') FROM ".dbpre('contacts')." WHERE contact_property=".dbpre('property').".property_id  ) as ccnt
        FROM ".dbpre('property')." WHERE client_id=".$this->account_model->client_id());
        return $query->result();
    }
	function getClaims()
	{
		$query = $this->db->query("SELECT * FROM ".dbpre('claim')." WHERE client_id=".$this->account_model->client_id());
	 	return $query->result();
	}
    function getFolders()
    {
		$this->db->where('client_id',$this->account_model->client_id());
        $query = $this->db->get(dbpre('folders'), 10);
        return $query->result();
    }
   	function getPolicies( $claim_id )
	{ 

		$polQ = $this->db->query("SELECT * FROM ".dbpre('claim_policies')." where policy_claim_id='".$claim_id."'");
		if($polQ->num_rows()>0) return $polQ->result();
		else return array();
	}
    function staff()
    {
        $this->db->where('client_id',$this->account_model->client_id());
        $query = $this->db->get(dbpre('folders'), 10);
        return $query->result();
    }
    function staffAdj()
    {
        $this->db->where('client_id',$this->account_model->client_id());
        $query = $this->db->get(dbpre('folders'), 10);
        return $query->result();
    }
    function staffEst()
    {

        $polQ = $this->db->query("SELECT * FROM ".dbpre('claim_policies')." where policy_claim_id='".$claim_id."'");
        if($polQ->num_rows()>0) return $polQ->result();
        else return array();
    }
    function summary()
    {
        $claimQ = $this->db->query("select * from ".dbpre('claim')." where claim_id='".mysql_escape_string( $this->uri->segment(3) )."'");

        $ovArr = array();
        $idArr = array();
        foreach($claimQ->result() as $prop)
        {
            $prop = (array) $prop;
            $pid = $prop['property_id'];
            $ovArr[$pid] = $prop;
            /*if($this->claims_model->getContacts($pid)!=false) foreach($this->claims_model->getContacts($pid) as $con)
            {
                if( $con['contact_id']==$con['primary_contact'] ) {
                    $cid = $con['contact_id'];
                    $ovArr[$pid]['con'][$cid]=$con;
                }
            }
            else $ovArr[$pid]['con']=array();
            if($this->claims_model->getClaims($pid)!=false) foreach($this->claims_model->getClaims($pid) as $clm)
            {
                $clm = (array) $clm;
                $clmid = $clm['claim_id'];
                $ovArr[$pid]['clm'][$clmid] = $clm;
                if($this->claims_model->getPolicies($clmid)!=false) foreach($this->claims_model->getPolicies($clmid) as $pl)
                {
                    $pl = (array) $pl;
                    $plid = $pl['policy_id'];
                    $ovArr[$pid]['clm'][$clmid]['pol'][$plid] = $pl;
                }
            }
            else $ovArr[$pid]['clm']=array(); */
        }
        #return $ovArr[$pid];
        return $claimQ->row();

    }
    function  properties()
    {

        $claim_id = $this->uri->segment(3);

        $polQ = $this->db->query("SELECT ".dbpre('property').".*
                                    FROM ".dbpre('claim')." INNER JOIN ".dbpre('property')."
                                    ON ".dbpre('claim').".claim_id = ".dbpre('property').".property_claim_id
                                    WHERE ".dbpre('claim').".claim_id='".$claim_id."'");

        return $polQ->result();
    }
    function contacts()
    {
        $claim_id = $this->uri->segment(3);
        $polQ = $this->db->query("SELECT live_contacts.contact_first_name
FROM live_contacts_to INNER JOIN live_contacts ON live_contacts_to.contact_id = live_contacts.contact_id
WHERE live_contacts_to.claim_id='".$claim_id."'");
        return $polQ->result();
    }
    function  properties_ajax()
    {
        $rows = $this->claims_model->properties();
        if( $rows ) :
            foreach( $rows as $row ) :
                echo '<option value="'.$row->property_id.'">'.$row->property_address_1.'</option>';
            endforeach;
        else:
            echo 'none';
        endif;
        exit;
    }
}
?>
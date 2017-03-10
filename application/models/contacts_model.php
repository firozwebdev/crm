    <?php
class Contacts_model extends CI_Model {

	function __construct()
	{ 
		parent::__construct();
		$this->load->database(); 
	}

	function contacts()
	{
		$user_id = $this->session->userdata('user_id');

		$conQ = $this->db->query("SELECT * FROM live_contacts where user_id='$user_id' order by contact_id desc ");
	 	return $conQ->result(); 
	}
	function save($user_id=0)
	{
	  	$conObj                          = new stdclass;
	    $conObj->contact_first_name      = $this->input->post('contact_first_name');
		$conObj->contact_last_name       = $this->input->post('contact_last_name');
	    $conObj->contact_primary_phone   = $this->input->post('contact_primary_phone');
	    $conObj->contact_secondary_phone = $this->input->post('contact_secondary_phone');
	    $conObj->contact_company             = $this->input->post('contact_company');
	    $conObj->contact_email           = $this->input->post('contact_email');
	    $conObj->contact_address_1       = $this->input->post('contact_address_1');
	    $conObj->contact_address_2       = $this->input->post('contact_address_2');
	    $conObj->contact_city            = $this->input->post('contact_city');   
	    $conObj->contact_state           = $this->input->post('contact_state');
	    $conObj->contact_zip             = $this->input->post('contact_zip');
	    //$conObj->contact_note            = $this->input->post('contact_note');
	 	//$conObj->contact_type            = $this->input->post('contact_type');
	    //$conObj->contact_id              = $this->input->post('contact_id');
	   // $conObj->contact_type            = $this->input->post('contact_type');
	    //$conObj->contact_company         = $this->input->post('contact_company');
	   // $conObj->user_id                 = ( $this->input->post('user_id')!='' ? $this->input->post('user_id') : $user_id  );
	    $conObj->user_id                 = $this->session->userdata('user_id');;
        //$conObj->client_id               = $this->account_model->client_id();

		//if($conObj->contact_type=='') $conObj->contact_type ='client';

	    //check for empty contact name & primary phone
	


	            $this->db->insert(dbpre('contacts'),$conObj);
                $contact_id = $this->db->insert_id();


			return $contact_id;

	}
    function update($user_id=0)
	{
	  	$conObj                          = new stdclass;
	    $conObj->contact_first_name      = $this->input->post('contact_first_name');
		$conObj->contact_last_name       = $this->input->post('contact_last_name');
	    $conObj->contact_primary_phone   = $this->input->post('contact_primary_phone');
	    $conObj->contact_secondary_phone = $this->input->post('contact_secondary_phone');
	    $conObj->contact_company             = $this->input->post('contact_company');
	    $conObj->contact_email           = $this->input->post('contact_email');
	    $conObj->contact_address_1       = $this->input->post('contact_address_1');
	    $conObj->contact_address_2       = $this->input->post('contact_address_2');
	    $conObj->contact_city            = $this->input->post('contact_city');
	    $conObj->contact_state           = $this->input->post('contact_state');
	    $conObj->contact_zip             = $this->input->post('contact_zip');
	    $conObj->contact_note            = $this->input->post('contact_note');
	 	$conObj->contact_type            = $this->input->post('contact_type');
	    $conObj->contact_id              = $this->input->post('contact_id');
	    $conObj->contact_type            = $this->input->post('contact_type');
	    $conObj->contact_company         = $this->input->post('contact_company');
	    $conObj->user_id                 = $this->session->userdata('user_id');
        $conObj->client_id               = 0;

		//if($conObj->contact_type=='') $conObj->contact_type ='client';

	    //check for empty contact name & primary phone



                $this->db->where('contact_id',$conObj->contact_id);
                $this->db->update(dbpre('contacts'),$conObj);
                //$contact_id = $conObj->contact_id;


			return true;

	}

  /*  function delete()
    {
        $this->db->query("DELETE FROM ".dbpre('contacts')." WHERE client_id=".$this->account_model->client_id()." AND contact_id='".mysql_real_escape_string($this->uri->segment(3))."'");
        $this->db->query("DELETE FROM ".dbpre('contacts_to')." WHERE client_id=".$this->account_model->client_id()." AND contact_id='".mysql_real_escape_string($this->uri->segment(3))."'");
        return true;
    }*/

	public function delete($contact_id){
		$this->db->query("delete from live_contacts where contact_id = '$contact_id'");
		return true;
	}
    function claim()
    {
            $conQ = $this->db->query("SELECT
	".dbpre('contacts').".*
FROM ".dbpre('contacts')."
WHERE
    ".dbpre('contacts').".contact_id='".mysql_real_escape_string($this->uri->segment(4))."' AND
    ".dbpre('contacts').".client_id=".$this->account_model->client_id()." ");
          return $conQ->row();
    }
  /*  function row()
    {
        $conQ = $this->db->query("SELECT
	".dbpre('contacts').".*
FROM ".dbpre('contacts')."
WHERE
    ".dbpre('contacts').".contact_id='".mysql_real_escape_string($this->uri->segment(3))."' AND
    ".dbpre('contacts').".client_id=".$this->account_model->client_id()." ");
        return $conQ->row();
    }*/
	public function single_contact_for_edit($contact_id){
		$conQ=$this->db->query("select * from live_contacts where contact_id = '$contact_id' limit 1");
		return $conQ->row();
	}
    function map_claim($contact_id,$claim_id)
    {
        $add = new stdclass;
        $add->contact_id = $contact_id;
        $add->claim_id = $claim_id;
        $add->created = time();
        $add->client_id = $this->account_model->client_id();
        $query = $this->db->query("INSERT INTO ".dbpre('contacts_to')." (`contact_id`,`claim_id`,`created`,`client_id`)
        VALUES ('".$add->contact_id."','".$add->claim_id."','".$add->created."','".$add->client_id."') ON DUPLICATE KEY UPDATE claim_id='".$add->claim_id."'");

    }
    function map_prop($contact_id,$prop_id)
    {
        $add = new stdclass;
        $add->contact_id = $contact_id;
        $add->property_id = $prop_id;
        $add->created = time();
        $add->client_id = $this->account_model->client_id();
        $query = $this->db->query("INSERT INTO ".dbpre('contacts_to')." (`contact_id`,`property_id`,`created`,`client_id`)
        VALUES ('".$add->contact_id."','".$add->property_id."','".$add->created."','".$add->client_id."') ON DUPLICATE KEY UPDATE property_id='".$add->property_id."'");

    }
    function map_rep($contact_id,$ins_id)
    {
        $add = new stdclass;
        $add->contact_id = $contact_id;
        $add->insurer_id = $ins_id;
        $add->created = time();
        $add->client_id = $this->account_model->client_id();
        $query = $this->db->query("INSERT INTO ".dbpre('contacts_to')." (`contact_id`,`insurer_id`,`created`,`client_id`)
        VALUES ('".$add->contact_id."','".$add->insurer_id."','".$add->created."','".$add->client_id."') ON DUPLICATE KEY UPDATE insurer_id='".$add->insurer_id."'");

    }

	public function users_all(){
		$conQ = $this->db->query("SELECT * FROM live_contacts order by contact_id desc ");
		return $conQ->result();
	}

	public function all_rows($contact_id){
		$user_id = $this->session->userdata('user_id');
		$conQ = $this->db->query("SELECT * FROM live_calendar where created_by='$user_id' and created_for='$contact_id' order by calendar_id desc ");
		return $conQ->result();
	}

	public function customer_by_contact_id($contact_id){
		$conQ = $this->db->query("SELECT * FROM live_contacts WHERE contact_id='$contact_id'");
		return $conQ->row();
	}
	public function contact_for_dashboard(){
		$user_id = $this->session->userdata('user_id');
		$conQ = $this->db->query("SELECT * FROM live_contacts where user_id='$user_id'  order by contact_id desc limit 9");
		return $conQ->result();
	}

}
?>
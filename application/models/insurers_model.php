<?php
class Insurers_model extends CI_Model {

	function __construct()
	{ 
		parent::__construct();
		$this->load->database(); 
	}

	function all()
	{
		$conQ = $this->db->query("SELECT * FROM ".dbpre('insurers')." WHERE client_id=".$this->session->userdata('client_id'));
       
        return $conQ->result();
	}

    function get()
    {
        $conQ = $this->db->query("SELECT * FROM ".dbpre('insurers')." WHERE insurer_id='".mysql_real_escape_string($this->uri->segment(3))."' AND client_id=".$this->session->userdata('client_id'));

        return $conQ->row();
    }
	function reps()
	{

		$conQ = $this->db->query("SELECT ".dbpre('contacts').".contact_id,
			".dbpre('contacts').".contact_first_name,
			".dbpre('contacts').".contact_primary_phone,
			".dbpre('contacts').".contact_last_name
		FROM ".dbpre('contacts_to')." INNER JOIN ".dbpre('contacts')." ON ".dbpre('contacts_to').".contact_id = ".dbpre('contacts').".contact_id
		WHERE ".dbpre('contacts').".client_id=".$this->session->userdata('client_id')."
             AND ".dbpre('contacts_to').".insurer_id=".mysql_escape_string( ( is_numeric( $this->uri->segment(3) ) ) ) );
	 	return $conQ->result();
	}

    function insurer_reps($type,$carrier)
    {
        $conQ = $this->db->query("SELECT ".dbpre('contacts').".contact_id,
			".dbpre('contacts').".contact_first_name,
			".dbpre('contacts').".contact_primary_phone,
			".dbpre('contacts').".contact_last_name
FROM ".dbpre('contacts')." INNER JOIN ".dbpre('contacts_to')." ON ".dbpre('contacts').".contact_id = ".dbpre('contacts_to').".contact_id
		WHERE ".dbpre('contacts').".contact_type='".$type."' AND ".dbpre('contacts').".client_id=".$this->session->userdata('client_id')." AND ".dbpre('contacts_to').".insurer_id=".$carrier );
        return $conQ->result();
    }
	function save()
	{
        $ins = new stdclass;
        $ins->insurer_acc_ref               = $this->input->post('insurer_acc_ref');
        $ins->insurer_name                  = $this->input->post('insurer_name');
        $ins->insurer_address               = $this->input->post('insurer_address');
        $ins->insurer_city                  = $this->input->post('insurer_city');
        $ins->insurer_state                 = $this->input->post('insurer_state');
        $ins->insurer_country               = $this->input->post('insurer_country');
        $ins->insurer_zip                   = $this->input->post('insurer_zip');
        $ins->insurer_main_phone            = $this->input->post('main_phone');
        $ins->insurer_toll_free             = $this->input->post('toll_free');
        $ins->insurer_fax                   = $this->input->post('insurer_fax');
        $ins->insurer_email                 = $this->input->post('insurer_email');
        $ins->insurer_website               = $this->input->post('insurer_website');
        $ins->insurer_note                  = $this->input->post('insurer_note');
        $ins->insurer_handling_instructions = $this->input->post('insurer_handling_instructions');
        $ins->insurer_id                    = $this->input->post('insurer_id');
        $ins->client_id                     = $this->session->userdata('client_id');
        print_r( $ins );
        if( $this->input->post('insurer_id')=='' )
        {
            $this->db->insert('insurers',$ins);
            echo $this->db->insert_id();
        }
        else
        {
            $this->db->where('insurer_id',$this->input->post('insurer_id'));
            $this->db->update(dbpre('insurers'),$ins);
            echo $this->input->post('insurer_id');
        }
    }
    function repInfo( $rep_id )
	{ 
		$query = $this->db->query("SELECT ".dbpre('contacts').".contact_first_name,
			".dbpre('contacts').".contact_last_name,
			".dbpre('insurer_reps').".reps_id
		FROM ".dbpre('insurer_reps')." INNER JOIN ".dbpre('contacts')." ON ".dbpre('insurer_reps').".reps_contact_id = ".dbpre('contacts').".contact_id
		WHERE reps_contact_id = ".mysql_escape_string( $rep_id ) );
		return $query->row();
	}

    public function edit_insurer_info($insurer_id){
        $conQ = $this->db->query("SELECT * FROM ".dbpre('insurers')." WHERE insurer_id='$insurer_id'");

        return $conQ->row();
    }

    public function delete($del_id){
        $this->db->query("DELETE FROM live_insurers WHERE insurer_id='$del_id'");
        return true;
    }
}
?>
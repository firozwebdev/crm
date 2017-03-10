<?php
class Reps_model extends CI_Model {

	function __construct()
	{ 
		parent::__construct();
		$this->load->database(); 
	}
    function get()
    {
        $conQ = $this->db->query("SELECT *
		FROM ".dbpre('contacts_to')." INNER JOIN ".dbpre('contacts')." ON ".dbpre('contacts_to').".contact_id = ".dbpre('contacts').".contact_id
		WHERE ".dbpre('contacts_to').".contact_id='".$this->uri->segment(4)."' AND ".dbpre('contacts').".client_id=".$this->account_model->client_id()."
             AND ".dbpre('contacts_to').".insurer_id=".mysql_escape_string( ( $this->uri->segment(3)=='edit' ? $this->uri->segment(4) : $this->uri->segment(3) ) ) );

        return $conQ->row();
    }
    function ajax()
    {
        $conQ = $this->db->query("SELECT ".dbpre('contacts').".contact_id,
			".dbpre('contacts').".contact_first_name,
			".dbpre('contacts').".contact_primary_phone,
			".dbpre('contacts').".contact_last_name,
			( SELECT count(*) FROM ".dbpre('claim')." WHERE claim_carrier_adjuster=".dbpre('contacts').".contact_id or claim_carrier_estimator=".dbpre('contacts').".contact_id ) as cnt_clms
		FROM ".dbpre('contacts_to')." INNER JOIN ".dbpre('contacts')." ON ".dbpre('contacts_to').".contact_id = ".dbpre('contacts').".contact_id
		WHERE ".dbpre('contacts').".client_id=".$this->account_model->client_id()."
             AND ".dbpre('contacts_to').".insurer_id=".mysql_escape_string( $this->uri->segment(4) ) );
        #echo $this->db->last_query();
        $html='';
        foreach( $conQ->result() as $r ) :
            $html.='<option value="'.$r->contact_id.'">'.$r->contact_first_name.'</option>';
        endforeach;
        echo $html;
        exit;
    }

	function all()
	{

		$conQ = $this->db->query("SELECT *
	    FROM ".dbpre('contacts_to')." INNER JOIN ".dbpre('contacts')." ON ".dbpre('contacts_to').".contact_id = ".dbpre('contacts').".contact_id
		WHERE ".dbpre('contacts').".client_id=".$this->account_model->client_id()."
             AND ".dbpre('contacts_to').".insurer_id=".mysql_escape_string( ( $this->uri->segment(3)=='all' ? $this->uri->segment(4) : $this->uri->segment(3) ) ) );
	 	#echo $this->db->last_query();
        return $conQ->result();
	}

    function save()
    {

        $conObj                          = new stdclass;
        $conObj->contact_first_name      = $this->input->post('contact_first_name');
        $conObj->contact_last_name       = $this->input->post('contact_last_name');
        $conObj->contact_primary_phone   = $this->input->post('contact_primary_phone');
        $conObj->contact_secondary_phone = $this->input->post('contact_secondary_phone');
        $conObj->contact_fax             = $this->input->post('contact_fax');
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
        $conObj->client_id               = $this->account_model->client_id();

        if( $conObj->contact_first_name and $conObj->contact_primary_phone )
        {
            if(empty($conObj->contact_id))
            {
                if($this->db->insert(dbpre('contacts'),$conObj))
                {
                    $contact_id = $this->db->insert_id();

                    $con_to = new stdclass;
                    $con_to->insurer_id = $this->input->post('insurer_id');
                    $con_to->contact_id = $contact_id;
                    $con_to->created = time();
                    $con_to->client_id = $this->account_model->client_id();
                    $this->db->insert(dbpre('contacts_to'),$con_to);

                }
            }
            else
            {
                $this->db->where('contact_id',$this->input->post('contact_id'));
                $this->db->update(dbpre('contacts'),$conObj);
                $contact_id = $conObj->contact_id;
            }
            return $contact_id;

        }
    }
    function user_role($id)
    {
            $query=$this->db->query("SELECT live_usergroups.title FROM live_usergroups WHERE live_usergroups.id=".mysql_real_escape_string($id));
            $data=$query->row();
            return $data->title;
    }

} ?>
<?php
require_once('application/libraries/phpass-0.3/PasswordHash.php');

define('PHPASS_HASH_STRENGTH', 8);
define('PHPASS_HASH_PORTABLE', false);

class Users_model extends CI_Model {
 
    function __construct()
    { 
        parent::__construct();
		$this->load->database(); 
    }
    function all()
    {
        $conQ = $this->db->query("SELECT ".dbpre('users').".username,
	".dbpre('users').".`password`,
	".dbpre('users').".usertype,
	".dbpre('users').".block,
	".dbpre('users').".sendEmail,
	".dbpre('users').".registerDate,
	".dbpre('users').".lastvisitDate,
	".dbpre('users').".activation,
	".dbpre('users').".params,
	".dbpre('users').".id as user_id,
	".dbpre('contacts').".contact_first_name,
	".dbpre('contacts').".contact_last_name,
	".dbpre('contacts').".contact_primary_phone,
	".dbpre('contacts').".contact_secondary_phone
FROM ".dbpre('contacts')." INNER JOIN ".dbpre('users')." ON ".dbpre('contacts').".user_id = ".dbpre('users').".id WHERE ".dbpre('contacts').".client_id=".$this->account_model->client_id()." ");
        return $conQ->result();
    }
    function user()
    {
        $conQ = $this->db->query("SELECT ".dbpre('users').".*,
	".dbpre('users').".id as user_id,
	".dbpre('contacts').".*
FROM ".dbpre('contacts')." INNER JOIN ".dbpre('users')." ON ".dbpre('contacts').".user_id = ".dbpre('users').".id WHERE
    ".dbpre('users').".id='".mysql_real_escape_string($this->uri->segment(4))."' AND
    ".dbpre('contacts').".client_id=".$this->account_model->client_id()." ");
        return $conQ->row();
    }
    function staff()
    {
        $conQ = $this->db->query("SELECT * FROM ".dbpre('contacts')." WHERE client_id=".$this->account_model->client_id());
        return $conQ->result();
    }
    function groups()
    {
        $conQ = $this->db->query("SELECT * FROM ".dbpre('usergroups')." WHERE id BETWEEN 9 AND 13");
        return $conQ->result();
    }
    function save()
    {
        if( !$this->input->post('user_id') )
            $user_id = $this->account_model->create();
        else
            $user_id = $this->account_model->update($this->input->post('user_id'));

        if( $user_id ) :

            $contact_id = $this->contacts_model->contact_save($user_id);

            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
            Saved Account
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);
            header('location: '.base_url().'index.php/admin/users');
            exit;
        else:
            $msg = '<div class="row"><div class="col-lg-12">
            <div class="alert alert-danger">
                Error creating that account
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);

            header('location: '.base_url().'index.php/admin/users');
        endif;
    }
}
?>
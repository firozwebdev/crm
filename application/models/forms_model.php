<?php
class Forms_model extends CI_Model {

	function __construct()
	{ 
		parent::__construct();
		$this->load->database(); 
	}
    function values()
    {
        $query = $this->db->query("select * from ".dbpre('values_list')." where client_id = ".$this->account_model->client_id()." ");
        return $query->result();
    }
    function val_get($id)
    {
        $client_id = $this->session->userdata('client_id');
        $query = $this->db->query("SELECT value_label FROM ".dbpre('values')." WHERE client_id = ".$client_id." AND value_id = ".mysql_escape_string( $id->list_id ));
        return $query->row();
    }
    function val_list($id)
    {
        $client_id = $this->session->userdata('client_id');
        $query = $this->db->query("select * from ".dbpre('values')." where client_id = ".$client_id." AND list_id=$id");
        return $query->result();
    }
    function val_list_id($name='construction')
    {
        $client_id = $this->session->userdata('client_id');
        $query = $this->db->query("select list_id from ".dbpre('values_list')." where client_id = ".$client_id." AND list_name='".mysql_escape_string( $name )."'");
        $row = $query->row();
        return $row->list_id;
    }
    function val_list_name($id)
    {
        $client_id = $this->session->userdata('client_id');
        $query = $this->db->query("select list_name from ".dbpre('values_list')." where client_id = ".$client_id." AND list_id=$id->list_id");
        return $query->row();
    }
    function val_save($table,$values)
    {

    }
    function val_update($table,$values,$id)
    {

    }
}
?>
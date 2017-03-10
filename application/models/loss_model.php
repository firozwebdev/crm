<?php
class Loss_model extends CI_Model {

	function __construct()
	{ 
		parent::__construct();
		$this->load->database(); 
	}

	function contents()
	{
		$propsQ = $this->db->query("SELECT * FROM ".dbpre('contents')." WHERE ".dbpre('contents').".client_id='".$this->session->userdata('client_id')."'");
	 	return $propsQ->result();
	}

    function item()
    {
        $propsQ = $this->db->query("SELECT * FROM ".dbpre('contents')." WHERE ".dbpre('contents').".content_id='".mysql_real_escape_string($this->uri->segment(4))."'");
        return $propsQ->row();
    }

    function links()
    {
        $propsQ = $this->db->query("SELECT * FROM ".dbpre('content_links')." WHERE ".dbpre('content_links').".content_id='".mysql_real_escape_string($this->uri->segment(4))."'");
        return $propsQ->row();
    }
}
?>
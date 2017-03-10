<?php
class Commissions_model extends CI_Model {
 
    function __construct()
    { 
        parent::__construct();
		$this->load->database(); 
    }
    function delete()
    {
        $est=$this->input->post('estimation_id');
        $query=$this->db->query(  "DELETE from ".dbpre('estimations')." WHERE estimation_id = '".mysql_escape_string( $est )."' A
        AND client_id=0");
        return $query->result();
    }
    function save()
    {
        $sv = new stdClass();
        $sv->estimation_date = $this->input->post('estimation_date');
        $sv->estimation_loss_value = $this->input->post('estimation_loss_value');
        $sv->estimation_attachment = $this->input->post('estimation_attachment');
        $sv->estimation_note = $this->input->post('estimation_note');
        $sv->claim_id = $this->input->post('claim_id');
        $sv->client_id = $this->session->userdata('client_id');

        $this->db->insert(dbpre('estimations'),$sv);
        print_r( $sv );
        exit;

    }
    function all()
    {
        $cnum=$this->uri->segment(3);
        $query=$this->db->query(  "SELECT * from ".dbpre('estimations')." WHERE claim_id = '".mysql_escape_string( $cnum )."'");
        return $query->result();
    }
    function get()
    {


    }

}
?>
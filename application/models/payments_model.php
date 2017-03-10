<?php
class Payments_model extends CI_Model {
 
    function __construct()
    { 
        parent::__construct();
		$this->load->database(); 
    }
    function delete()
    {
        $pay=$this->input->post('payment_id');
        $query=$this->db->query(  "DELETE from ".dbpre('payments')." WHERE payment_id = '".mysql_escape_string( $pay )."' A
        AND client_id=0");
        return $query->result();
    }
    function save()
    {
        $sv = new stdClass();
        $sv->payment_date = $this->input->post('payment_date');
        $sv->payment_date_added = time();
        $sv->payment_amount = $this->input->post('estimation_loss_value');
        $sv->payment_note = $this->input->post('estimation_note');
        $sv->claim_id = $this->input->post('claim_id');
        $sv->client_id = $this->session->userdata('client_id');

        $this->db->insert(dbpre('payments'),$sv);
        print_r( $sv );
        exit;

    }
    function all()
    {
        $cnum=$this->uri->segment(3);
        $query=$this->db->query(  "SELECT * from ".dbpre('payments')." WHERE claim_id = '".mysql_escape_string( $cnum )."'");
        return $query->result();
    }
    function get()
    {


    }

}
?>
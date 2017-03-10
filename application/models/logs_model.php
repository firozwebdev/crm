<?php
class Logs_model extends CI_Model {

	function __construct()
	{ 
		parent::__construct();
		$this->load->database(); 
	}
    function save()
    {

        $sv = new stdClass();

        $sv->log_id=$this->input->post('log_id');
        $sv->created_by = $this->session->userdata('user_id');
        $sv->log_title=$this->input->post('log_title');
        $sv->log_date=$this->input->post('log_date');
        $sv->log_start_time=$this->input->post('start_time');
        $sv->log_stop_time=$this->input->post('stop_time');
        $sv->log_note=$this->input->post('log_note');
        $sv->log_color=$this->input->post('log_color');

        $sv->log_miles=$this->input->post('log_miles');
        $sv->log_total_time=$this->input->post('log_total_time');
        $sv->log_tstamp=$this->input->post('log_tstamp');
        $sv->log_round_trip=$this->input->post('log_round_trip');
        $sv->log_start=$this->input->post('log_start');
        $sv->archive_tstamp=$this->input->post('archive_tstamp');

        $sv->route_id=$this->input->post('route_id');
        $sv->log_property_id=$this->input->post('log_property_id');
        $sv->log_claim_id=$this->input->post('claim_id');
        $sv->created_for=$this->input->post('created_for');
        $sv->client_id=$this->input->post('client_id');

        if( !$this->input->post('log_id') ):
            $this->db->insert(dbpre('logs'),$sv);
        else:
            $this->db->where('log_id',$sv->log_id);
            $this->db->update(dbpre('logs'),$sv);
        endif;
        return true;
    }
    function all()
    {
        $user_id = $this->session->userdata('user_id');
        $logs = $this->db->query("SELECT *
          FROM live_logs where created_by ='$user_id'  order by log_id desc ");
         ;

        return $logs->result();
    }
    function log($log_id)
    {


        $log = $this->db->query("SELECT *
        FROM live_property INNER JOIN live_logs ON live_property.property_id = live_logs.log_property_id
        WHERE live_logs.log_id='".$log_id."'");
        return $log->row();




      /*  $logs = $this->db->query("SELECT *
        FROM live_logs
        WHERE ".dbpre('logs').".log_id='$log_id'");

        return $logs->row(); */
    }

    function delete($log_id){
        $this->db->query("DELETE FROM live_logs WHERE log_id='$log_id'");
        return true;
    }
    function log_json()
    {
        $this->db->select( "*",FALSE );
        $this->db->select( "log_start_time AS unix_start",FALSE );
        $this->db->select( "log_stop_time AS unix_end",FALSE );
        $this->db->from(dbpre('logs'));
        $this->db->where(dbpre('logs').'.created_for', $this->session->userdata('user_id'));
        $query = $this->db->get();
        $i=0;
        $json = array();
        foreach($query->result() as $row){

            $json[$i]['id'] = $row->log_id;
            $json[$i]['title'] = 'LOG: '.$row->log_title;
            $json[$i]['start'] = $this->calendar_model->iso8601( strtotime($row->unix_start.' '.$row->log_date) );//'$year-$month-09 17:30:49';
            $json[$i]['end'] =  $this->calendar_model->iso8601( strtotime($row->unix_end.' '.$row->log_date) );//'$year-$month-09 17:30:49';
            #if( $row->contact_id!='' ) $show = '&show='.$row->contact_id;
            if( $this->input->get('url')!='no') $json[$i]['url'] = base_url().'index.php/logs/view/'.$row->log_id;

            $json[$i]['allDay'] = $row->event_allday;
            $json[$i]['day'] = $row->unix_start;
            $json[$i]['color'] = ( $row->log_color ? $row->log_color : '#000000' );
            #$json[$i]['editable'] = true;
            #$json[$i]['droppable'] = true;



            #if( $row[$i]->event_status!='' )
            #    $json[$i]['className'] = $row[$i]->event_status;
            $json[$i]['className'] = 'log_outer';
            ++$i;
        }
        echo json_encode($json);
        exit;
    }


    public function all_rows($contact_id){
        $user_id = $this->session->userdata('user_id');
        $conQ = $this->db->query("SELECT * FROM live_logs where created_by='$user_id' and created_for='$contact_id' order by log_id desc ");
        return $conQ->result();
    }

    public function log_by_contact_id($contact_id){
        $conQ = $this->db->query("SELECT * FROM live_logs WHERE created_for='$contact_id'");
        return $conQ->row();
    }

    function row($log_id)
    {
        $log  = $this->db->query("SELECT * from live_logs where log_id='$log_id'");
        return $log->row();




        /* $conQ = $this->db->query("SELECT * FROM live_calendar WHERE calendar_id='$calender_id'");
         return $conQ->row(); */
    }
}
?>
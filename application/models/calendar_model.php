<?php
class Calendar_model extends CI_Model {

	function __construct()
	{ 
		parent::__construct();
		$this->load->database(); 
	}
    function cancel()
    {
        $conQ = $this->db->query("UPDATE ".dbpre('calendar')." SET calendar_cancel='".time()."' WHERE calendar_id='".mysql_real_escape_string($this->input->post('id'))."' AND client_id=".$this->session->userdata('client_id'));
        echo 'cancel';
        exit;
    }
    function check()
    {
        $conQ = $this->db->query("UPDATE ".dbpre('calendar')." SET calendar_complete='".time()."' WHERE calendar_id='".mysql_real_escape_string($this->input->post('id'))."' AND client_id=".$this->session->userdata('client_id'));
        echo 'check';
        exit;
    }
    function delete($calendar_id)
    {
       // $this->db->query("DELETE FROM ".dbpre('contacts')." WHERE client_id=".$this->session->userdata('client_id')." AND contact_id='".mysqli_real_escape_string($this->input->post('contact'))."'");
       // $this->db->query("DELETE FROM ".dbpre('contacts_to')." WHERE client_id=".$this->session->userdata('client_id')." AND contact_id='".mysqli_real_escape_string($this->input->post('contact'))."'");
        $this->db->query("DELETE FROM live_calendar WHERE calendar_id='$calendar_id'");
        return true;
    }
	function events()
	{
        $user_id = $this->session->userdata('user_id');
      
        $this->db->select( "*",FALSE );
        $this->db->select( "calendar_start AS unix_start",FALSE );
        $this->db->select( "calendar_stop AS unix_end",FALSE );
        $this->db->from(dbpre('calendar'));
        $this->db->where('created_by',$user_id);
        $this->db->order_by('calendar_id', 'DESC');
//        $this->db->limit(10);
        //$this->db->where(dbpre('calendar').'.created_for', $this->session->userdata('user_id'));
        //$this->db->where(dbpre('calendar').'.created_for', $this->session->userdata('user_id'));
        $query = $this->db->get();

        return $query->result();
	}
    function events_json()
    {


            $i = 0;
            $json = array();
            foreach ($this->calendar_model->events() as $row) {

                $json[$i]['id'] = $row->calendar_id;
                $json[$i]['title'] = $row->calendar_title;
                $json[$i]['start'] = $this->calendar_model->iso8601(strtotime($row->unix_start));//'$year-$month-09 17:30:49';
                $json[$i]['end'] = $this->calendar_model->iso8601(strtotime($row->unix_end));//'$year-$month-09 17:30:49';
                #if( $row->contact_id!='' ) $show = '&show='.$row->contact_id;
                if ($this->input->get('url') != 'no') $json[$i]['url'] = base_url() . 'index.php/events/view/' . $row->calendar_id;

                $json[$i]['allDay'] = $row->event_allday;
                $json[$i]['day'] = $row->unix_start;
                $json[$i]['color'] = ($row->calendar_color ? $row->calendar_color : '#000000');
                #$json[$i]['editable'] = true;
                #$json[$i]['droppable'] = true;


                #if( $row[$i]->event_status!='' )
                #    $json[$i]['className'] = $row[$i]->event_status;
                #else $json[$i]['className'] = '';
                ++$i;
            }
            echo json_encode($json);





      /*  $type  = 'fetch';
        if($type == 'fetch')
        {
            $events = array();
            $conQ = $this->db->query("SELECT * FROM live_calendar");
            return $conQ->row();
            die();
            while($fetch = mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
                $e = array();
                $e['id'] = $fetch['calendar_id'];
                $e['title'] = $fetch['calendar_title'];
                $e['start'] = $fetch['calendar_start'];
                $e['end'] = $fetch['calendar_end'];

                $allday = ($fetch['allDay'] == "true") ? true : false;
                $e['allDay'] = $allday;

                array_push($events, $e);
            }
            echo json_encode($events);
        } */
    }
    function iso8601($time=false) {
        if(!$time) $time=time();
        return date("Y-m-d", $time) . 'T' . date("H:i:s", $time) .'+00:00';
    }
    function row($calendar_id)
    {
        $event  = $this->db->query("SELECT * from live_calendar where calendar_id='$calendar_id'");
        return $event->row();




        /* $conQ = $this->db->query("SELECT * FROM live_calendar WHERE calendar_id='$calender_id'");
         return $conQ->row(); */
    }
    function save($appointment=0,$calendar = null)
    {

        date_default_timezone_set('America/Los_Angeles');

        $sv = new stdClass();
        $dates=explode('-',$this->input->post('daterange'));
        $sv->calendar_id = $this->input->post('calendar_id');
        $sv->calendar_title = $this->input->post('calendar_title');
        $sv->status = $this->input->post('status');
        $sv->calendar_color = $this->input->post('calendar_color');
        $sv->calendar_note = $this->input->post('calendar_note');
        $sv->daterange = $this->input->post('daterange');
        //$sv->daterange_one=substr($daterange,1,9);
        $sv->calendar_start = date('Y-m-d H:i:s', strtotime($this->input->post('calendar_start').' '.$dates[0]));
        $sv->calendar_stop = date('Y-m-d H:i:s', strtotime($this->input->post('calendar_stop').' '.$dates[1]));
        $sv->calendar_total = $sv->calendar_stop-$sv->calendar_start;
        $sv->created_on = date('Y-m-d H:i:s',time());
        $sv->created_by = $this->session->userdata('user_id');
        $sv->created_for = $this->input->post('created_for');
       // $sv->client_id = $this->session->userdata('client_id');



        if( $appointment )
            $sv->appointment_id = $appointment;
        
        if( !$sv->calendar_id ):
            $this->db->insert('calendar',$sv);
            $id = $this->db->insert_id();

        else:
            $id = $sv->calendar_id;
            $this->db->where('calendar_id',$sv->calendar_id);
            $this->db->update('calendar',$sv);
        endif;
        return $id;
    }
    function schedule()
    {
        $rows = $this->db->query("SELECT * FROM ".dbpre('calendar')." WHERE created_for=".$this->session->userdata('user_id')." AND calendar_complete IS NULL AND client_id='".$this->account_model->client_id()."'");
        return $rows->result();
    }
    function task_save()
    {
        
        $app = new stdclass;
        $app->created_by  =  $this->input->post('created_by');
        $app->created_for =  $this->session->userdata('user_id');
        $app->created_on = date('Y-m-d',time());
        $app->appointment_claim_id = $this->input->post('claim_id');
        $app->appointment_title = $this->input->post('appointment_title');
        $app->appointment_location = $this->input->post('appointment_location');
        $app->appointment_date = $this->input->post('appointment_date');
        $start = explode('-',$this->input->post('appointment_date'));
        #print_r($start);
        $app->appointment_start = date('Y-m-d H:i:s',mktime( $this->input->post('hour1'),$this->input->post('minute1'),'0',$start[1],$start[2],$start[0]));
        $end = explode('-',$this->input->post('appointment_date'));

        $app->appointment_stop = date('Y-m-d H:i:s',mktime( $this->input->post('hour2'),$this->input->post('minute2'),'0',$end[1],$end[2],$end[0]));
        $app->appointment_note = $this->input->post('appointment_note');
        $app->client_id = $this->session->userdata('client_id');
        $this->db->insert(dbpre('appointments'),$app);
        
        //map appointment to calendar
        $id = $this->db->insert_id();
        $this->save($id);
        
        return $id;
    }
    function tasks()
    {
        $this->db->select( "*" );
        $this->db->select( "appointment_start AS unix_start",FALSE );
        $this->db->select( "appointment_stop AS unix_end",FALSE );
        $this->db->from(dbpre('appointments'));
        $this->db->where(dbpre('appointments').'.created_for', $this->session->userdata('user_id'));
        $query = $this->db->get();
        return $query->result();

       /* $this->db->select( "*",FALSE );
        $this->db->select( "calendar_start AS unix_start",FALSE );
        $this->db->select( "calendar_stop AS unix_end",FALSE );
        $this->db->from(dbpre('calendar'));
        $this->db->where(dbpre('calendar').'.created_for', $this->session->userdata('user_id'));
        $query = $this->db->get();
        return $query->result();
       */
    }
    function tasks_json()
    {
        $i=0;
        $json = array();
        foreach($qthis->calendar_model->tasks() as $row){

            $json[$i]['id'] = $row->calendar_id;
            $json[$i]['title'] = $row->calendar_title;
            $json[$i]['start'] = $this->calendar_model->iso8601( strtotime($row->unix_start) );//'$year-$month-09 17:30:49';
            $json[$i]['end'] =  $this->calendar_model->iso8601( strtotime($row->unix_end) );//'$year-$month-09 17:30:49';
            #if( $row->contact_id!='' ) $show = '&show='.$row->contact_id;
            if( $this->input->get('url')!='no') $json[$i]['url'] = base_url().'index.php/tasks/view/'.$row->calendar_id;

            $json[$i]['allDay'] = $row->event_allday;
            $json[$i]['day'] = $row->unix_start;
            $json[$i]['color'] = ( $row->calendar_color ? $row->calendar_color : '#000000' );
            #$json[$i]['editable'] = true;
            #$json[$i]['droppable'] = true;



            #if( $row[$i]->event_status!='' )
            #    $json[$i]['className'] = $row[$i]->event_status;
            #else $json[$i]['className'] = '';
            ++$i;
        }
        echo json_encode($json);
        exit;
    }
    function uncheck()
    {
        $conQ = $this->db->query("UPDATE ".dbpre('calendar')." SET calendar_complete=NULL  WHERE calendar_id='".mysql_real_escape_string($this->input->post('id'))."' AND client_id=".$this->session->userdata('client_id'));
        echo 'unchecked';
        exit;
    }
}
?>
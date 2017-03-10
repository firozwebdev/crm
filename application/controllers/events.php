<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

    public function index()
    {
        $data['rows']=$this->calendar_model->events();


        $this->load->view('events/index',$data);
    }
	public function add()
	{

       // $data['row']=$this->calendar_model->row();


        $this->load->view('events/form');
	}
    public function delete($calendar_id)
    {

      $this->calendar_model->delete($calendar_id);


        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Deleted Event
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

        header('location: '.base_url().'index.php/events/');
        exit;
    }
    public function view($calender_id)
    {

        $data['row']=$this->calendar_model->row($calender_id);
       // echo '<pre>';
        //print_r($data['row']);
       // die();

        $this->load->view('events/form',$data);
    }


    public function save()
    {



       /* $datarange = $this->input->post('daterange');
        $d1=substr($datarange,1,9);
        $d2=substr($datarange,12,20);
        echo $d1;
        echo '<br>';
        echo $d2;
        die();
*/
        $calendar_id = $this->input->post('calendar_id');

        if(empty($calendar_id)) :
            $something = $this->calendar_model->save();

            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
            Scheduled Event
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);

            header('location: '.base_url().'index.php/events/');
            exit;
        endif;
        if(!empty($calendar_id)) :
            $this->calendar_model->save($calendar_id);
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
            Update Event
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);

            header('location: '.base_url().'index.php/events/');
            exit;
        endif;
        if(!empty($created_for)) :
            $this->calendar_model->save($calendar_id);
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
            Update Event
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);

            header('location: '.base_url().'index.php/events/'.$created_for);
            exit;
        endif;



    }
 /*   public function view()
    {
        $data['row']=$this->calendar_model->row();
        $this->load->view('events/form',$data);
    }*/
} 
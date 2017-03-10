<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller {
	
	public function index()
	{
		$this->load->view('calendar/index');
	}
    public function events_json()
    {
      $this->calendar_model->events_json();
       //echo "hello world";

    }
    public function overview()
    {
        $this->load->view('calendar/overview');
    }
    public function tasks_json()
	{
		$this->calendar_model->tasks_json();
	}


} 
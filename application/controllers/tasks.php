<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tasks extends CI_Controller {
	
	public function index()
	{
        $data['rows']=$this->calendar_model->tasks();

		$this->load->view('tasks/index',$data);
	}
    public function add()
    {
        $this->load->view('tasks/form');
    }
    public function cancel()
    {
        $this->calendar_model->cancel();
        exit;
    }
    public function check()
    {
        $this->calendar_model->check();
        exit;
    }
    public function calendar_json()
	{
		$this->calendar_model->calendar_json();
        exit;
    }
    public function edit()
    {
        $data['row']=$this->calendar_model->row();
        $this->load->view('tasks/form',$data);
    }
    public function save()
    {
        echo '<pre>';
        print_r($_POST);
        die();
        $this->calendar_model->task_save();

        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Saved Task
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

        header('location: '.base_url().'index.php/tasks/');
        exit;

    }   
    public function uncheck()
    {
        $this->calendar_model->uncheck();
        exit;
    }
    public function view()
    {
        $data['row']=$this->calendar_model->row();
        $this->load->view('tasks/form',$data);
    }
} 

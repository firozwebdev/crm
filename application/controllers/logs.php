<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logs extends CI_Controller {

	
	public function index()
	{
       // $rows=$this->logs_model->all();


	    $this->load->view('logs/index' ,array('rows'=>$this->logs_model->all()));
	}
	public function create()
	{	
        $data = array('folders'=>$this->claims_model->getFolders());
		$this->load->view('logs/form',$data);
	} 
	public function edit($log_id)
	{

		$data = array(
				'row'=>$this->logs_model->log($log_id) 
                        );
		$this->load->view('logs/form',$data);
	}
    public function log_json()
    {
        $this->logs_model->log_json();
    }
    public function view()
    {
        $data = array(
            'folders'=>$this->claims_model->getFolders() );
        $this->load->view('logs/form',$data);
    }
    public function save()
    {
       
        $log_id=$this->input->post('log_id');

        if(!$log_id) {
            $this->logs_model->save();
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
            Saved Log
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);


        }
        if($log_id) {

            $this->logs_model->save();
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
            Updated Log
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);


        }
        header('location: ' . base_url() . 'index.php/logs/');
        exit;
    }
    public function delete($log_id)
    {
        $this->logs_model->delete($log_id);
        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Deleted Log
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

         header('location: '.base_url().'index.php/logs/');

    }
} 
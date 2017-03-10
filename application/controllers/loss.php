<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loss extends CI_Controller {

	
	public function index()
	{
				$this->load->view('loss/index',array('logs'=>$this->insurers_model->all() ));
	}
	public function add()
	{
		$this->load->view('claims/loss/form');
	} 
	public function edit()
	{	
		$data['row'] = $this->loss_model->item();
		$this->load->view('claims/loss/form',$data);
	}
    public function save()
    {
        $this->logs_model->save();
    }
} 
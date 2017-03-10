<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reps extends CI_Controller {
	
	public function index()
	{

        $data['insurers'] = $this->reps_model->all();
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
			$this->load->view('insurers/reps/index',$data);
	}
    public function add()
    {
        $data['ins'] = $this->insurers_model->get();
        if( $this->uri->segment(4) )
            $data['row'] = $this->reps_model->get();

        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
            $this->load->view('insurers/reps/form',$data);
    }
    public function edit()
    {
        $data['ins'] = $this->insurers_model->get();
        if( $this->uri->segment(4) )
            $data['row'] = $this->reps_model->get();

        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
            $this->load->view('insurers/reps/form',$data);
    }
    public function ajax()
    {
        $this->reps_model->ajax();
        exit;
    }
	public function save()
	{
        $this->reps_model->save();
	    $insurer_id = $this->input->post('insurer_id');
        header('location: '.base_url().'index.php/insurers/reps/'.$insurer_id);
        exit;
	}
} 
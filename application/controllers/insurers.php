<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insurers extends CI_Controller {
	
	public function index()
	{ 
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
            $this->load->view('insurers/index',array( 'insurers'=>$this->insurers_model->all()) );
	}
    public function add()
    {
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
            $this->load->view('insurers/form');

    }
    public function claim()
    {
        $this->load->view('claims/insurer');

    }
    public function save()
    {

        $this->insurers_model->save();

        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Saved Insurer
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

        header('location: '.base_url().'index.php/insurers');
        exit;
    }

    public function edit($insurer_id)
    {

        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else

            //$this->load->view('insurers/form',array( 'row'=>$this->insurers_model->get()) );
            $this->load->view('insurers/form',array( 'row'=>$this->insurers_model->edit_insurer_info($insurer_id)) );

    }

    public function update(){
        $this->insurers_model->save();

        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Updated Insurer
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

        header('location: '.base_url().'index.php/insurers');
        exit;
    }


    public function delete($del_id)
    {

        $this->insurers_model->delete($del_id);
        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Deleted Insurer
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

        header('location: '.base_url().'index.php/insurers');
        exit;
    }


	public function rep()
	{
        $data['insurers'] = $this->reps_model->all();
        $data['row'] = $this->reps_model->get();
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
            $this->load->view('insurers/reps/form',$data);
	}
	public function reps()
	{
        $data['insurers'] = $this->reps_model->all();
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
            $this->load->view('insurers/reps/index',$data);
	}
	public function view()
	{
        $data['ins'] = $this->insurers_model->get();
        $data['insurers'] = $this->insurers_model->all();
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
            $this->load->view('insurers/view',$data);
	}
} 
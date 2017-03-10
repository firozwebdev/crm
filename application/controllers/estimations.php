<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estimations extends CI_Controller {

	public function index()
	{
        $data = array(
        'rows'=>$this->estimations_model->all() );
        $this->load->view('estimations/index',$data);
	}
    public function add()
    {
        $this->load->view('estimations/form');
    }
    public function save()
    {
        $this->estimations_model->save();
        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Saved Policy Information
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

        header('location: '.base_url().'index.php/claims/estimations');
        exit;
    }
    public function delete()
    {
        $this->estimations_model->delete();
        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Deleted Estimation
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

        header('location: '.base_url().'index.php/claims/estimations');
        exit;
    }
	public function view()
	{
        $this->load->view('estimations/view',$data);
	}
} 
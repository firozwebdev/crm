<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Commissions extends CI_Controller {

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
    }
	public function view()
	{
        $this->load->view('estimations/view',$data);
	}
} 
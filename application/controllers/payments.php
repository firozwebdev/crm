<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payments extends CI_Controller {

	public function index()
	{
        $data = array(
        'rows'=>$this->payments_model->all() );
        $this->load->view('payments/index',$data);
	}
    public function add()
    {
        $this->load->view('payments/form');
    }
    public function save()
    {
        $this->payments_model->save();
    }
	public function view()
	{
        $this->load->view('payments/view',$data);
	}
} 
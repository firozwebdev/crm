<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homeowner extends CI_Controller {

	public function index()
	{ 
		// check if logged in
		if(!$this->session->userdata('logged_in')) {
			$this->load->view('account/login');
		}
		else 	
			$this->load->view('homeowner/index');
	}
    public function log()
    {
        // check if logged in
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
            $this->load->view('homeowner/log');
    }
}
 
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Property extends CI_Controller {
    public function index()
    {
        $data['rows'] = $this->property_model->get_property();
        $this->load->view('property/index',$data);
    }
    public function claims()
    {
        $data['rows'] = $this->property_model->get_property();
        $this->load->view('property/claims',$data);
    }
    public function delete()
    {
        $this->property_model->get_property();
        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Deleted Claim
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

        header('location: '.base_url().'index.php/properties/');
        exit;

    }

    public function add()
    {
        $this->load->view('property/form');
    }
    public function edit()
    {
        $data['row']=$this->property_model->get_property();
        $this->load->view('property/form',$data);
    }
    public function claim()
    {
        $this->load->view('property/form');
    }

    public function save()
    {
        $this->account_model->logged();
        $data['row'] = $this->property_model->get_property();
        // check if logged in
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
            $this->load->view('property/index',$data);
    }

	public function view()
    {
        $this->account_model->logged();
        $data['row'] = $this->property_model->get_property();
        $data['con'] = $this->property_model->get_property_contact($data['row']->claim_id);
        // check if logged in
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
            $this->load->view('property/view',$data);
    }
} 
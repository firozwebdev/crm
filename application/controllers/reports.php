<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends CI_Controller
{

    public function index()
    {
        $this->account_model->logged();
        $this->load->view('contacts/index', array('contacts' => $this->contacts_model->contacts()));
    }

    public function export()
    {
        $this->account_model->logged();
        $this->reports_model->export();
        exit;
    }

    public function property()
    {
        $this->account_model->logged();
        $this->load->view('reports/property', array('rows' => $this->property_model->get_properties()));
    }

    public function activity()
    {
        $this->account_model->logged();
        $this->load->view('reports/activity', array('rows' => $this->property_model->get_properties()));
    }

    public function summary()
    {
        $this->account_model->logged();
        $this->load->view('reports/summary', array('rows' => $this->property_model->get_properties()));
    }
} 
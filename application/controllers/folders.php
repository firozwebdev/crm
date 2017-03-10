<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Folders extends CI_Controller {
	
	public function index()
	{	
		$this->load->view('folder/index');
	}
    public function ajax()
    {
        $this->folders_model->ajax();
    }
    public function save()
    {
        $this->folders_model->save();
        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Saved Folder
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

        header('location: '.base_url() );
        exit;
    }
    public function delete()
    {
        $this->folders_model->delete();
        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Deleted Folder
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

        header('location: '.base_url() );
        exit;
    }
	public function view()
	{	
		$this->load->view('folder/index');
	}	
} 
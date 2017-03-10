<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Values extends CI_Controller {
	
	public function index()
	{
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
			$this->load->view('admin/index',array('contacts'=>$this->contacts_model->contacts() ));
	}
    public function user()
    {
        $data['row']=$this->users_model->user();
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
        $this->load->view('users/form',$data);
    }

    public function values()
    {
        $data['row']=$this->users_model->user();
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
            $this->load->view('admin/index',$data);
    }
    public function user_save()
    {
        $this->users_model->save();

    }
    public function user_delete()
    {
        $this->account_model->delete($this->input->post('user'));

        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Deleted Account
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

        header('location: '.base_url().'index.php/admin/users');
        exit;
    }
	public function users()
	{
        $data['users'] = $this->users_model->all();
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
		$this->load->view('users/index',$data);
	}
} 
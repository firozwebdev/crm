<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller
{
    public function index()
    {
        $this->load->view('account/index');
    }

    public function active()
    {
        $this->account_model->active();
        echo 'suspend';
        exit;
    }

    public function create()
    {

        // create a new user
        $this->account_model->create();

        if( $this->account_model->login() ) :
            header( 'location: '.base_url() );
        else :
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-danger">
            Problem Accessing Account
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);
            header( 'location: '.base_url() );
        endif;
        exit;
    }

    public function delete()
    {
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }

        // logout
        $this->account_model->logout();

        // delete by user ID
        $this->account_model->delete($user_id);
    }

    public function forgot()
    {
        $this->load->view('account/forgot');
    }

	public function login()
	{

        $user_data=$this->account_model->login();



        if( !empty($user_data) ){
            $this->session->sess_destroy();
            $this->session->sess_create();
			$this->session->set_userdata($user_data);
            if( $user_data['usertype']=='9'){
                header( 'location: '.base_url() );
            } elseif( $user_data['usertype']=='14') {
                header( 'location: '.base_url().'index.php/homeowner' );
            }
        } else {
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-danger">
            Problem Accessing Account
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);
            header( 'location: '. base_url() );
        }
        exit;
	}



	public function logout()
	{	
		$this->account_model->logout();
        header( 'location: '.base_url() );
	}

    public function profile()
    {
        $this->load->view('account/profile');
    }

    public function settings()
    {
        $this->load->view('account/settings');
    }

    public function suspend()
    {
        $this->account_model->suspend();
        echo 'active';
        exit;
    }
} 
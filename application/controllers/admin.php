<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function index()
	{
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
			$this->load->view('admin/index',array('contacts'=>$this->contacts_model->contacts() ));
	}
    public function add_user()
    {
        $data=[];
        //$data['row']=$this->users_model->single_user();


        $this->load->view('users/form',$data);
    }
    public function lists()
    {
        $data['rows']=$this->forms_model->values();
        $this->load->view('admin/lists',$data);
    }
    public function values()
    {
        $data['rows']=$this->forms_model->val_list($this->uri->segment(3));
        $this->load->view('admin/values',$data);
    }
 /*  public function user_save()
    {
        $this->users_model->save();
        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Added User
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

        header('location: '.base_url().'index.php/admin/users');
        exit;
    }

*/

    public function user_save($user_id)
    {

      //  echo '<pre>';
       // print_r($_POST);
       // die();
        $this->users_model->save($user_id);
        if(!$user_id){
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
            Added User
            </div></div></div>';
        }
        if($user_id){
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
            Updated User
            </div></div></div>';
        }


        $this->session->set_flashdata('msg', $msg);

        header('location: '.base_url().'index.php/admin/users');
        exit;
    }
    public function user_edit($user_id)
    {
       $data['row']= $this->users_model-> current_user($user_id);


       if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
            $this->load->view('users/form',$data);

    }
 public function user_update()
    {

        $user_id= $this->input->post('user_id');

        $this->users_model->save($user_id);

        if($user_id){
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
            Updated User
            </div></div></div>';
        }


        $this->session->set_flashdata('msg', $msg);

        header('location: '.base_url().'index.php/admin/users');
        exit;
    }









    public function user_delete($user_id)
    {
        $this->account_model->delete($user_id);

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
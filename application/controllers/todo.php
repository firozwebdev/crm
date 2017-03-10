<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('todo_model');
        $this->load->model('users_model');
    }
    public function index(){
        $user_id = $this->session->userdata('user_id');
        
        $data['rows'] = $this->todo_model->todolist($user_id);

        $this->load->view('todo/index',$data);
    }

    public function create(){

        $this->load->view('todo/form');
    }

    public function save()
    {
        // echo '<pre>';
        // print_r($_POST);
         //die();
        $todo_id = $this->input->post('todo_id');


        if(!$todo_id) {
           $this->todo_model->save();

            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
            Saved Todo
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);


        }
        if($todo_id) {

            $this->todo_model->save();
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
            Updated Todo
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);


        }
        header('location: ' . base_url() . 'index.php/todo/');
        exit;
    }

    public function edit($todo_id){
        $data['row']=$this->todo_model->row($todo_id);
        $this->load->view('todo/form',$data);
    }

    public function delete($todo_id)
    {

        $this->todo_model->delete($todo_id);


        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Deleted Todo
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

        header('location: '.base_url().'index.php/todo/');
        exit;
    }
}
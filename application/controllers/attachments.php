<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attachments extends CI_Controller {

    public function index()
    {
        $this->load->view('attachments/index');
    }

    public function claim()
    {
        $this->load->view('attachments/index');
    }
    public function delete()
    {
        $this->uploads_model->delete();
        if( $this->uri->segment(4)=='dash' ):
            header('location: '.base_url().'index.php/');
        else:
            header('location: '.base_url().'index.php/attachments/');
        endif;
        exit;
    }
    public function edit()
    {
        $this->load->view('attachments/form');
    }
    public function form()
    {
        $this->load->view('attachments/form');
    }
    public function title()
    {
        $this->load->view('attachments/titles');
    }
    public function save()
    {
        $this->uploads_model->save();
        if( $this->uri->segment(4)=='dash' ):
            header('location: '.base_url().'index.php/');
        else:
            header('location: '.base_url().'index.php/attachments/');
        endif;
        exit;
    }
    public function view()
    {
        $data['row']=$this->calendar_model->row();
        $this->load->view('attachments/form',$data);
    }
} 
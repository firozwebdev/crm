<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {
	
	public function index()
	{

			$this->load->view('contacts/index',array('contacts'=>$this->contacts_model->contacts() ));
	}
    public function add()
    {
        $this->load->view('contacts/form');
    }
    /*
    public function delete()
    {
        $this->contacts_model->delete();
        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Deleted Contact
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

        if( $this->uri->segment(4) )
            header('location: '.base_url().'index.php/claims/contacts/'.$this->uri->segment(4).'/'.$this->uri->segment(3));
        else
            header('location: '.base_url().'index.php/contacts/');
        exit;
    } */

    public function delete($contact_id){
       $delete = $this->contacts_model->delete($contact_id);

        if($delete){
            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
            Deleted Contact
            </div></div></div>';
            $this->session->set_flashdata('msg', $msg);
            header('location: '.base_url().'index.php/contacts/');
            exit;
        }
    }
    public function edit($contact_id)
    {
        $data['row']=$this->contacts_model->single_contact_for_edit($contact_id);

        $this->load->view('contacts/form',$data);
    }
    public function save()
    {

        $contact_id = $this->input->post('contact_id');


        if(empty($contact_id)) :

            $contact_id=$this->contacts_model->save();


            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
            Saved Contact
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);

            header('location: '.base_url().'index.php/contacts/');
            exit;
        endif;

        if(!empty($contact_id)) :

            $this->contacts_model->update();

            $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
            Updated Contact
            </div></div></div>';

            $this->session->set_flashdata('msg', $msg);

            header('location: '.base_url().'index.php/contacts/');
            exit;
        endif;



    }

    public function save_claim()
    {

        $contact_id = $this->contacts_model->save();
        $this->contacts_model->map_claim($contact_id,$this->input->post('claim_id'));
        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Saved Contact
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

        if( $this->input->post('contact_count')==0 )
            header('location: '.base_url().'index.php/property/add/'.$this->input->post('claim_id'));
        else
            header('location: '.base_url().'index.php/claims/contacts/'.$this->input->post('claim_id'));
        exit;
    }
	public function view()
	{ 
			$this->load->view('contacts/view');
	}

    public function contact_details($contact_id){
        $data = [];
        $data['contact_id']=$contact_id;
        $data['event_rows']= $this->contacts_model->all_rows($contact_id);
        $data['log_rows']= $this->logs_model->all_rows($contact_id);
        $data['single_contact']=$this->contacts_model->customer_by_contact_id($contact_id);
       // echo '<pre>';
        //print_r($data['log_rows']);
       // die();

        $this->load->view('contacts/contact_detail',$data);
    }

    public function create_event_by_contact_id($contact_id){
        $data=[];
        $data['contact_id']=$contact_id;
        $data['customer_by_contact_id']=$this->contacts_model->customer_by_contact_id($contact_id);

        $this->load->view('events/form',$data);
    }

    public function save_event_by_contact_id(){
        $calendar_id = $this->input->post('calendar_id');
        $created_for = $this->input->post('created_for');
       if(!$calendar_id){
           if(!empty($created_for)) :
               $this->calendar_model->save();
               $msg = '<span style="position:relative;top:64px;" class=" alert alert-success"> Save Event with this user</span>';

               $this->session->set_flashdata('msg', $msg);

               header('location: '.base_url().'index.php/contacts/contact_details/'.$created_for);
               exit;
           endif;
       }
        if($calendar_id){
           if(!empty($created_for)) :
               $this->calendar_model->save();
               $msg = '<span style="position:relative;top:64px;" class=" alert alert-success"> Update Event with this user</span>';

               $this->session->set_flashdata('msg', $msg);

               header('location: '.base_url().'index.php/contacts/contact_details/'.$created_for);
               exit;
           endif;
       }
    }

    public function contact_details_edit($calendar_id){
        $data=[];
        $data['row']=$this->calendar_model->row($calendar_id);

        $this->load->view('events/form',$data);
    }

    public function create_log_by_contact_id($contact_id){

        $data=[];
        $data['contact_id']=$contact_id;


        $data['customer_by_contact_id']=$this->contacts_model->customer_by_contact_id($contact_id);


        $this->load->view('logs/form2',$data);
    }

    public function save_log_by_contact_id(){

        $log_id= $this->input->post('log_id');
        $created_for = $this->input->post('created_for');
        if(!$log_id){
            if(!empty($created_for)) :
                $this->logs_model->save();
                $msg = '<span style="position:relative;top:64px;" class=" alert alert-success"> Save Log with this user</span>';

                $this->session->set_flashdata('msg', $msg);

                header('location: '.base_url().'index.php/contacts/contact_details/'.$created_for);
                exit;
            endif;
        }
        if($log_id){
            if(!empty($created_for)) :
                $this->logs_model->save();
                $msg = '<span style="position:relative;top:64px;" class=" alert alert-success"> Update Log with this user</span>';

                $this->session->set_flashdata('msg', $msg);

                header('location: '.base_url().'index.php/contacts/contact_details/'.$created_for);
                exit;
            endif;
        }
    }

    public function log_details_edit($log_id){
        $data=[];
        $data['row']=$this->logs_model->row($log_id);
        //echo '<pre>';
        //print_r($data['row']);
       // die();
        $this->load->view('logs/form2',$data);
    }

  /*  public function single_contact_detail($contact_id){
        $data = [];
        $data['single_contact']=$this->contacts_model->customer_by_contact_id($contact_id);
        //echo '<pre>';
        //print_r($data['single_contact']);
        //die();
        $this->load->view('contacts/single_view',$data);


    }*/
} 
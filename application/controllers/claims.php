<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Claims extends CI_Controller {



	public function index()
	{
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else {
            $data = array(
				'claims'=>$this->claims_model->getClaims() );
		    $this->load->view('claims/index',$data);
        }
	}
    public function all()
    {
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else {
            $data = array(
                'claims'=>$this->claims_model->getClaims() );
            $this->load->view('claims/claims',$data);
        }
    }
    public function add()
    {

        $data['folder']=$this->uri->segment(3);

        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
            $this->load->view('claims/form',$data);
    }
    public function edit()
    {
        if( $this->uri->segment(3)=='' ) :
            header('location: '.base_url().'index.php/claims/');
            exit;
        endif;

        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else{
            $data['row'] = $this->claims_model->get();
            $this->load->view('claims/form',$data);
        }
    }
    public function delete()
    {
        $data['row'] = $this->claims_model->delete();
        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Deleted Claim
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

        header('location: '.base_url().'index.php/claims/');
        exit;
    }
    public function loss()
    {
        $data['rows'] = $this->loss_model->contents();
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
            $this->load->view('claims/loss/index',$data);
    }
    public function content()
    {
        $data['rows'] = $this->loss_model->contents();
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
            $this->load->view('claims/loss/form',$data);
    }
    public function policy()
    {
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else {
            $data['row']=$this->policy_model->get();
            $this->load->view('claims/policy',$data);
        }
    }

    public function payments()
    {
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else {
            $data['rows']=$this->payments_model->all();
            $this->load->view('payments/index',$data);
        }
    }
    public function commissions()
    {
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else {
            $data['rows']=$this->commissions_model->all();
            $this->load->view('commissions/index',$data);
        }
    }
    public function estimations()
    {
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else {
            $data['rows']=$this->estimations_model->all();
            $this->load->view('estimations/index',$data);
        }
    }
	public function property()
	{
        $data['rows'] = $this->property_model->get_properties();
		if( count($data['rows'])==1 && $this->uri->segment(4)  )
        {
            $prop = $data['rows'][0];
            $data = array();
            $data['row'] = $prop;
            $this->load->view('property/form',$data);
        } else {
		    $this->load->view('property/properties',$data);
        }
	}
	public function property_save()
	{
		$this->property_model->property_save();
		header('location: '.base_url().'index.php/claims/policy/'.$this->input->post('claim_id'));
        exit;
	}
	public function closed()
	{
			$data = array(
				'claims'=>$this->claims_model->claims() );
		$this->load->view('claims/closed',$data);
	}
	public function contact()
	{
			$data = array(
				'row'=>$this->contacts_model->claim());
        // check if logged in
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
            $this->load->view('claims/contact',$data);
	}
    public function contacts()
    {
        $data['rows'] = $this->claims_model->get_contacts();
        // check if logged in
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
            $this->load->view('claims/contacts',$data);
    }
	public function contact_save()
	{

        $contact_id = $this->contacts_model->save();
        $this->contacts_model->map_claim($contact_id,$this->input->post('claim_id'));
        header('location: '.base_url().'index.php/claims/contacts/'.$this->input->post('claim_id'));
        exit;
	}
    public function contact_delete()
    {

        $this->contacts_model->delete();
        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Deleted Contact
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);
        header('location: '.base_url().'index.php/claims/contacts/'.$this->input->post('claim_id'));
        exit;
    }
	public function save()
	{
        $claim_id = $this->claims_model->save();
        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Saved Claim
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);
        header('location: '.base_url().'index.php/claims/contact/'.$claim_id);
        exit;
	}
	public function view()
	{
		$data['clm'] = $this->claims_model->summary();
        $data['prop'] = $this->claims_model->properties();
        $data['con'] = $this->claims_model->contacts();
        // check if logged in
        if(!$this->session->userdata('logged_in')) {
            $this->load->view('account/login');
        }
        else
            $this->load->view('claims/view',$data);
	}
    function properties_ajax()
    {
        $data = $this->claims_model->properties_ajax();
        echo json_encode($data);
        exit;
    }
} 
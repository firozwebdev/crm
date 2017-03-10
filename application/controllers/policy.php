<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Claims extends CI_Controller {


	public function save()
	{
        $this->policy_model->save();
        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Saved Policy Information
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

        header('location: '.base_url().'index.php/claims/loss/'.$this->input->post('claim_id'));
        exit;
	}
} 
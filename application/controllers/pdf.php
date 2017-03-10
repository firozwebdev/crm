<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pdf extends CI_Controller {

    public function activty()
    {
        $this->load->view('pdf/activty');
        exit;
    }
    public function claim()
	{
        $this->load->view('pdf/claim');
        exit;
	}
    public function staff()
    {
        $this->load->view('pdf/staff');
        exit;
    }
    public function summary()
    {
        $this->load->view('pdf/summary');
        exit;
    }

} 
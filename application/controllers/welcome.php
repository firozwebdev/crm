<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{



		if(!$this->session->userdata('user_id')) {
			$this->load->view('account/login');
		}
		else {
//            $this->load->library('googlemaps');
//            $this->googlemaps->initialize();
//
//
//            foreach ($this->map_model->props() as $coordinate) {
//                $marker = array();
//                if( $coordinate->property_lat=='' ) :
//                    $add = $this->googlemaps->get_lat_long_from_address($coordinate->property_address_1.' '.$coordinate->property_city.' '.$coordinate->property_state.' '.$coordinate->propery_zip );
//                    if( $add[0]!=0 || $add[1]!=0 ):
//                        $marker['position'] = $add[0].','.$add[1];
//                    endif;
//                else:
//                    $marker['position'] = $coordinate->property_lat.','.$coordinate->property_lon;
//                endif;
//                $marker['onclick']="window.location='".base_url()."index.php/property/view/".$coordinate->property_id."'";
//                $this->googlemaps->add_marker($marker);
//            }
//            $this->googlemaps->add_marker($marker);
//
//            $data['map'] = $this->googlemaps->create_map();

//            if( $this->session->userdata('usertype')=='home_owner' )
//                $this->load->view('homeowner/index');
//            else
                $this->load->view('index',$data);

        }
    }


}
 
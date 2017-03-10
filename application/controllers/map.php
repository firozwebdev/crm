<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Map extends CI_Controller {
	
	public function index()
	{
        $this->load->library('googlemaps');
        $config['map_height']='680';
        $config['zoom']='4';
        $this->googlemaps->initialize($config);


        foreach ($this->map_model->props() as $coordinate) {
            $marker = array();
            if( $coordinate->property_lat=='' ) :
                $add = $this->googlemaps->get_lat_long_from_address($coordinate->property_address_1.' '.$coordinate->property_city.' '.$coordinate->property_state.' '.$coordinate->propery_zip );
                if( $add[0]!=0 || $add[1]!=0 ):
                    $marker['position'] = $add[0].','.$add[1];
                endif;
            else:
                $marker['position'] = $coordinate->property_lat.','.$coordinate->property_lon;
            endif;
            $marker['infowindow_content']='<div style="height:280px;width:320px"><a href="'.base_url().'index.php/property/view/'.$coordinate->property_id.'">'.$coordinate->property_address_1.'</a><br />';
            $this->googlemaps->add_marker($marker);
        }
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();
		$this->load->view('map/index',$data);
	}
} 
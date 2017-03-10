<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Address extends CI_Controller {

    public function update()
    {
        echo 'test';
        $q = $this->property_model->no();
        print_r( $q );

        foreach( $q as $r ) :
            if( !$r->property_lon || !$r->property_lat ) :
            $mapaddress = urlencode($r->property_address_1.' '.$r->property_city.' '.$r->property_state.' '.$r->property_zip);

            echo $mapaddress;$request_url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$mapaddress."&sensor=true";
            $xml = simplexml_load_file($request_url) or die("url not loading");
            $status = $xml->status;

            if ($status=="OK") {
                $Lat = $xml->result->geometry->location->lat;
                $Lon = $xml->result->geometry->location->lng;
                $LatLng = "$Lat,$Lon";
            }
            else
            {
                $Lat = 0;
                $Lon = 0;
                $LatLng = "$Lat,$Lon";
            }
            $this->db->query("UPDATE ".dbpre('property')." property_lat='$Lat', property_lat='$Lon' WHERE propery_id='$r->property_id'");
            endif;
        endforeach;
    }
} 
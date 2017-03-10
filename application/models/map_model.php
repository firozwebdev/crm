<?php
class Map_model extends CI_Model {

	function __construct()
	{ 
		parent::__construct();
		$this->load->database(); 
	}

	function props()
	{
		$propsQ = $this->db->query("SELECT *,property_lon as longitude, property_lat as latitude FROM ".dbpre('property')." WHERE ".dbpre('property').".client_id='".$this->session->userdata('client_id')."'");
	 	$props = $propsQ->result();
		if( $props ){ 
			foreach( $props as $p ){				
				$arrprops[] 				= $p;
				$arrprops[$p->property_id]->renderlink 	= '<div style="width:200px; height:80px;" class="info-window"><b>'.$p->property_name.'</b><br/>';
				$arrprops[$p->property_id]->renderlink 	.= '<a href="index.php?option=com_claims&view=summary&folder_id='.$p->property_folder_id.'&property_id='.$p->property_id.'">Summary</a></div>';
			}
		}
        if( empty($arrprops))
            $arrprops=array(0=>array(0));
	  	return $arrprops;
	}
}
?>
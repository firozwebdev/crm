<?php
class Reports_model extends CI_Model {

	function __construct()
	{ 
		parent::__construct();
		$this->load->database(); 
	}

	function export()
	{
		/*
		set_time_limit(10);
		require_once JPATH_COMPONENT.DS."excel/class.writeexcel_workbook.inc.php";
		require_once JPATH_COMPONENT.DS."excel/class.writeexcel_worksheet.inc.php";
		require_once JPATH_COMPONENT.DS."excel/class.writeexcel_format.inc.php";

		$fname = tempnam("cache/", "property ".date("m-d-y Hi A",time()).".xls");  
		$workbook = &new writeexcel_workbook($fname);
		 	
		$worksheet = &$workbook->addworksheet();
         
	
		$db = JFactory::getDBO(); 
		$query = "SELECT * FROM #__claims_property WHERE #__claims_property.client_id=".client_id();
		
		$db->setQuery( $query );
		$db->query();                   
		$data = $db->loadAssocList(); 
		
		$r = 0;
		for( $i=0;$i<count($data);++$i ) { 
			$c=0; 
			$unset = array('property_id','property_folder_id','property_create_tstamp','property_lastmod_tstamp',
							'property_lastmod_userid','client_id','property_mailing_address','property_create_userid','property_lat','property_lon');
			foreach( $unset as $un) unset( $data[$i][$un] );
			if( $r==0 ) {
			   	foreach( $data[$i] as $k => $v ) {
					$k = str_replace('property','',$k);
					$worksheet->set_column(0, count($data[$i]),  20);
					$worksheet->write($r, $c,ucwords(str_replace("_"," ","$k")));
					++$c;         
				}    
				++$r;    
				$c=0;
			}         
			foreach( $data[$i] as $k => $v ) {
				if( $k=='created_on' or $k=='property_create_tstamp' or $k=='property_lastmod_tstamp') $worksheet->write($r,$c,date("m/d/Y",$v));
				else if( $k=='property_type' or $k=='property_construction' ) $worksheet->write($r,$c,val_get($v));  
				else $worksheet->write($r,$c,"$v");  
				++$c;
			}
			++$r;
		}

		$workbook->close();
		*/
		header("Content-Type: application/x-msexcel; name=\"property ".date("m-d-y Hi A",time()).".xls");  
		header("Content-Disposition: inline; filename=\"property ".date("m-d-y Hi A",time()).".xls");  
		$fh=fopen($fname, "rb");
		fpassthru($fh); 
		unlink($fname);
		exit;
	}
}
?>
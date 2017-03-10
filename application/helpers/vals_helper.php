<?
function dbpre($table)
{
    #echo $this->CI->db->dbprefix($table);
    return( 'live_'.$table );
}



function time_cov($currentDateTime){

    $newDateTime = date('g:i A', strtotime($currentDateTime));
    return $newDateTime;
}
function date_convert($date){
    $daterange = [
        $d1 = substr($date,0,9),
        $d2 = substr($date,12,20),
    ];
    return $daterange;
}
?>
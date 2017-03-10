<?php
class Folders_model extends CI_Model {

	function __construct()
	{ 
		parent::__construct();
		$this->load->database(); 
	}

    function all()
    {
        $propsQ = $this->db->query("SELECT * FROM ".dbpre('folders')." WHERE client_id=".$this->account_model->client_id()." AND 1 LIMIT 0,10");
        return $propsQ->result();
    }
    function delete()
    {
        $this->db->query("UPDATE ".dbpre('claim')." SET claim_folder_id='' WHERE claim_folder_id='".mysql_real_escape_string($this->uri->segment(3))."' AND client_id=".$this->account_model->client_id()." ");
        $this->db->query("DELETE FROM ".dbpre('folders')." WHERE folder_id='".mysql_real_escape_string($this->uri->segment(3))."' AND client_id=".$this->account_model->client_id()." ");

    }
    function total()
    {
        $propsQ = $this->db->query("SELECT * FROM ".dbpre('folders')." WHERE client_id=".$this->account_model->client_id()." AND 1 ");
        return $propsQ->result();
    }
    function ajax()
    {
        if( is_numeric($this->uri->segment(3)) && $this->uri->segment(3)>1 ) :
            $end = $this->uri->segment(3) * 10;
            $start = $end - 10;
        else:
            $start = 0;
            $end = 10;
        endif;
        $propsQ = $this->db->query("SELECT * FROM ".dbpre('folders')." WHERE client_id=".$this->account_model->client_id()." AND 1  LIMIT $start,10");

        ?>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
            <tr>
                <th>Name</th>

                <th width="32%" style="text-align:center">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?
            foreach( $propsQ->result() as $fl ) : ?>
                <tr>
                    <td><h2><? echo $fl->folder_name; ?></h2></td>

                    <td align="center">
                        <a class="btn btn-success" title="View <? echo $fl->folder_name; ?>" href="/index.php/folders/view/<? echo $fl->folder_id; ?>">
                            <i class="icon-zoom-in "></i>
                        </a>
                        <?
                        $cnt = count( $this->folders_model->props($fl->folder_id) );
                        if( $cnt == 0 ) :  ?>
                            <a class="btn btn-danger" title="Delete <? echo $fl->folder_name; ?>" href="<? echo base_url(); ?>index.php/folders/delete/<? echo $fl->folder_id; ?>">
                                <i class="icon-trash "></i>
                            </a>
                        <? else: ?>
                        <a class="btn btn-folder-closed" title="Files <? echo $fl->folder_name; ?>" href="<? echo base_url(); ?>index.php/folders/view/<? echo $fl->folder_id; ?>" >
                            <i class="icon-folder-open"></i>
                            <? endif; ?>
                    </td>
                </tr>
                <? ++$r;
            endforeach;
            for( $c=count( $propsQ->result() );$c<10;++$c) : ?>
            <tr>
                <td><h2>&nbsp;</h2></td>

                <td align="center">

                </td>
            </tr>
            <?
            endfor; ?>
		</tbody>
    </table>
    <?
    }

	function props($id='')
	{
        if($this->uri->segment(3))
            $id=$this->uri->segment(3);
		$propsQ = $this->db->query("SELECT * FROM ".dbpre('claim')." WHERE claim_folder_id='".mysql_real_escape_string($id)."' AND client_id=".$this->account_model->client_id());

        $props = $propsQ->result();
		if( $props ){
			foreach( $props as $p ){
				$arrprops[] 				= $p;
				$arrprops[$p->property_id]->renderlink 	= '<div style="width:200px; height:80px;" class="info-window"><b>'.$p->property_name.'</b><br/>';
				$arrprops[$p->property_id]->renderlink 	.= '<a href="index.php?option=com_claims&view=summary&folder_id='.$p->property_folder_id.'&property_id='.$p->property_id.'">Summary</a></div>';
			}
		}

	  	return $arrprops;
	}

    function save()
    {
        $fld = new stdclass;
        $fld->folder_name = $this->input->post('folder_name');
        $fld->client_id = $this->account_model->client_id();

        $this->db->insert(dbpre('folders'),$fld);
    }
}
?>

<?php
class Uploads_model extends CI_Model {
 
    function __construct()
    { 
        parent::__construct();
		$this->load->database(); 
    }
    function delete()
    {
        $file = $this->uploads_model->upload();
        unlink($_SERVER['DOCUMENT_ROOT'].$file->file_path );
        $q=$this->db->query('DELETE FROM '.dbpre('uploads').' WHERE file_id="'.mysql_real_escape_string($this->uri->segment(3)).'" AND '.dbpre('uploads').'.client_id="'.$this->session->userdata('client_id').'"');
        
    }
    function upload()
    {
        $q=$this->db->query('SELECT * FROM '.dbpre('uploads').' WHERE file_id="'.mysql_real_escape_string($this->uri->segment(3)).'" AND '.dbpre('uploads').'.client_id="'.$this->session->userdata('client_id').'"');
        return $q->row();
    }
    function save()
    {

        for($j=0; $j < count($_FILES["file"]['name']); $j++)
        { //loop the uploaded file array
            $filen = $_FILES["file"]['name']["$j"]; //file name
            $path = $_SERVER['DOCUMENT_ROOT'].'/uploads/'.$this->session->userdata('client_id').'/'.$filen; //generate the destination path
            if( move_uploaded_file($_FILES["file"]['tmp_name']["$j"],$path) ) :
                $add = new stdclass;
                $add->created_on = time();
                $add->created_by = $this->session->userdata('user_id');
                $add->client_id = $this->session->userdata('client_id');
                $add->file_title = $this->input->post('title');
                $add->file_path = '/uploads/'.$this->session->userdata('client_id').'/'.$filen;
                $add->file_display = 'yes';
                $this->db->insert(dbpre('uploads'),$add);
            endif;
        }

        $msg = '<div class="row"><div class="col-lg-12"><div class="alert alert-success">
        Successful Upload
        </div></div></div>';

        $this->session->set_flashdata('msg', $msg);

    }

    function no_claim()
    {
        $q=$this->db->query('SELECT * FROM '.dbpre('uploads').'  WHERE '.dbpre('uploads').'.client_id="'.$this->session->userdata('client_id').'" LIMIT 0,5');

        return $q->result();
    }
}
?>
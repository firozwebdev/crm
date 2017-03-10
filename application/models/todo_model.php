<?php
class Todo_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function save()
    {

        $sv = new stdClass();

        $sv->todo_id=$this->input->post('todo_id');
        $sv->user_id = $this->session->userdata('user_id');
        $sv->todo_title=$this->input->post('todo_title');
        $sv->todo_deadline=$this->input->post('todo_deadline');
        $sv->todo_priority=$this->input->post('todo_priority');
        $sv->todo_detail=$this->input->post('todo_detail');


        if( !$sv->todo_id):
            $this->db->insert('live_todo',$sv);

        else:
            $this->db->where('todo_id',$sv->todo_id);
            $this->db->update('live_todo',$sv);
        endif;
        return true;
    }

    public function todolist($user_id){
        $conQ = $this->db->query("select * from live_todo where user_id = '$user_id'   order by todo_id desc");

        return $conQ->result();
    }

    public function row($todo_id){
        $conQ = $this->db->query("select * from live_todo where todo_id = '$todo_id'");

        return $conQ->row();
    }

    public function delete($todo_id){
        $this->db->query("DELETE FROM live_todo WHERE todo_id='$todo_id'");
        return true;
    }
}
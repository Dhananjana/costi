<?php
/**
 * Created by PhpStorm.
 * User: thari
 * Date: 2017-12-27
 * Time: AM 7.37
 */

class Question_model extends CI_Model
{
    public function __construct()
    {
        $this->load->helper('date');
    }

    public function record_count(){
        return $this->db->count_all("questions");
    }

    public function fetch_questions($limit, $start){
        $this->db->limit($limit, $start);
        $this->db->where('status!=', 'requested');
        $this->db->order_by("likes", "desc");
        $query = $this->db->get("questions");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function add_data($data){
        $this->db->insert('questions',$data);
        $insertId = $this->db->insert_id();

        return $insertId;

    }

    public function fetch_data(){

    }

    public function update_like($id){
        $data=array(
            'question_id'=>$id,
            'username'=>$this->session->userdata('username'),
        );
        $this->db->set('likes', 'likes+1', FALSE);
        $this->db->where('id', $id);
        $this->db->update('questions');
        $this->db->insert('likes',$data);

        return;
    }

    public function fetch_likea(){
        $query=$this->db->get('likes');
        return $query->result();
    }

    public function getAuthority()
    {
        $query = $this->db->get('authorities');
        $result = $query->result();

        $au_id = array('-CHOOSE-');
        $au_name = array('-CHOOSE-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($au_id, $result[$i]->id);
            array_push($au_name, $result[$i]->name);
        }
        return array_combine($au_id, $au_name);
    }

    public function sharedetails(){
        $this->db->set('username',$this->input->post('name'));
        $this->db->set('email',$this->input->post('email'));
        $this->db->where('id',$this->input->post('question_id') );
        $this->db->update('questions');
        return;

    }

    public function get_question($id){
        $this->db->where('id',$id);
        $query=$this->db->get('questions');
        return $query->result();
    }
    public function infrastructure_show(){
        $this->db->where('category','Infrastructure');
        $query=$this->db->get('questions');
        return $query->result();
    }

    public function funds_show(){
        $this->db->where('category','Funds');
        $query=$this->db->get('questions');
        return $query->result();
    }

    public function human_Resource_Skill_Development_show(){
        $this->db->where('category','Human Resource Skill Development');
        $query=$this->db->get('questions');
        return $query->result();
    }
    
}
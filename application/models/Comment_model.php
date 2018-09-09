<?php
/**
 * Created by PhpStorm.
 * User: thari
 * Date: 2017-12-27
 * Time: PM 5.54
 */

class Comment_model extends CI_Model
{
    public function record_count($id){
        $this->db->where('question_id',$id);
        return $this->db->count_all("comments");
    }

    public function fetch_comments($id){
        $this->db->where('question_id',$id);
        $query=$this->db->get('comments');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    public function add_data(){
        $data=array(
            'content'=>$this->input->post('content'),
            'question_id'=>$this->input->post('question_id'),
        );
        $insert = $this->db->insert('comments',$data);

        $this->db->set('comments', 'comments+1', FALSE);
        $this->db->where('id',$this->input->post('question_id') );
        $this->db->update('questions');

        return $insert;
    }
}
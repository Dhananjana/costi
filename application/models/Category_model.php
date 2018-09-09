<?php

class Category_model extends CI_Model
{
    public function get_all(){
        $query = $this->db->get('questions');
        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        return false;
    }

}

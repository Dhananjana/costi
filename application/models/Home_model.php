<?php

class Home_model extends CI_Model
{
    public function Infrastructure_count(){
      $this->db->where('category','Infrastructure');
      $query = $this -> db ->get("questions");
      return $query -> num_rows();  
    }
     public function Administrative_and_Procurement_count(){
      $this->db->where('category','Administrative and Procurement');
      $query = $this -> db ->get("questions");
      return $query -> num_rows();  
    }
    public function Funds_count(){
      $this->db->where('category','Funds');
      $query = $this -> db ->get("questions");
      return $query -> num_rows();  
    }
    public function Human_Resource_count(){
      $this->db->where('category','Human Resource and Skill Development');
      $query = $this -> db ->get("questions");
      return $query -> num_rows();  
    }
	 
}
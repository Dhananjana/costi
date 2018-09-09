<?php

class AdminModel extends CI_Model
{
	public function get(){
		$this->db->select('*');
	    $this->db->from('questions');
	    $this->db->where('status','requested');
	    $query = $this->db->get();
	    return $query->result();
	}
	function can_login($username, $password)
	{
		$this->db->where('userid', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('adminlog');//check whether the user name and password exist.

		if($query->num_rows()>0){
			return true;
		}
		else{
			return false;
		}
	}
	function approve($data){
		$this->db->set('status','open');
		$this->db->where('id',$data);
		$this->db->update('questions');

	}
	function reject($data){
		$this->db->set('status','canceled');
		$this->db->where('id',$data);
		$this->db->update('questions');

	}

    function getPro(){
        $this->db->select('*');
        $this->db->from('questions');
        $this->db->where('status','open');
        $query = $this->db->get();
        return $query->result();
    }

    function  updatePro($id){
        $this->db->set('status','closed');
        $this->db->where('id',$id);
        $this->db->update('questions');
    }

    function getQc(){
        $this->db->select('*');
        $this->db->from('questions');
        $this->db->where('status','open');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function getSq(){
        $this->db->select('*');
        $this->db->from('questions');
        $this->db->where('status','closed');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function getUc(){
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        return $query->num_rows();
    }


}
?>
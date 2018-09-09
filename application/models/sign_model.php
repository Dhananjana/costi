<?php

class sign_model extends CI_Model
{
	public function reg($data){
		$insert = $this->db->insert('user',$data);
  		return $insert;
	}
	function can_login($email, $password)
	{
		$this->db->select('id');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get('user');//check whether the user name and password exist.

		if($query->num_rows()>0){
			//return true;
			return $query;
		}
		else{
			return false;
		}
	}
}
?>
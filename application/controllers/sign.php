<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends CI_Controller {
	public function index(){
		$this->load->view('newsign');
		
		$this->load->library('form_validation');
    }
    public function reg(){
    	$this->load->library('form_validation');
    	$this->form_validation->set_rules('name','Name','required');
    	$this->form_validation->set_rules('email','Email','required');
    	$this->form_validation->set_rules('password','Password','required');
    	if($this->form_validation->run()){
    		$data = array(
    			'name' => $this->input->post('name'),
    			'email' => $this->input->post('email'),
    			'password' => $this->input->post('password'),
                'institute' => $this->input->post('institute')
    			);
    		$this->load->model('sign_model');
    		$this->sign_model->reg($data);
    		redirect('main');
    	}else{
    		$this->load->view('newsign');
    	}

    }
    public function sign1(){
    	$this->load->library('form_validation');
    	$this->form_validation->set_rules('email2', 'Email', 'required');
    	$this->form_validation->set_rules('pass', 'Password', 'required');
    	if($this->form_validation->run()){
    		$email1 = $this->input->post('email2');
    		$pass = $this->input->post('pass');
    		$this->load->model('sign_model');
    		$query = $this->sign_model->can_login($email1, $pass);
            if($query){
    			/*$session_data = array(
						 $username = 'username'
					);*/
				//$this->session->set_userdata('logged','1');
				//$this->session->set_userdata('username',$email1);
				//if the user is can logging set user data to logged
				//$data['username'] = $username;
				//redirect(base_url().'main');
                foreach ($query->result() as $row)
                {
                        //echo $row->id;
                        $this->session->set_userdata('logged', $row->id);
                        
                }
                $this->session->set_userdata('username',$email1);
                redirect(base_url().'main');
                   
            }
    		else{
				$this->session->set_flashdata('error','Invalid username and password');
				$this->index();			
			}
    	}
    	else{
			$this->index();
		}	
    }
    
}
?>
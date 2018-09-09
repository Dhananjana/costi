<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		if($this->session->userdata('logged') == 1){
			$this->load->model('AdminModel');
			$data1['reg2'] = $this->AdminModel->get();
			$data['reg1'] = $this->load->view('AdminReg',$data1,TRUE);
            $data['pros'] = $this->AdminModel->getPro();
            $data['qc']=$this->AdminModel->getQc();
            $data['sq']=$this->AdminModel->getSq();
            $data['uc']=$this->AdminModel->getUc();
			$this->load->view('Admin',$data);
		}
		else{
			$this->load->view('login');	//if the user does not exist agian load to new login view
		}
	}

	public function adminreg(){
		$this->load->model('AdminModel');
		$data['reg2'] = $this->AdminModel->get();//load only the request div to refresh automatically
		$this->load->view('AdminReg',$data);
	}
	public function load(){
		$refresh = 'refresh';
		$this->adminreg($refresh);//auto refresh the request part only
	}
	public function log(){
		$this->load->view('login');
	}
	public function validate(){//validate and check whether user data are correct.
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('AdminModel');
			if($this->AdminModel->can_login($username, $password)){
				$session_data = array(
						 $username = 'username'
					);
				$this->session->set_userdata('logged','1');//if the user is can logging set user data to logged
				//$data['username'] = $username;
				redirect(base_url().'Admin');
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
	public function approve(){
		$id = $this->uri->segment(3);
		$this->load->model('AdminModel');
		$this->AdminModel->approve($id);
		$this->index();
	}
	public function reject(){
		$id = $this->uri->segment(3);
		$this->load->model('AdminModel');
		$this->AdminModel->reject($id);
		$this->index();
	}

	public function updatePro(){
        $id = $this->uri->segment(3);
        $this->load->model('AdminModel');
        $this->AdminModel->updatePro($id);
        $this->index();
    }

}
?>
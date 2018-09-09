<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index(){
        $this->load->model("Home_model");
        $this->load->model("Category_model");
        $this->load->model("Question_model");
        $data['authority']=$this->Question_model->getAuthority();
        $data['Infrastructure'] = $this->Home_model->Infrastructure_count();
        $data['Administrative'] = $this->Home_model->Administrative_and_Procurement_count();
        $data['Funds'] = $this->Home_model->Funds_count();
        $data['Human_Resource'] = $this->Home_model->Human_Resource_count();


		$data1['home'] = $this->load->view('home',$data,TRUE);
        $data1['nav'] = $this->load->view('header1',NULL,TRUE);
        $this->load->view('header');
        $this->load->view('newhome',$data1);
        $this->load->view('footer');

	}

    public function getCategory(){
        $category['item_list'] = $this->Category_model->get_all();

        if($category){
            echo json_encode($category['item_list']);
        }
    }
    public function loadform(){
        $this->load->view('ProForm');
    }
    public function about(){
        $data1['nav'] = $this->load->view('header1',NULL,TRUE);
        $this->load->view('header');
        $this->load->view('about',$data1);
        $this->load->view('footer');
    }
    public function contact(){
        $data1['nav'] = $this->load->view('header1',NULL,TRUE);
        $this->load->view('header');
        $this->load->view('contactus',$data1);
        $this->load->view('footer');
    }

    public function subcat(){
        $data1['nav'] = $this->load->view('header1',NULL,TRUE);
        $this->load->view('header');
        $this->load->view('subcat',$data1);
        $this->load->view('footer');
    }
    
}
?>
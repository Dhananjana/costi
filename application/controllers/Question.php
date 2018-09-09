<?php
/**
 * Created by PhpStorm.
 * User: thari
 * Date: 2017-12-27
 * Time: AM 7.35
 */

class Question extends CI_Controller
{
    public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->model("Question_model");
        $this->load->model("Comment_model");
        $this->load->library("pagination");
    }

    public function index(){
        $data['authority'] = $this->Question_model->getAuthority();
        $config = array();
        $config["base_url"] = base_url() . "question/index";
        $config["total_rows"] = $this->Question_model->record_count();
        $config["per_page"] = 4;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->Question_model->fetch_questions($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();


        $data["likea"]=$this->Question_model->fetch_likea();
       // $this->load->view('header');
        $data['nav'] = $this->load->view('header1',NULL,TRUE);
       $data['create'] = $this->load->view('questions/create', NULL, TRUE);
        $this->load->view('questions/index',$data);
        $this->load->view('footer');
    }
    public function create(){
        date_default_timezone_set('Asia/Colombo'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_name');


        $file_name=$this->upload->data();
        $data=array(
            'institute'=>$this->input->post('institute'),
            'category'=>$this->input->post('category'),
            'content'=>$this->input->post('content'),
            'email'=>$this->input->post('email'),
            'relavent_authority'=>$this->input->post('relavent_authority'),
            'lat'=>$this->input->post('lat'),
            'lng' =>$this->input->post('lng'),
            'multimedia'=>$file_name['file_name'],
            'created'=>$now,
        );

            $data['id']=$this->Question_model->add_data($data);
            $data['authority'] = $this->Question_model->getAuthority();
            if($this->input->post('share')=="yes"){
                $this->load->view('header',$data);
                $this->load->view('questions/share',$data['id']);
                $this->load->view('footer');
            }

            else {
                $this->session->set_flashdata('item', array('message' => 'Record created successfully','class' => 'success'));

                redirect('question/index',$data);
            }
    }

    public function likes($id){
        $this->Question_model->update_like($id);
        redirect('question');
    }

    public function share(){
        $this->Question_model->sharedetails();
        redirect('question');
    }

public function infrastructure_show(){
        $data['inf']=$this->Question_model->infrastructure_show();
        $this->load->view('header');
        $this->load->view('questions/infrastructure_show',$data);
        $this->load->view('footer');
    }

    public function funds_show()
    {
        $data['inf'] = $this->Question_model->funds_show();
        $this->load->view('header');
        $this->load->view('questions/infrastructure_show', $data);
        $this->load->view('footer');
    }

    public function human_Resource_Skill_Development_show()
    {
        $data['inf'] = $this->Question_model->human_Resource_Skill_Development_show();
        $this->load->view('header');
        $this->load->view('questions/infrastructure_show', $data);
        $this->load->view('footer');
    }

public function administrative_and_Procurement_show()
{
    $data['inf'] = $this->Question_model->administrative_and_Procurement_show();
    $this->load->view('header');
    $this->load->view('questions/infrastructure_show', $data);
    $this->load->view('footer');
}


}
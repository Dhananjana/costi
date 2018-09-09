<?php
/**
 * Created by PhpStorm.
 * User: thari
 * Date: 2017-12-27
 * Time: PM 5.53
 */

class Comment extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->helper('date');
        $this->load->model('Comment_model');
        $this->load->model('Question_model');
        $this->load->library("pagination");
    }

    public function index($id){

        $data['id']=$id;
        $data['question']=$this->Question_model->get_question($id);
        $data["results"] = $this->Comment_model->fetch_comments($id);
        $this->load->view('header');
        $this->load->view('comments/index',$data);
        $this->load->view('footer');
    }

    public function create(){
        $id=$this->input->post('question_id');
        $this->Comment_model->add_data();
        redirect('comment/index/'.$id);
    }
}
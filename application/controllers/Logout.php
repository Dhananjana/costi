<?php
/**
 * Created by PhpStorm.
 * User: thari
 * Date: 2018-01-31
 * Time: PM 3.55
 */

class Logout extends CI_Controller
{
    public function index(){
        $this->session->sess_destroy();

        redirect(base_url() .'Main');
    }
}
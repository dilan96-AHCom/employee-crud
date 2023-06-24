<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller{

    
    function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        //$this->load->library('session');
    } 

    public function login(){

      $email =$this->input->POST('email');
      $password = $this->input->POST('password');

      $this->load->model('User_model');
      $data = $this->User_model->get_userdata($email, $password);
        if($data)
        {
            $this->load->view('Templates/navbar');
            $this->load->view('Frontend/homePage');
        }
        else
        {
          redirect(base_url('info'));
        }

    }



}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeController extends CI_Controller{


    public function index(){
        //echo $this->User_model->get_name();
        $this->load->view('auth/login');
  
      }

      public function register(){
        $this->load->view('Auth/register');
      }

}

?>
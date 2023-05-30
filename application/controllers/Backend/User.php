<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
        public function index()
        {

                $this->load->database();


                $this->load->model('User_model');
                $data['name'] = $this->User_model->get_name();
                $this->load->view('Frontend/my_name',$data);
        }
}

?>
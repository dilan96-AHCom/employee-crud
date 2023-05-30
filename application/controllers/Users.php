<?php 

class Users extends CI_Controller{


    function __construct() {
        parent::__construct();
       
        $this->load->model('Employee_model');
    }

    public function example(){
    $this->Employee_model->test();

    }


}


?>
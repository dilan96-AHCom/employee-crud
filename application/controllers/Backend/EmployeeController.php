<?php

class EmployeeController extends CI_Controller
{
    
    function __construct() {
        parent::__construct();
        //$this->load->helper('url');
        $this->load->model('Employee_model');
    }
    


    //example for my practices
    //get value from URL 
    public function parameter($getvaluefromURL = ""){
        echo "$getvaluefromURL";
    }



    //employee.............................................
    public function reg(){
        $this->load->view('Templates/navbar');
        $this->load->view('Frontend/employee_reg');
    }

    public function info()
    {
        $this->load->model('Employee_model');

        // you can use method 01 or 02

        // method 01
        /* $receiveddata['employeeinfo'] = $this->Employee_model->get_data();
           $this->load->view('Frontend/employee_info', $receiveddata);  
        */
        //method 02
        /*
          $receiveddata = $this->Employee_model->get_data();
          $this->load->view('Frontend/employee_info', ['employeeinfo' => $receiveddata]); 
        */

        $receiveddata['employeeinfo'] = $this->Employee_model->get_data();
        $this->load->view('Templates/navbar');
        $this->load->view('Frontend/employee_info', $receiveddata);
        $this->load->view('Templates/footer');
        
    }

    public function about(){
        $this->load->view('Templates/navbar');
        $this->load->view('Frontend/aboutPage');
    }

    public function home(){
        $this->load->view('Templates/navbar');
        $this->load->view('Frontend/homePage');
    }

    

    public function store(){

        // $this->load->libraries('input','email', etc..); | "also you can set this to autoload in globaly inside the autoload.php file"

        $this->form_validation->set_rules('name', 'Name', 'required'); 
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
    

        if($this->form_validation->run())
        {
            $data = [
                //'key_name_in_database' => $this->input->post('ame_of_input_field')        
                'name' => $this->input->POST('name'), 
                'email' => $this->input->POST('email'),
                'mobile' => $this->input->POST('mobile'),
                'address' => $this->input->POST('address'),
            ];

          //  $this->load->model('Employee_model','emp'); // 2nd parameter means: short the model name as "emp"
            $this->Employee_model->insert_data($data);

            redirect(base_url('info'));
        }
        else
        {
            $this->reg(); // OR can use "redirect(base_url('register'))"
        }
        
        // var_dump($data);  this can use to display data which were submited and now holding in this $data array 
    }


    public function edit_employee($id){
        $this->load->view('Templates/navbar');
        
        $this->load->model('Employee_model');
        $data['employeeinfo_get_by_id'] = $this->Employee_model->get_data_of_employee_by_id($id);
        
        $this->load->view('Frontend/employee_edit', $data);
    }



    public function update_employee($id){

        $this->form_validation->set_rules('name', 'Name', 'required'); 
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        
        
        if($this->form_validation->run())
        {
            $data = [
                    'name' => $this->input->POST('name'), 
                    'email' => $this->input->POST('email'),
                    'mobile' => $this->input->POST('mobile'),
                    'address' => $this->input->POST('address'),
            ];

            $this->load->model('Employee_model');
            $this->Employee_model->update_employee($data, $id);


            redirect(base_url('info'));
        }
        else
        {
            $this->edit_employee($id); // OR can use "redirect(base_url('xxxx'))"
        }
    }


    public function delete_employee($id)
    {
        $this->load->model('Employee_model');
        $this->Employee_model->delete_employee($id);

        redirect(base_url('info'));
    }
   
}
?>
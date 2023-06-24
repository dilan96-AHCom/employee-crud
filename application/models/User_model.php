<?php

class User_model extends CI_Model
{
    public function get_name()
    {
        $myname = "sasintha";
        return $myname;
    }

    public function get_userdata($email, $password){

        $this->db->select('email,userpassword');
        $this->db->where('email',$email);
        $this->db->where('userpassword',$password);
        $this->db->from('userstable');
        $data = $this->db->get();

        if($data->num_rows() == 1){
            return $data->row(0);
        }
        else 
        {
            return false;
        }
        
    }
}

?>
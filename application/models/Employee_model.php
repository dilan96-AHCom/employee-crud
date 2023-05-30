<?php

class Employee_model extends CI_Model
{
    
    public function insert_data($data)
    {
       return $this->db->insert('employeetable', $data);
    }

    public function get_data()
    {
       $query = $this->db->get('employeetable');
       return $query->result();
       //instead of result() we can use row() / row_array() methods also.
       // row() can be used when showing employee data by id(we only have one row to show)
       // row_array() can be used when showing data in another format.
    }

    public function get_data_of_employee_by_id($id)
    {
      $query = $this->db->get_where('employeetable', array('id'=>$id)); //also, instead of array('id'=>$id) you can use ['id'=> $id]
      
      // OR with aditional parameters when you needed
      // $query = $this->db->get_where('employeetable', array('id'=>$id),$limit, $offset);
      

      return $query->row();  
      // just use "row()" because of we are getting only one row otherwise you can use "result()" as above inside of get_data() function.
    }

    public function update_employee($data, $id)
    {
      return $this->db->update('employeetable', $data, ['id'=>$id]);
    }

    public function delete_employee($id)
    {
      return $this->db->delete('employeetable', array('id'=> $id));
    }

    //................................
    function test(){

    }

}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {

    public function gets_student()
	{
        $this->db->from('Student');
        $this->db->order_by("Student_id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function replace($array)
    {
        return $this->db->replace('Student', $array);
    }

}

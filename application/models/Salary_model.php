<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salary_model extends CI_Model {

    public function gets_salary()
	{
        $this->db->from('Salary');
        $this->db->order_by("Salary_id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function replace($array)
    {
        return $this->db->replace('Salary', $array);
    }

}

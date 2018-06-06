<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_model extends CI_Model {

    public function get_staff_by_email($email)
	{
        $this->db->where('Staff_email', $email);
        $this->db->from('Staff');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_staff_by_id($staff_id)
    {
        $this->db->where('Staff_id', $staff_id);
        $this->db->from('Staff');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function gets_staff()
    {
        $this->db->from('Staff');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert($array){
        return $this->db->insert('Staff', $array);
    }

    public function delete($staff_id)
    {
        $this->db->where('Staff_id', $staff_id);
        return $this->db->delete('Staff');
    }

    public function update($staff_id, $array)
    {
        $this->db->where('Staff_id', $staff_id);
        return $this->db->update('Staff' ,$array);
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Working_area_model extends CI_Model {

    public function gets_working_area()
    {
        $this->db->from('Working_area');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_working_area_by_name($working_area_name)
    {
        $this->db->where('Working_area_name', $working_area_name);
        $this->db->from('Working_area');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert($array){
        return $this->db->insert('Working_area', $array);
    }

    public function delete($working_area_id)
    {
        $this->db->where('Working_area_id', $working_area_id);
        return $this->db->delete('Working_area');
    }

    public function get_working_area_by_id($working_area_id)
    {
        $this->db->where('Working_area_id', $working_area_id);
        $this->db->from('Working_area');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update($working_area_id, $array)
    {
        $this->db->where('Working_area_id', $working_area_id);
        return $this->db->update('Working_area' ,$array);
    }
}

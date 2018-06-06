<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Strengths_model extends CI_Model {

    public function gets_strengths()
    {
        $this->db->from('Strengths');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_strengths_by_name($strengths_name)
    {
        $this->db->where('Strengths_name', $strengths_name);
        $this->db->from('Strengths');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert($array){
        return $this->db->insert('Strengths', $array);
    }

    public function delete($strengths_id)
    {
        $this->db->where('Strengths_id', $strengths_id);
        return $this->db->delete('Strengths');
    }

    public function get_Strengths_by_id($strengths_id)
    {
        $this->db->where('Strengths_id', $strengths_id);
        $this->db->from('Strengths');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update($strengths_id, $array)
    {
        $this->db->where('Strengths_id', $strengths_id);
        return $this->db->update('Strengths' ,$array);
    }
}

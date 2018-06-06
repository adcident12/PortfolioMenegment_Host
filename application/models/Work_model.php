<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work_model extends CI_Model {

    public function gets_work()
    {
        $this->db->from('Work');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_work_by_name($work_name)
    {
        $this->db->where('Work_name', $work_name);
        $this->db->from('Work');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert($array){
        return $this->db->insert('Work', $array);
    }

    public function delete($work_id)
    {
        $this->db->where('Work_id', $work_id);
        return $this->db->delete('Work');
    }

    public function get_work_by_id($work_id)
    {
        $this->db->where('Work_id', $work_id);
        $this->db->from('Work');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update($work_id, $array)
    {
        $this->db->where('Work_id', $work_id);
        return $this->db->update('Work' ,$array);
    }
}

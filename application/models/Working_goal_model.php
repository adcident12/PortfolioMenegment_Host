<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Working_goal_model extends CI_Model {

    public function gets_working_goal()
    {
        $this->db->from('Working_goal');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_working_goal_by_name($working_goal_name)
    {
        $this->db->where('Working_goal_name', $working_goal_name);
        $this->db->from('Working_goal');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert($array){
        return $this->db->insert('Working_goal', $array);
    }

    public function delete($working_goal_id)
    {
        $this->db->where('Working_goal_id', $working_goal_id);
        return $this->db->delete('Working_goal');
    }

    public function get_working_goal_by_id($working_goal_id)
    {
        $this->db->where('Working_goal_id', $working_goal_id);
        $this->db->from('Working_goal');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update($working_goal_id, $array)
    {
        $this->db->where('Working_goal_id', $working_goal_id);
        return $this->db->update('Working_goal' ,$array);
    }
}

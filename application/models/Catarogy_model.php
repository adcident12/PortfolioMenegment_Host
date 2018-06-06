<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catarogy_model extends CI_Model {

    public function get_catarogy_by_skill_name($catarogy_skill_name)
    {
        $this->db->where('Catarogy_skill_name', $catarogy_skill_name);
        $this->db->from('Catarogy_skill');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_catarogy_by_id($catarogy_skill_id)
    {
        $this->db->where('Catarogy_skill_id', $catarogy_skill_id);
        $this->db->from('Catarogy_skill');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function gets_catarogy()
    {
        $this->db->from('Catarogy_skill');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert($array){
        return $this->db->insert('Catarogy_skill', $array);
    }

    public function delete($catarogy_skill_id)
    {
        $this->db->where('Catarogy_skill_id', $catarogy_skill_id);
        return $this->db->delete('Catarogy_skill');
    }

    public function update($catarogy_skill_id, $array)
    {
        $this->db->where('Catarogy_skill_id', $catarogy_skill_id);
        return $this->db->update('Catarogy_skill' ,$array);
    }
}

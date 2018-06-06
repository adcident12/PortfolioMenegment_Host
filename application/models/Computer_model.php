<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Computer_model extends CI_Model {

    public function gets_computer_skill()
    {
        $this->db->select('*');
        $this->db->from('Computer_skill');
        $this->db->join('Catarogy_skill', 'Catarogy_skill.Catarogy_skill_id = Computer_skill.Catarogy_skill_Catarogy_skill_id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_computer_by_skill_name($computer_skill_name)
    {
        $this->db->where('Computer_skill_name', $computer_skill_name);
        $this->db->from('Computer_skill');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert($array)
    {
        return $this->db->insert('Computer_skill', $array);
    }

    public function delete($computer_skill_id)
    {
        $this->db->where('Computer_skill_id', $computer_skill_id);
        return $this->db->delete('Computer_skill');

    }

    public function get_computer_by_id($computer_skill_id)
    {
        $this->db->where('Computer_skill_id', $computer_skill_id);
        $this->db->from('Computer_skill');
        $this->db->join('Catarogy_skill', 'Catarogy_skill.Catarogy_skill_id = Computer_skill.Catarogy_skill_Catarogy_skill_id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update($computer_skill_id, $array)
    {
        $this->db->where('Computer_skill_id', $computer_skill_id);
        return $this->db->update('Computer_skill' ,$array);
    }
}

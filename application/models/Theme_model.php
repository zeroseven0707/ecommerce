<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Theme_model extends CI_Model {

    public function get_all_themes() {
        $query = $this->db->get('theme');
        return $query->result_array();
    }

    public function get_theme($id) {
        $query = $this->db->get_where('theme', array('id' => $id));
        return $query->row_array();
    }

    public function create_theme($data) {
        return $this->db->insert('theme', $data);
    }

    public function update_theme($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('theme', $data);
    }

    public function delete_theme($id) {
        $this->db->where('id', $id);
        return $this->db->delete('theme');
    }
}

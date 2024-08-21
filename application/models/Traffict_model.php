<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Traffict_model extends CI_Model {

    public function get_all_trafficts() {
        $query = $this->db->get('trafficts');
        return $query->result();
    }

    public function get_traffict_by_id($id) {
        $query = $this->db->get_where('trafficts', array('id' => $id));
        return $query->row();
    }

    public function insert_traffict($data) {
        return $this->db->insert('trafficts', $data);
    }

    public function update_traffict($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('trafficts', $data);
    }

    public function delete_traffict($id) {
        $this->db->where('id', $id);
        return $this->db->delete('trafficts');
    }
}

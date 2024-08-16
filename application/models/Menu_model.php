<?php
class Menu_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_menus($id = null) {
        if ($id === null) {
            $query = $this->db->get('menu');
            return $query->result();
        } else {
            $query = $this->db->get_where('menu', ['id' => $id]);
            return $query->row();
        }
    }
    
    public function insert_menu($data) {
        return $this->db->insert('menu', $data);
    }
    
    public function update_menu($id, $data) {
        return $this->db->update('menu', $data, ['id' => $id]);
    }
    
    public function delete_menu($id) {
        return $this->db->delete('menu', ['id' => $id]);
    }
}

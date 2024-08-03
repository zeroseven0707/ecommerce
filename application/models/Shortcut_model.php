<?php
class Shortcut_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_shortcuts($id = null) {
        if ($id === null) {
            $query = $this->db->get('shortcuts');
            return $query->result();
        } else {
            $query = $this->db->get_where('shortcuts', ['id' => $id]);
            return $query->row();
        }
    }
    
    public function create_shortcut($data) {
        return $this->db->insert('shortcuts', $data);
    }
    
    public function update_shortcut($id, $data) {
        return $this->db->update('shortcuts', $data, ['id' => $id]);
    }
    
    public function delete_shortcut($id) {
        return $this->db->delete('shortcuts', ['id' => $id]);
    }
}
?>

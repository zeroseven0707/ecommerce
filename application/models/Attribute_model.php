<?php
class Attribute_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_attributes($id = null) {
        if ($id === null) {
            $query = $this->db->get('attributes');
            return $query->result();
        } else {
            $query = $this->db->get_where('attributes', ['id' => $id]);
            return $query->row();
        }
    }
    
    public function create_attribute($data) {
        return $this->db->insert('attributes', $data);
    }
    
    public function update_attribute($id, $data) {
        return $this->db->update('attributes', $data, ['id' => $id]);
    }
    
    public function delete_attribute($id) {
        return $this->db->delete('attributes', ['id' => $id]);
    }
}
?>

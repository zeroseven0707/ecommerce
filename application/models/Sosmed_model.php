<?php
class Sosmed_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_sosmed($id = null) {
        if ($id === null) {
            $query = $this->db->get('social_media');
            return $query->result();
        } else {
            $query = $this->db->get_where('social_media', ['id' => $id]);
            return $query->row();
        }
    }
    public function insert_sosmed($data) {
        return $this->db->insert('social_media', $data);
    }
    
    public function update_sosmed($id, $data) {
        return $this->db->update('social_media', $data, ['id' => $id]);
    }
    
    public function delete_sosmed($id) {
        return $this->db->delete('social_media', ['id' => $id]);
    }
}

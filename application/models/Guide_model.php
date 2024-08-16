<?php
class Guide_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_guides($id = null) {
        if ($id === null) {
            $query = $this->db->get('guides');
            return $query->result();
        } else {
            $query = $this->db->get_where('guides', ['id' => $id]);
            return $query->row();
        }
    }
    
    public function insert_guide($data) {
        return $this->db->insert('guides', $data);
    }
    
    public function update_guide($id, $data) {
        return $this->db->update('guides', $data, ['id' => $id]);
    }
    
    public function delete_guide($id) {
        return $this->db->delete('guides', ['id' => $id]);
    }
}
?>

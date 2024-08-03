<?php
class License_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_licenses($id = null) {
        if ($id === null) {
            $query = $this->db->get('licenses');
            return $query->result();
        } else {
            $query = $this->db->get_where('licenses', ['id' => $id]);
            return $query->row();
        }
    }
    
    public function create_license($data) {
        return $this->db->insert('licenses', $data);
    }
    
    public function update_license($id, $data) {
        return $this->db->update('licenses', $data, ['id' => $id]);
    }
    
    public function delete_license($id) {
        return $this->db->delete('licenses', ['id' => $id]);
    }
}
?>

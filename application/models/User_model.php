<?php
class User_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_users($id = null) {
        if ($id === null) {
            $query = $this->db->get('users');
            return $query->result();
        } else {
            $query = $this->db->get_where('users', ['id' => $id]);
            return $query->row();
        }
    }
    
    public function create_user($data) {
        return $this->db->insert('users', $data);
    }
    
    public function update_user($id, $data) {
        return $this->db->update('users', $data, ['id' => $id]);
    }
    
    public function delete_user($id) {
        return $this->db->delete('users', ['id' => $id]);
    }
    
    public function get_user_by_username($username) {
        $query = $this->db->get_where('users', ['username' => $username]);
        return $query->row();
    }
}
?>

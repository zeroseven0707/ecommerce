<?php
class Setting_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_settings() {
        $query = $this->db->get('settings');
        return $query->row();
    }
    
    public function update_setting($id, $data) {
        return $this->db->update('settings', $data, ['id' => $id]);
    }
}
?>

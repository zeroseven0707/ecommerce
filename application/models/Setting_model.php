<?php
class Setting_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Mendapatkan pengaturan
    public function get_settings() {
        $query = $this->db->get('settings');
        return $query->row();
    }

    // Membuat pengaturan baru
    public function create_setting($data) {
        return $this->db->insert('settings', $data);
    }

    // Memperbarui pengaturan yang sudah ada
    public function update_setting($id, $data) {
        return $this->db->update('settings', $data, array('id' => $id));
    }
}

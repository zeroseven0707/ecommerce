<?php
class Setting_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Mendapatkan pengaturan
    public function get_settings() {
        // Join table 'theme' dengan 'settings'
        $this->db->select('settings.*, theme.header_color, theme.navbar_color, theme.text_color, theme.header_menu_text_color, theme.product_box_text_color, theme.banner_text_color, theme.body_color, theme.product_box_color, theme.buy_button_color, theme.desktop_sidebar_menu_color, theme.box_license, theme.button_banner_color, theme.button_banner_text_color, theme.banner_text_color, theme.menu_mobile_color, theme.text_menu_mobile_color, theme.desktop_sidebar_text_menu_color');
        $this->db->from('settings');
        $this->db->join('theme', 'settings.theme = theme.id', 'left'); // Join dengan table theme
    
        // Eksekusi query dan ambil hasil
        $query = $this->db->get();
        return $query->row(); // Mengambil baris pertama dari hasil query
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

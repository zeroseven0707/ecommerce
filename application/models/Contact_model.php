<?php
class Contact_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_contact() {
        $query = $this->db->get('contacts');
        return $query->row();
    }

    public function save_contact($data) {
        $contact = $this->get_contact();
        if ($contact) {
            // Jika data kontak sudah ada, lakukan update
            return $this->db->update('contacts', $data, ['id' => $contact->id]);
        } else {
            // Jika data kontak belum ada, lakukan insert
            return $this->db->insert('contacts', $data);
        }
    }
}
?>

<?php
class Rest_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_rest() {
        $query = $this->db->get('rest_api');
        return $query->row();
    }

    public function save_rest($data) {
        $rest = $this->get_rest();
        if ($rest) {
            // Jika data kontak sudah ada, lakukan update
            return $this->db->update('rest_api', $data, ['id' => $rest->id]);
        } else {
            // Jika data kontak belum ada, lakukan insert
            return $this->db->insert('rest_api', $data);
        }
    }
}
?>

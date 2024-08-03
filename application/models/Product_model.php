<?php
class Product_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_products($id = null) {
        if ($id === null) {
            $query = $this->db->get('products');
            return $query->result();
        } else {
            $query = $this->db->get_where('products', ['id' => $id]);
            return $query->row();
        }
    }
    
    public function create_product($data) {
        return $this->db->insert('products', $data);
    }
    
    public function update_product($id, $data) {
        return $this->db->update('products', $data, ['id' => $id]);
    }
    
    public function delete_product($id) {
        return $this->db->delete('products', ['id' => $id]);
    }
    public function get_product_count() {
        return $this->db->count_all('products');
    }
}
?>

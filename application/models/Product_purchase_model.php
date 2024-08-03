<?php
class Product_purchase_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_product_purchases($id = null) {
        if ($id === null) {
            $query = $this->db->get('product_purchases');
            return $query->result();
        } else {
            $query = $this->db->get_where('product_purchases', ['id' => $id]);
            return $query->row();
        }
    }
    
    public function create_product_purchase($data) {
        return $this->db->insert('product_purchases', $data);
    }
    
    public function update_product_purchase($id, $data) {
        return $this->db->update('product_purchases', $data, ['id' => $id]);
    }
    
    public function delete_product_purchase($id) {
        return $this->db->delete('product_purchases', ['id' => $id]);
    }
}
?>

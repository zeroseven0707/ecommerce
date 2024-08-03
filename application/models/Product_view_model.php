<?php
class Product_view_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_product_views($limit = 5) {
        $this->db->order_by('views', 'DESC');
        $query =  $this->db->get('product_views', $limit);
        return $query->result();
    }
    
    public function create_product_view($data) {
        return $this->db->insert('product_views', $data);
    }
    
    public function update_product_view($id, $data) {
        return $this->db->update('product_views', $data, ['id' => $id]);
    }
    
    public function delete_product_view($id) {
        return $this->db->delete('product_views', ['id' => $id]);
    }
}
?>

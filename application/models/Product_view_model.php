<?php
class Product_view_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
public function get_product_views($limit = 5) {
    $this->db->select('product_views.*, products.*');
    $this->db->from('product_views');
    $this->db->join('products', 'products.id = product_views.product_id');
    $this->db->order_by('product_views.views', 'DESC');
    $this->db->limit($limit);

    $query = $this->db->get();
    return $query->result();
}
public function get_product_views_in_client($limit = 6) {
    $this->db->select('product_views.*, products.*');
    $this->db->from('product_views');
    $this->db->join('products', 'products.id = product_views.product_id');
    $this->db->order_by('product_views.views', 'DESC');
    $this->db->limit($limit);

    $query = $this->db->get();
    return $query->result();
}
public function get_product_view() {
    $this->db->select('product_views.*, products.*');
    $this->db->from('product_views');
    $this->db->join('products', 'products.id = product_views.product_id');
    $this->db->order_by('product_views.views', 'DESC');

    $query = $this->db->get();
    return $query->result();
}

    
    public function create_product_view($data) {
        return $this->db->insert('product_views', $data);
    }
    
    public function update_product_view($id, $data) {
        return $this->db->update('product_views', $data, ['id' => $id]);
    }
    public function click_product_view($id, $data) {
        $query = $this->db->get_where('product_views', ['product_id' => (int)$id]);
        $pv = $query->row();
        // var_dump($pv);
        $data = [
            'views' => $pv->views +1
        ];
        return $this->db->update('product_views', $data, ['product_id' => $id]);
    }
    public function delete_product_view($id) {
        return $this->db->delete('product_views', ['id' => $id]);
    }
}
?>

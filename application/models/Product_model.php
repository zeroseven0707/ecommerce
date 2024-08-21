<?php
class Product_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
      
    // Get total number of products
    public function get_product_count() {
        return $this->db->count_all('products');
    }
    public function search_products_by_name($name) {
        $this->db->like('name', $name);
        $query = $this->db->get('products');
        return $query->result();
    }
    public function get_products_by_name($name) {
        $query = $this->db->get_where('products', ['name' => $name]);
        return $query->row();
    }

    public function get_product_by_id($id)
{
    $query = $this->db->get_where('products', array('id' => $id));
    return $query->row_array();
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
    public function get_new_products($id = null) {
            $this->db->from('products'); 
            $this->db->order_by('products.id', 'DESC'); 
            $query = $this->db->get(); 
            return $query->result();
    }
    public function get_new_products_in_client($limit = 6) {
        $this->db->from('products'); 
        $this->db->order_by('products.id', 'DESC');
        $this->db->limit($limit);
        $query = $this->db->get(); 
        return $query->result();
}
    public function get_promo() {
            $query = $this->db->get_where('products', ['discount' => true]);
            return $query->result();
    }   
    public function freebies() {
            $query = $this->db->get_where('products', ['price' => 0]);
            return $query->result();
    }
    // public function create_product($data) {
    //     return $this->db->insert('products', $data);
    // }
    public function create_product($data) {
        $product_data = [
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price'],
            'buy_link' => $data['buy_link'],
            'images' => $data['images']
        ];
        if($data['discount'] == null){
            $product_data['discount'] = false;
            $product_data['persentase_discount'] = null;
        }else{
            $product_data['discount'] = true;
            $product_data['persentase_discount'] = $data['persentase_discount'];
        }
    
        return $this->db->insert('products', $product_data);
    }
    public function insert_product($data) {
        $this->db->insert('products', $data);
    }
    public function update_product($id, $data)
{
    $this->db->where('id', $id);
    return $this->db->update('products', $data);
}

    
    public function delete_product($id) {
        $this->db->delete('product_views', ['product_id' => $id]);
        $this->db->delete('product_purchases', ['product_id' => $id]);
        $this->db->delete('products', ['id' => $id]);
    }
    public function get_all_products() {
        $query = $this->db->get('products');
        return $query->result();
    }
    public function get_all_products_in_client($limit = 6) {
        $this->db->from('products'); 
        $this->db->limit($limit);
        $query = $this->db->get(); 
        return $query->result();
    }
    
}
?>

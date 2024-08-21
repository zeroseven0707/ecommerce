<?php
class Product_purchase_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_product_purchases($id = null,$limit = 5) {
        if ($id === null) {
            $this->db->select('product_purchases.*, products.*');
            $this->db->from('product_purchases');
            $this->db->join('products', 'products.id = product_purchases.product_id'); // Sesuaikan 'product_id' dengan nama kolom kunci asing yang menghubungkan tabel
            $this->db->order_by('product_purchases.purchases', 'DESC');
            $this->db->limit($limit);
        
            $query = $this->db->get();
            return $query->result();
        } else {
            $query = $this->db->get_where('product_purchases', ['id' => $id]);
            return $query->row();
        }
    }
    public function get_product_purchases_in_client($id = null,$limit = 6) {
        if ($id === null) {
            $this->db->select('product_purchases.*, products.*');
            $this->db->from('product_purchases');
            $this->db->join('products', 'products.id = product_purchases.product_id'); // Sesuaikan 'product_id' dengan nama kolom kunci asing yang menghubungkan tabel
            $this->db->order_by('product_purchases.purchases', 'DESC');
            $this->db->limit($limit);
        
            $query = $this->db->get();
            return $query->result();
        } else {
            $query = $this->db->get_where('product_purchases', ['id' => $id]);
            return $query->row();
        }
    }
    public function get_product_purchases_in_detail($id = null,$limit = 3) {
        if ($id === null) {
            $this->db->select('product_purchases.*, products.*');
            $this->db->from('product_purchases');
            $this->db->join('products', 'products.id = product_purchases.product_id'); // Sesuaikan 'product_id' dengan nama kolom kunci asing yang menghubungkan tabel
            $this->db->order_by('product_purchases.purchases', 'DESC');
            $this->db->limit($limit);
        
            $query = $this->db->get();
            return $query->result();
        } else {
            $query = $this->db->get_where('product_purchases', ['id' => $id]);
            return $query->row();
        }
    }
    public function get_product_purchase($id = null) {
        if ($id === null) {
            $this->db->select('product_purchases.*, products.*');
            $this->db->from('product_purchases');
            $this->db->join('products', 'products.id = product_purchases.product_id'); // Sesuaikan 'product_id' dengan nama kolom kunci asing yang menghubungkan tabel
            $this->db->order_by('product_purchases.purchases', 'DESC');        
            $query = $this->db->get();
            return $query->result();
        } else {
            $query = $this->db->get_where('product_purchases', ['id' => $id]);
            return $query->row();
        }
    }
    public function buy_now($id, $data) {
        $query = $this->db->get_where('product_purchases', ['product_id' => (int)$id]);
        $query2 = $this->db->get_where('products', ['id' => (int)$id]);
        $product = $query2->row();
        $pp = $query->row();
        $data = [
            'purchases' => $pp->purchases +1
        ];
        $this->db->update('product_purchases', $data, ['product_id' => $id]);
        return $product->buy_link;
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

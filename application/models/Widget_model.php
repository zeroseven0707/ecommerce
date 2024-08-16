<?php
class Widget_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_widgets($id = null) {
        if ($id === null) {
            $query = $this->db->get('widgets');
            return $query->result();
        } else {
            $query = $this->db->get_where('widgets', ['id' => $id]);
            return $query->row();
        }
    }
    public function dekstop() {
        $query = $this->db->get_where('widgets', ['for' => 'dekstop']);
        return $query->row();
    }
    public function mobile() {
        $query = $this->db->get_where('widgets', ['for' => 'mobile']);
        return $query->row();
    }
    public function mobile2() {
        $query = $this->db->get_where('widgets', ['for' => 'mobile 2']);
        return $query->row();
    }
    public function insert_widget($data) {
        return $this->db->insert('widgets', $data);
    }
    
    public function update_widget($id, $data) {
        return $this->db->update('widgets', $data, ['id' => $id]);
    }
    
    public function delete_widget($id) {
        return $this->db->delete('widgets', ['id' => $id]);
    }
    public function get_widget_by_for($for) {
        $query = $this->db->get_where('widgets', ['for' => $for]); 
        return $query->row();
    }
}
?>

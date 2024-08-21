<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Product_model');
        $this->load->model('Product_view_model');
        $this->load->model('Product_purchase_model');
        $this->load->model('License_model');
        $this->load->model('Contact_model');
        $this->load->model('Widget_model');
        $this->load->model('Shortcut_model');
        $this->load->model('Setting_model');
        $this->load->model('Guide_model');
        $this->load->model('Traffict_model');
    }

    public function index() {
            $data['active_page'] = 'home';
            $data['products'] = $this->Product_model->get_all_products_in_client();
            $data['new'] = $this->Product_model->get_new_products_in_client();
            $data['freebies'] = $this->Product_model->freebies();
            $data['top_viewed_products'] = $this->Product_view_model->get_product_views_in_client();
            $data['top_purchased_products'] = $this->Product_purchase_model->get_product_purchases_in_client();
        $this->load->view('client/index',$data);
    }
    public function search() {
        $data['active_page'] = 'home';
        $query = $this->input->get('query');
        $data['products'] = $this->Product_model->search_products_by_name($query);
        $this->load->view('client/search', $data);
    }
    public function detail_product($id)
    {
        $data['active_page'] = 'home';
        $data['top_purchased_products'] = $this->Product_purchase_model->get_product_purchases_in_detail();
        $this->Product_view_model->click_product_view($id, $this->input->post());
        $data['product'] = $this->Product_model->get_products($id);
        $this->load->view('client/product-detail', $data);
    }
    public function buynow($id)
    {
        $data['active_page'] = 'home';
        $data = $this->Product_purchase_model->buy_now($id, $this->input->post());
       var_dump($data);
        return redirect($data);
    }
    public function freebies() {
        $data['active_page'] = 'freebies';
        $data['products'] = $this->Product_model->freebies();
        // var_dump($data['products']);
        $this->load->view('client/freebies',$data);
    }
    public function catalog() {
        $data['active_page'] = 'catalog';
        $data['products'] = $this->Product_model->get_products();
        $this->load->view('client/catalog',$data);
    }
    public function promo() {
        $data['active_page'] = 'home';
        $data['products'] = $this->Product_model->get_promo();
        $this->load->view('client/promo',$data);
    }
    public function product_last() {
        $data['products'] = $this->Product_model->get_new_products();
           $data['active_page'] = 'home';
        $this->load->view('client/produk-terbaru',$data);
    }
    public function all() {
           $data['products'] = $this->Product_model->get_products();
           $data['active_page'] = 'home';
        $this->load->view('client/all',$data);
    }
    public function product_terlaris() {
           $data['active_page'] = 'home';
           $data['products'] = $this->Product_purchase_model->get_product_purchase();
        $this->load->view('client/produk-terlaris',$data);
    }
    public function lisensi() {
        $data['lisensi'] = $this->License_model->get_licenses();
        $data['active_page'] = 'license';
        $this->load->view('client/lisensi',$data);
    }
    public function guide() {
        $data['guide'] = $this->Guide_model->get_guides();
        $data['active_page'] = 'home';
        $this->load->view('client/guide',$data);
    }
    public function contact() {
        $data['contact'] = $this->Contact_model->get_contact();
           $data['active_page'] = 'contact';
        $this->load->view('client/contact',$data);
    } 
    public function create_traffict() {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email')
        );
        $this->Traffict_model->insert_traffict($data);
        redirect($this->input->server('HTTP_REFERER'));
    }
}

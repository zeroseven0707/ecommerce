<?php
defined('BASEPATH') OR exit('No direct script access allowed');

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");

class Api extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_purchase_model');
        $this->load->database();
    }
     // Mengambil semua produk
     public function index() {
        $products = $this->Product_purchase_model->get_product_purchase_api();

        if (!empty($products)) {
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'status' => 'success',
                    'data' => $products
                ]));
        } else {
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(404)
                ->set_output(json_encode([
                    'status' => 'error',
                    'message' => 'No products found'
                ]));
        }
    }

    // Mengambil produk berdasarkan ID
    public function view($id) {
        $product = $this->Product_purchase_model->get_product_purchase($id);

        if (!empty($product)) {
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'status' => 'success',
                    'data' => $product
                ]));
        } else {
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(404)
                ->set_output(json_encode([
                    'status' => 'error',
                    'message' => 'Product not found'
                ]));
        }
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Product_model');
        $this->load->model('Product_view_model');
        $this->load->model('Product_purchase_model');
        $this->load->model('License_model');
        $this->load->model('Attribute_model');
        $this->load->model('Shortcut_model');
        $this->load->model('Setting_model');
    }
    // Dashboard
    public function dashboard()
    {
        $data['product_count'] = $this->Product_model->get_product_count();
        $data['top_viewed_products'] = $this->Product_view_model->get_product_views();
        $data['top_purchased_products'] = $this->Product_purchase_model->get_product_purchases();
        $this->load->view('admin/dashboard', $data);
    }

    // Product Management
    public function products()
    {
        $data['products'] = $this->Product_model->get_products();
        $this->load->view('admin/products', $data);
    }

    public function create_product()
    {
        $this->form_validation->set_rules('name', 'Nama Produk', 'required');
        $this->form_validation->set_rules('price', 'Harga Produk', 'required|numeric');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/create_product');
        } else {
            $this->Product_model->create_product($this->input->post());
            redirect('admin/products');
        }
    }

    public function edit_product($id)
    {
        $data['product'] = $this->Product_model->get_product($id);

        $this->form_validation->set_rules('name', 'Nama Produk', 'required');
        $this->form_validation->set_rules('price', 'Harga Produk', 'required|numeric');
        
        if ($this->form_validation->run() === FALSE) {
            
            $this->load->view('admin/edit_product', $data);
            
        } else {
            $this->Product_model->update_product($id, $this->input->post());
            redirect('admin/products');
        }
    }

    public function delete_product($id)
    {
        $this->Product_model->delete_product($id);
        redirect('admin/products');
    }

    // License Management
    public function licenses()
    {
        $data['licenses'] = $this->License_model->get_licenses();
        $this->load->view('admin/licenses', $data);
        
    }

    public function create_license()
    {
        $this->form_validation->set_rules('title', 'Judul Lisensi', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            
            $this->load->view('admin/create_license');
            
        } else {
            $this->License_model->insert_license($this->input->post());
            redirect('admin/licenses');
        }
    }

    public function edit_license($id)
    {
        $data['license'] = $this->License_model->get_license($id);

        $this->form_validation->set_rules('title', 'Judul Lisensi', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            
            $this->load->view('admin/edit_license', $data);
            
        } else {
            $this->License_model->update_license($id, $this->input->post());
            redirect('admin/licenses');
        }
    }

    public function delete_license($id)
    {
        $this->License_model->delete_license($id);
        redirect('admin/licenses');
    }

    // Attribute Management
    public function attributes()
    {
        $data['attributes'] = $this->Attribute_model->get_attributes();
        
        $this->load->view('admin/attributes', $data);
        
    }

    public function create_attribute()
    {
        $this->form_validation->set_rules('prefix', 'Prefix', 'required');
        $this->form_validation->set_rules('title', 'Judul', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            
            $this->load->view('admin/create_attribute');
            
        } else {
            $this->Attribute_model->insert_attribute($this->input->post());
            redirect('admin/attributes');
        }
    }

    public function edit_attribute($id)
    {
        $data['attribute'] = $this->Attribute_model->get_attribute($id);

        $this->form_validation->set_rules('prefix', 'Prefix', 'required');
        $this->form_validation->set_rules('title', 'Judul', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            
            $this->load->view('admin/edit_attribute', $data);
            
        } else {
            $this->Attribute_model->update_attribute($id, $this->input->post());
            redirect('admin/attributes');
        }
    }

    public function delete_attribute($id)
    {
        $this->Attribute_model->delete_attribute($id);
        redirect('admin/attributes');
    }

    // Shortcut Management
    public function shortcuts()
    {
        $data['shortcuts'] = $this->Shortcut_model->get_shortcuts();
        
        $this->load->view('admin/shortcuts', $data);
        
    }

    public function create_shortcut()
    {
        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            
            $this->load->view('admin/create_shortcut');
            
        } else {
            $this->Shortcut_model->insert_shortcut($this->input->post());
            redirect('admin/shortcuts');
        }
    }

    public function edit_shortcut($id)
    {
        $data['shortcut'] = $this->Shortcut_model->get_shortcut($id);

        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            
            $this->load->view('admin/edit_shortcut', $data);
            
        } else {
            $this->Shortcut_model->update_shortcut($id, $this->input->post());
            redirect('admin/shortcuts');
        }
    }

    public function delete_shortcut($id)
    {
        $this->Shortcut_model->delete_shortcut($id);
        redirect('admin/shortcuts');
    }

    // Settings Management
    public function settings()
    {
        $data['settings'] = $this->Setting_model->get_settings();
        
        $this->load->view('admin/settings', $data);
        
    }

    public function update_settings()
    {
        $this->form_validation->set_rules('site_name', 'Nama Web', 'required');

        if ($this->form_validation->run() === FALSE) {
            
            $this->load->view('admin/settings');
            
        } else {
            $this->Setting_model->update_settings($this->input->post());
            redirect('admin/settings');
        }
    }
}

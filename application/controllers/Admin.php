<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Product_model');
        $this->load->model('Product_view_model');
        $this->load->model('Product_purchase_model');
        $this->load->model('License_model');
        $this->load->model('Widget_model');
        $this->load->model('Shortcut_model');
        $this->load->model('Setting_model');
        $this->load->model('Contact_model');
        $this->load->model('Menu_model');
        $this->load->model('Guide_model');
        $this->load->model('Theme_model');
        $this->load->helper('download');
        $this->load->database();
    }
    // Dashboard
    public function dashboard()
    {
        $data['product_count'] = $this->Product_model->get_product_count();
        $data['top_viewed_products'] = $this->Product_view_model->get_product_views();
        $data['top_purchased_products'] = $this->Product_purchase_model->get_product_purchases();
        $this->load->view('admin/index', $data);
    }

    // Product Management
    public function products()
    {
        $data['products'] = $this->Product_model->get_products();
        // var_dump($data['products']);
        $this->load->view('admin/products', $data);
    }

    // public function create_product()
    // {
    //     $this->form_validation->set_rules('name', 'Nama Produk', 'required');
    //     $this->form_validation->set_rules('price', 'Harga Produk', 'required|numeric');
        
    //     if ($this->form_validation->run() === FALSE) {
    //         $this->load->view('admin/create_product');
    //     } else {
    //         $this->Product_model->create_product($this->input->post());
    //         redirect('admin/products');
    //     }
    // }
    public function create_product()
    {
        $this->form_validation->set_rules('name', 'Nama Produk', 'required');
        $this->form_validation->set_rules('price', 'Harga Produk', 'required|numeric');
    
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/create_product');
        } else {
            $data = $this->input->post();
    
            // Handle image links
            $image_links = [];
            if (!empty($data['image_link1'])) {
                $image_links[] = $data['image_link1'];
            }
            if (!empty($data['image_link2'])) {
                $image_links[] = $data['image_link2'];
            }
            if (!empty($data['image_link3'])) {
                $image_links[] = $data['image_link3'];
            }
    
            // Handle image upload
            $uploaded_images = [];
            if (!empty($_FILES['images']['name'][0])) {
                $filesCount = count($_FILES['images']['name']);
                for ($i = 0; $i < $filesCount; $i++) {
                    if (count($uploaded_images) + count($image_links) >= 3) {
                        break; // Stop if already 3 images
                    }
                    
                    $_FILES['image']['name'] = $_FILES['images']['name'][$i];
                    $_FILES['image']['type'] = $_FILES['images']['type'][$i];
                    $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                    $_FILES['image']['error'] = $_FILES['images']['error'][$i];
                    $_FILES['image']['size'] = $_FILES['images']['size'][$i];
    
                    $uploadPath = './uploads/products/';
                    $config['upload_path'] = $uploadPath;
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '2048';
    
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
    
                    if ($this->upload->do_upload('image')) {
                        $fileData = $this->upload->data();
                        $uploaded_images[] = base_url($uploadPath.$fileData['file_name']);
                    }
                }
            }
    
            // Merge image links and uploaded images, limit to 3
            $data['images'] = json_encode(array_slice(array_filter(array_merge($image_links, $uploaded_images)), 0, 3));
    
            if ($data['discount'] == null) {
                $data['discount'] = 0;
                $data['persentase_discount'] = null;
            } else {
                $data['discount'] = 1;
            }
    
            // Save product data
            $this->Product_model->create_product($data);
            redirect('admin/products');
        }
    }
    
public function validate_image_links($links)
{
    $links_array = explode(',', $links);
    if (count($links_array) > 3) {
        $this->form_validation->set_message('validate_image_links', 'Link gambar tidak boleh lebih dari 3.');
        return FALSE;
    }
    return TRUE;
}


public function edit_product($id)
{
    $this->form_validation->set_rules('name', 'Nama Produk', 'required');
    $this->form_validation->set_rules('price', 'Harga Produk', 'required|numeric');
    
    if ($this->form_validation->run() === FALSE) {
        $data['product'] = $this->Product_model->get_product_by_id($id);
        $data['product']['image_links'] = json_decode($data['product']['images'], true); // Decode the images field to an array for links
        $this->load->view('admin/edit_product', $data);
    } else {
        $data = $this->input->post();
        
        // Handle image links from the form
        $image_links = [];
        if (!empty($data['image_link_1'])) {
            $image_links[] = $data['image_link_1'];
        }
        if (!empty($data['image_link_2'])) {
            $image_links[] = $data['image_link_2'];
        }
        if (!empty($data['image_link_3'])) {
            $image_links[] = $data['image_link_3'];
        }

        // Handle image upload
        $uploaded_images = [];
        if (!empty($_FILES['images']['name'][0])) {
            $filesCount = count($_FILES['images']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                $_FILES['image']['name'] = $_FILES['images']['name'][$i];
                $_FILES['image']['type'] = $_FILES['images']['type'][$i];
                $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                $_FILES['image']['error'] = $_FILES['images']['error'][$i];
                $_FILES['image']['size'] = $_FILES['images']['size'][$i];

                $uploadPath = './uploads/products/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('image')) {
                    $fileData = $this->upload->data();
                    $uploaded_images[] = base_url($uploadPath.$fileData['file_name']);
                }
            }
        }

        if($data['discount'] == null){
            $data['discount'] = 0;
            $data['persentase_discount'] = null;
        }else{
            $data['discount'] = 1;
        }

        // Merge image links and uploaded images, and limit to a maximum of 3 images
        $merged_images = array_slice(array_filter(array_merge($image_links, $uploaded_images)), 0, 3);
        $data['images'] = json_encode($merged_images);
        
        // Remove 'image_link_X' from data to avoid using a non-existent column
        unset($data['image_link_1'], $data['image_link_2'], $data['image_link_3']);
        
        // Update product data
        $this->Product_model->update_product($id, $data);
        redirect('admin/products');
    }
}




public function remove_image($id)
{
    $image = $this->input->get('image');
    $product = $this->Product_model->get_product_by_id($id);
    
    $images = json_decode($product['images'], true);
    if (($key = array_search($image, $images)) !== false) {
        unset($images[$key]);
        $this->Product_model->update_product($id, ['images' => json_encode(array_values($images))]);
    }

    redirect('admin/products/edit/'.$id);
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
        $data['license'] = $this->License_model->get_licenses($id);

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

    // Management Guides
        public function guides()
        {
            $data['guides'] = $this->Guide_model->get_guides();
            $this->load->view('admin/guide', $data);
            
        }
    
        public function create_guide()
        {
            $this->form_validation->set_rules('title', 'Judul Lisensi', 'required');
            
            if ($this->form_validation->run() === FALSE) {
                
                $this->load->view('admin/create_guide');
                
            } else {
                $this->Guide_model->insert_guide($this->input->post());
                redirect('admin/guides');
            }
        }
    
        public function edit_guide($id)
        {
            $data['guide'] = $this->Guide_model->get_guides($id);
    
            $this->form_validation->set_rules('title', 'Judul Guide', 'required');
            
            if ($this->form_validation->run() === FALSE) {
                
                $this->load->view('admin/edit_guide', $data);
                
            } else {
                $this->Guide_model->update_guide($id, $this->input->post());
                redirect('admin/guides');
            }
        }
    
        public function delete_guide($id)
        {
            $this->Guide_model->delete_guide($id);
            redirect('admin/guides');
        }

    // widget Management
    public function widgets()
    {
        $data['widgets'] = $this->Widget_model->get_widgets();
        
        $this->load->view('admin/widgets', $data);
        
    }
    public function edit_widget($id)
    {
        $data['widget'] = $this->Widget_model->get_widgets($id);
        
        // Menghapus required dan hanya menggunakan trim
        $this->form_validation->set_rules('value', 'value', 'trim');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/edit_widget', $data);
        } else {
            $this->Widget_model->update_widget($id, $this->input->post());
            redirect('admin/widgets');
        }
    }
    
      // Menu Management
      public function menu()
      {
          $data['menu'] = $this->Menu_model->get_menus();
          
          $this->load->view('admin/menu', $data);
          
      }
  
      public function create_menu()
      {
          $this->form_validation->set_rules('title', 'Judul', 'required');
          $this->form_validation->set_rules('link', 'Link', 'required');
          
          if ($this->form_validation->run() === FALSE) {
              
              $this->load->view('admin/create_menu');
              
          } else {
              $this->Menu_model->insert_menu($this->input->post());
              redirect('admin/menu');
          }
      }
  
      public function edit_menu($id)
      {
          $data['shortcut'] = $this->Menu_model->get_menus($id);
  
          $this->form_validation->set_rules('title', 'Judul', 'required');
          $this->form_validation->set_rules('link', 'Link', 'required');
          
          if ($this->form_validation->run() === FALSE) {
              
              $this->load->view('admin/edit_menu', $data);
              
          } else {
              $this->Menu_model->update_menu($id, $this->input->post());
              redirect('admin/menu');
          }
      }
  
      public function delete_menu($id)
      {
          $this->Menu_model->delete_menu($id);
          redirect('admin/menu');
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
        $data['shortcut'] = $this->Shortcut_model->get_shortcuts($id);

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

 // Menampilkan halaman pengaturan
 public function settings() {
    $data['settings'] = $this->Setting_model->get_settings();
    $this->load->view('admin/settings', $data);
}

        // Menangani pembaruan pengaturan
        public function update_setting() {
            // Validasi form
            $this->form_validation->set_rules('site_name', 'Nama Web', 'required');
        
            if ($this->form_validation->run() === FALSE) {
                $data['settings'] = $this->Setting_model->get_settings();
                $this->load->view('admin/settings', $data);
            } else {
                $settings = $this->Setting_model->get_settings();
                $data = array(
                    'title' => $this->input->post('title'),
                    'site_name' => $this->input->post('site_name'),
                    'meta_description' => $this->input->post('meta_description'),
                    'text_body' => $this->input->post('text_body'),
                    'copyright' => $this->input->post('copyright')
                );
        
                // Proses upload logo
                if (!empty($_FILES['logo']['name'])) {
                    $config['upload_path'] = './uploads/';
                    $config['allowed_types'] = 'gif|jpg|png|ico|webp|svg|jpeg';
                    $config['max_size'] = 2048; // 2MB
                    $config['file_name'] = time() . '_' . $_FILES['logo']['name']; // Pastikan nama file unik
        
                    $this->upload->initialize($config);
        
                    if ($this->upload->do_upload('logo')) {
                        // Hapus logo lama jika ada
                        if ($settings && !empty($settings->logo)) {
                            @unlink('./uploads/' . $settings->logo);
                        }
        
                        $upload_data = $this->upload->data();
                        $data['logo'] = $upload_data['file_name'];
                    } else {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect('admin/settings');
                    }
                }
                
                    // Proses upload image_body
                    if (!empty($_FILES['image_body']['name'])) {
                        $config['upload_path'] = './uploads/';
                        $config['allowed_types'] = 'gif|jpg|png|ico|webp|svg|jpeg';
                        $config['max_size'] = 2048; // 2MB
                        $config['file_name'] = time() . '_' . $_FILES['image_body']['name']; // Pastikan nama file unik
            
                        $this->upload->initialize($config);
            
                        if ($this->upload->do_upload('image_body')) {
                            // Hapus image_body lama jika ada
                            if ($settings && !empty($settings->image_body)) {
                                @unlink('./uploads/' . $settings->image_body);
                            }
            
                            $upload_data = $this->upload->data();
                            $data['image_body'] = $upload_data['file_name'];
                        } else {
                            $this->session->set_flashdata('error', $this->upload->display_errors());
                            redirect('admin/settings');
                        }
                    }

                // Proses upload favicon
                if (!empty($_FILES['favicon']['name'])) {
                    $config['upload_path'] = './uploads/';
                    $config['allowed_types'] = 'ico|png|webp|svg|jpg|jpeg';
                    $config['max_size'] = 1024; // 1MB
                    $config['file_name'] = time() . '_' . $_FILES['favicon']['name']; // Pastikan nama file unik
        
                    $this->upload->initialize($config);
        
                    if ($this->upload->do_upload('favicon')) {
                        // Hapus favicon lama jika ada
                        if ($settings && !empty($settings->favicon)) {
                            @unlink('./uploads/' . $settings->favicon);
                        }
        
                        $upload_data = $this->upload->data();
                        $data['favicon'] = $upload_data['file_name'];
                    } else {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect('admin/settings');
                    }
                }
        
                if ($settings) {
                    // Update existing settings
                    $this->Setting_model->update_setting($settings->id, $data);
                } else {
                    // Create new settings
                    $this->Setting_model->create_setting($data);
                }
        
                // Redirect dengan pesan sukses
                $this->session->set_flashdata('success', 'Pengaturan berhasil diperbarui.');
                redirect('admin/settings');
            }
        }
        public function import_products(){
            $this->load->view('admin/import-product');
        }
        public function import_csv() {
            if (isset($_FILES['csv_file']) && $_FILES['csv_file']['size'] > 0) {
                // Buka file CSV
                $file = fopen($_FILES['csv_file']['tmp_name'], 'r');
        
                // Lewati baris pertama (header)
                $header = fgetcsv($file);
        
                // Kolom yang diharapkan dalam CSV
                $expected_headers = ['Judul', 'Link Tombol Beli', 'Harga'];
        
                // Validasi apakah header sesuai
                $image_columns = array_filter($header, function($col) {
                    return strpos(strtolower($col), 'link gambar') === 0;
                });
        
                $additional_headers = ['Diskon', 'Deskripsi'];
        
                if (array_slice($header, 0, 3) != $expected_headers || array_slice($header, -2) != $additional_headers) {
                    $this->session->set_flashdata('message', 'CSV format is incorrect.');
                    redirect('import-products-csv');
                }
        
                // Proses setiap baris data
                while (($row = fgetcsv($file)) !== FALSE) {
                    $data = array(
                        'name'        => $row[0],
                        'buy_link'    => $row[1],
                        'price'       => $row[2],
                        'images'      => json_encode(array_slice($row, 3, count($image_columns))),
                        'persentase_discount' => $row[3 + count($image_columns)],
                        'description' => $row[4 + count($image_columns)]
                    );
        
                    // Tentukan nilai discount
                    if (!empty($data['persentase_discount'])) {
                        $data['discount'] = true;
                    } else {
                        $data['discount'] = false;
                        $data['persentase_discount'] = null;  // Atau Anda bisa mengatur nilai default lain jika diperlukan
                    }
        
                    // Simpan data ke database
                    $this->Product_model->insert_product($data);
                }
        
                fclose($file);
                $this->session->set_flashdata('message', 'CSV file successfully imported.');
            } else {
                $this->session->set_flashdata('message', 'Please upload a CSV file.');
            }
        
            redirect('admin/products');
        }
        
        
        public function contact() {
            // Ambil data kontak jika ada
            $contact = $this->Contact_model->get_contact();
            $data['contact'] = $contact;
            $this->load->view('admin/contact', $data);
        }
        public function save_contact() {
            // Ambil data dari form
            $data = [
                'value' => $this->input->post('value'),
                // Tambahkan field lainnya di sini jika diperlukan
            ];
    
            // Simpan data ke database (update jika sudah ada, insert jika belum ada)
            $this->Contact_model->save_contact($data);
    
            // Redirect ke halaman form setelah penyimpanan
            redirect('admin/contact');
        }
        public function product_purchases()
        {
            $data['products'] = $this->Product_purchase_model->get_product_purchase();
            // var_dump($data['products']);
            $this->load->view('admin/products-purchases-detail', $data);
        }
        public function product_views()
        {
            $data['products'] = $this->Product_view_model->get_product_view();
            // var_dump($data['products']);
            $this->load->view('admin/products-views-detail', $data);
        }
        public function export_csv() {
            // Ambil data produk dari model
            $products = $this->Product_model->get_all_products();
        
            // Cari jumlah maksimum gambar dalam satu produk untuk menentukan jumlah kolom gambar
            $max_images = 0;
            foreach ($products as $product) {
                $images = json_decode($product->images, true);
                $max_images = max($max_images, count($images));
            }
        
            // Nama file yang akan diekspor
            $filename = 'products_' . date('Ymd') . '.csv';
        
            // Header CSV
            $headers = ["Judul", "Link Tombol Beli", "Harga"];
            for ($i = 1; $i <= $max_images; $i++) {
                $headers[] = "Link Gambar $i";
            }
            $headers = array_merge($headers, ["Diskon", "Deskripsi"]);
            $csv_data = implode(",", $headers) . "\n";
        
            // Isi CSV dengan data dari database
            foreach ($products as $product) {
                $row = [
                    $this->escape_csv_value($product->name),
                    $this->escape_csv_value($product->buy_link),
                    $product->price
                ];
        
                $images = json_decode($product->images, true);
                for ($i = 0; $i < $max_images; $i++) {
                    $row[] = isset($images[$i]) ? $this->escape_csv_value($images[$i]) : '';
                }
        
                $row[] = $this->escape_csv_value($product->persentase_discount);
                $row[] = $this->escape_csv_value($product->description);
        
                $csv_data .= implode(",", $row) . "\n";
            }
        
            // Download file CSV
            force_download($filename, $csv_data);
        }
        
        // Fungsi untuk escape karakter khusus dalam CSV
        private function escape_csv_value($value) {
            if ($value === null) {
                $value = ''; // Ubah null menjadi string kosong
            }
            $value = str_replace('"', '""', $value); // Escape tanda kutip
            return '"' . $value . '"'; // Tambahkan tanda kutip di awal dan akhir
        }
        // Theme Management
        public function theme() {
            $data['themes'] = $this->Theme_model->get_all_themes();
            $this->load->view('admin/theme', $data);
        }
    
        public function create_theme() {
            $this->form_validation->set_rules('header_color', 'Header Color', 'required');
            $this->form_validation->set_rules('navbar_color', 'Navbar Color', 'required');
            // Tambahkan rules untuk field lainnya sesuai kebutuhan
    
            if ($this->form_validation->run() === FALSE) {
                $this->load->view('admin/create_theme');
            } else {
                $data = $this->input->post();
                $this->Theme_model->create_theme($data);
                redirect('admin/theme');
            }
        }
    
        public function edit_theme($id) {
            $data['theme'] = $this->Theme_model->get_theme($id);
    
            $this->form_validation->set_rules('header_color', 'Header Color', 'required');
            $this->form_validation->set_rules('navbar_color', 'Navbar Color', 'required');
            // Tambahkan rules untuk field lainnya sesuai kebutuhan
    
            if ($this->form_validation->run() === FALSE) {
                $this->load->view('admin/edit_theme', $data);
            } else {
                $data = $this->input->post();
                $this->Theme_model->update_theme($id, $data);
                redirect('admin/theme');
            }
        }
    
        public function delete_theme($id) {
            $this->Theme_model->delete_theme($id);
            redirect('admin/theme');
        }
        
}

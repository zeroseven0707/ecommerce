<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('get_sosmed')) {
    function get_setting($key) {
        $CI =& get_instance();
        $CI->load->model('Sosmed_model');
        
        // Panggil method get_settings untuk mendapatkan data yang sudah di-join
        $sosmed = $CI->Sosmed_model->get_sosmed();
        
        // Periksa apakah setting ada dan key yang diminta tersedia
        if ($sosmed && isset($sosmed->$key)) {
            return $sosmed->$key;
        }
        
        // Jika tidak ditemukan, kembalikan null
        return null;
    }
}


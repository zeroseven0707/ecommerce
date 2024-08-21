<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('get_setting')) {
    function get_setting($key) {
        $CI =& get_instance();
        $CI->load->model('Setting_model');
        
        // Panggil method get_settings untuk mendapatkan data yang sudah di-join
        $settings = $CI->Setting_model->get_settings();
        
        // Periksa apakah setting ada dan key yang diminta tersedia
        if ($settings && isset($settings->$key)) {
            return $settings->$key;
        }
        
        // Jika tidak ditemukan, kembalikan null
        return null;
    }
}


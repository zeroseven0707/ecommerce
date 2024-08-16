<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('get_setting')) {
    function get_setting($key) {
        $CI =& get_instance();
        $CI->load->model('Setting_model');
        
        $settings = $CI->Setting_model->get_settings();
        
        if ($settings && isset($settings->$key)) {
            return $settings->$key;
        }
        
        return null;
    }
}

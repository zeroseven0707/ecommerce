<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('get_widget_mobile')) {
    function get_widget_mobile() {
        $CI =& get_instance();
        $CI->load->model('Widget_model');
        $widget = $CI->Widget_model->get_widget_by_for('mobile');
        return $widget ? $widget->value : '';
    }
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');

        // Daftar controller yang memerlukan login
        $controllers_requiring_login = array('admin', 'profile', 'dashboard');

        $current_controller = $this->router->fetch_class();

        if (in_array($current_controller, $controllers_requiring_login) && !$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }
}

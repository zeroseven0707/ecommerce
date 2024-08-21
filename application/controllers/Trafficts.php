<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trafficts extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Traffict_model');
    }

    

}

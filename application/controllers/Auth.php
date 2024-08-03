<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    public function register() {
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/register');
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'role' => 'user'
            ];

            $this->User_model->create_user($data);
            redirect('auth/login');
        }
    }

    public function login() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->User_model->get_user_by_username($username);

            if ($user && password_verify($password, $user->password)) {
                $userdata = [
                    'user_id' => $user->id,
                    'username' => $user->username,
                    'role' => $user->role,
                    'logged_in' => TRUE
                ];
                $this->session->set_userdata($userdata);
                redirect('admin');
            } else {
                $this->session->set_flashdata('error', 'Invalid username or password');
                redirect('auth/login');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata(['user_id', 'username', 'role', 'logged_in']);
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
?>

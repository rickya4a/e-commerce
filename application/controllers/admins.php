<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

    var $template = 'admin_login_template';

    function __construct() {
        parent::__construct();
        $this->load->model('User');

//        for
    }

    public function login() {
        $this->php_session->start();
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->User->checklogin($email, $password);
            //user or admin login verification
            if (!empty($user)) {
                $data = array(
                        'id' => $user['id'],
                        'email' => $user['email'],
                        'full_name' => $user['full_name'],
                        'level' => $user['level']
                    );

                $this->php_session->set($data);
                if ($this->php_session->get('level') == 1) {
                    redirect('admin/dashboard');
                } else {
                    redirect('admins/login');
                }
            }

            $this->php_session->set_flashdata('error', 'Login gagal!, email dan password Anda salah.');
            redirect('admins/login');
        }

        $data['content'] = 'admins/login';
        $this->load->view($this->template, $data);
    }

    function logout() {

        $this->php_session->destroy();
        redirect('admins/login');
    }
}
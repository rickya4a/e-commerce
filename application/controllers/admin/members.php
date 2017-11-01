<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Members extends CI_Controller {

    var $template = 'admin/admin_template';

    function __construct() {
        parent::__construct();
        $this->php_session->start();
        $this->load->model('Member');
        $this->load->library('pagination');
    }

    function index() {

        $data['members'] = $this->Member->findAll();
        $data['status']     = $this->Member->status;
        $data['level']      = $this->Member->level;
        $data['content']    = 'admin/members/index';
        $this->load->view($this->template, $data);
    }

    function add() {

        $this->form_validation->set_rules('full_name', 'full name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'phone', '');
        $this->form_validation->set_rules('address', 'address', '');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('confirm_password', 'password confirm', 'required|matches[password]');

        if ($this->form_validation->run() == TRUE) {
            $this->Member->create();
            $this->session->set_flashdata('success', 'User telah dibuat');
            redirect('admin/members/index');
        }
        $data['status']   = $this->Member->status;
        $data['level']    = $this->Member->level;
        $data['content']  = 'admin/members/add';
        $this->load->view($this->template, $data);
    }

    function edit($id = null) {

        if ($id == null) {
            $id = $this->input->post('id');
        }

        $this->form_validation->set_rules('full_name', 'full name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'phone', '');
        $this->form_validation->set_rules('address', 'address', '');
        if ($this->input->post('password')):
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('confirm_password', 'password confirm', 'required|matches[password]');
        endif;

        if ($this->form_validation->run() == TRUE) {
            $this->Member->update($id);
            $this->session->set_flashdata('success', 'Member telah diubah');
            redirect('admin/users/index');
        }
        $data['user']     = $this->Member->getUserById($id);
        $data['status']   = $this->Member->status;
        $data['level']    = $this->Member->level;
        $data['content']  = 'admin/members/edit';
        $this->load->view($this->template, $data);
    }

    function profile() {

        $this->form_validation->set_rules('full_name', 'full name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'phone', '');
        $this->form_validation->set_rules('address', 'address', '');

        if ($this->input->post('password')):
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('confirm_password', 'password confirm', 'required|matches[password]');

        endif;
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $this->Member->update_profile($this->session->userdata('id'));
            $this->session->set_flashdata('success', 'Profile telah diubah');
            redirect('admin/members/profile');
        }
        $data['user'] = $this->Member->getUserById($this->session->userdata('id'));
        $data['content'] = 'admin/members/profile';
        $this->load->view($this->template, $data);
    }

    function delete($id) {
        if (empty($id)) {
            $this->session->set_flashdata('error', 'User salah');
            redirect('admin/members/index');
        } else {
            $this->Member->delete($id);
            $this->session->set_flashdata('success', 'Member telah dihapus');
            redirect('admin/members/index');
        }
    }

    function logout() {

        $this->session->sess_destroy();
        redirect('members/login');
    }
}

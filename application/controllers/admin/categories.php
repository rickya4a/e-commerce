<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {

    var $template = 'admin/admin_template';

    function __construct() {
        parent::__construct();
        $this->php_session->start();
        $this->load->model('Category');
        $this->load->model('Product');
    }

    function index() {
        $data['categories'] = $this->Category->getCategories();
        $data['content'] = 'admin/categories/index';
        $this->load->view($this->template, $data);
    }

    function add() {
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $this->Category->create();
            $this->session->set_flashdata('success', 'Kategori ditambahkan');
            redirect('admin/categories');
        }
        $data['content'] = 'admin/categories/add';
        $this->load->view($this->template, $data);
    }

    function edit($id = null) {
        if ($id == null) {
            $id = $this->input->post('id');
        }

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $this->Category->update($id);
            $this->session->set_flashdata('success', 'Kategori telah diubah');
            redirect('admin/categories');
        }
        $data['category'] = $this->Category->getCategoryById($id);
        $data['content'] = 'admin/categories/edit';
        $this->load->view($this->template, $data);
    }

    function delete($id = null) {
        if ($id == null) {
            $this->session->set_flashdata('error', 'Kategori salah');
            redirect('admin/categories');
        } else {
            $products = $this->Product->getProductsByOptions(array('category_id' => $id));

            if (!empty($products)) {
                $this->session->set_flashdata('error', 'Gagal, kategori ini telah memiliki produk');
            } else {
                if ($this->Category->delete($id)) {
                    $this->session->set_flashdata('success', 'Kategori telah dihapus');
                } else {
                    $this->session->set_flashdata('error', 'Gagal, silakan coba lagi');
                }
            }
            redirect('admin/categories');
        }
    }

}

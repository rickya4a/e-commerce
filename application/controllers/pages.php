<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

    var $template = 'template';

    function __construct() {
        parent::__construct();
        $this->load->model('Product');
        $this->load->model('Page');
    }

    function home() {
        $data['content'] = 'pages/home';
        $this->load->view($this->template, $data);
    }

    function read($permalink = null) {
        if ($permalink == null) {
            $this->session->set_flashdata('message', 'Halaman tidak ditemukan');
            redirect('pages/home');
        }

        $data['page'] = $this->Page->getPagesByPermalink($permalink);
        $data['content'] = 'pages/read';
        $this->load->view($this->template, $data);
    }

}

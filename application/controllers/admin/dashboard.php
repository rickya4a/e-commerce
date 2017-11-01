<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->general->cekAdminLogin();
        $this->php_session->start();
    }

    function index() {

        $data['content'] = 'admin/dashboard/index';
        $this->load->view('admin/admin_template', $data);
    }

}

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Report
 */
class Reports extends CI_Controller
{
    var $template = 'admin/admin_template';

    function __construct()
    {
        parent::__construct();
        $this->php_session->start();
        $this->load->model('Confirmation');
        $this->load->model('Order');
        $this->load->model('Report');
        $this->load->library('pagination');
    }

    function index() {

        #Pagination COde ----------------------------------
        $reports = $this->Report->getAll();

        $config['uri_segment'] = 4;
        $config['total_rows'] = count($reports);
        $config['per_page'] = $this->general->getSetting('paginationLimit');
        $config['base_url'] = base_url() . 'index.php/admin/reports/index/';
        $this->pagination->initialize($config);
        if ($this->input->get('q')):
            $data['orders'] = $this->Report->getReports(array(), $config['per_page'], $this->uri->segment(4), $this->input->get('q'));
        else:
            $data['orders'] = $this->Report->getReports(array(), $config['per_page'], $this->uri->segment(4));
        endif;

        $data['pagination'] = $this->pagination->create_links();
        #end Pagination Code --------------------------

        $data['paymentMethods'] = $this->Report->paymentMethods;
        $data['status'] = $this->Report->status;
        $data['content'] = 'admin/reports/index';
        $this->load->view($this->template, $data);
    }
}

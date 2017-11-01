<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Carts extends CI_Controller {

    var $template = 'template';

    function __construct() {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('Product');
        $this->load->model('Cost');
    }

    function index() {
        $data['carts'] = $this->cart->contents();
        $data['content'] = 'carts/index';
        $data['cost'] = $this->Cost->getDropDown();
        $data['shipping'] = $this->Cost->getCost();
        $this->load->view($this->template, $data);
    }

    function delete($rowId) {
        $data = array('rowid' => $rowId, 'qty' => 0);

        $this->cart->update($data);
        $this->session->set_flashdata('success', 'Barang telah dihapus');
        redirect('carts/index');
    }

    function update() {

        $this->cart->update($_POST);
        $this->session->set_flashdata('success', 'Keranjang belanja telah diperbarui');
        redirect('carts/index');
    }

}

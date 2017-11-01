<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

    var $template = 'template';

    var $table = 'products';

    function __construct() {
        parent::__construct();
        $this->load->model('Product');
        $this->load->model('Category');
        $this->load->model('Cost');
        $this->load->library('pagination');
        $this->load->library('cart');
    }

    function index($page = null) {
        $products = $this->Product->getProductsPublished();

        $config['uri_segment'] = 3;
        $config['total_rows'] = count($products);
        $config['per_page'] = $this->general->getSetting('paginationLimit');
        $config['base_url'] = base_url() . 'index.php/products/index/';
        $this->pagination->initialize($config);
        if ($this->input->get('q')) {
            $data['products'] = $this->Product->getProductsPublished($config['per_page'], $this->uri->segment(4), $this->input->get('q'));
            if (empty($data['products'])) {
                $this->session->set_flashdata('error', 'Produk yang Anda cari tidak ditemukan.');
                redirect('products');
            }
        } else {
            $data['products'] = $this->Product->getProductsPublished($config['per_page'], $this->uri->segment(4));
        }

        $data['pagination'] = $this->pagination->create_links();
        $data['content'] = 'products/index';
        $this->load->view($this->template, $data);
    }

    function detail($permalink) {

        $data['product'] = $this->Product->getProductByPermalink($permalink);
        if (empty($data['product'])) {
            $this->session->set_flashdata('error', 'Produk salah');
            redirect('products');
        }
        $data['size'] = $this->Product->size;
        $data['content'] = 'products/detail';
        $this->load->view($this->template, $data);
    }

    function category($permalink, $page = null) {
        $data['category'] = $this->Category->getCategoryByPermalink($permalink);
        $products = $this->Product->getProductsByCategoryId($data['category']['id']);
        if (empty($products)) {
            $this->session->set_flashdata('error', 'Tidak ada item untuk kategori ini.');
            redirect('products');
        }
        $config['uri_segment'] = 4;
        $config['total_rows'] = count($products);
        $config['per_page'] = 9;
        $config['base_url'] = base_url() . 'index.php/products/category/' . $permalink . '/';
        $this->pagination->initialize($config);
        $pages_count = ceil($config['total_rows'] / $config['per_page']);
        $page = ($page == 0) ? 1 : $page;
        $offset = $config['per_page'] * ($page - 1);

        $data['products'] = $this->Product->getProductsByCategoryId($data['category']['id'], $config['per_page'], $offset);
        $data['pagination'] = $this->pagination->create_links();
        $data['content'] = 'products/category';
        $this->load->view($this->template, $data);
    }

    function add_cart($permalink) {
        $product = $this->Product->getProductByPermalink($permalink);

        $media = $this->general->getSingleMedia('product', $product['id']);

        $selected = $this->input->post('size');

        $uk['selected'] = $selected;

        $data = array(
            'id' => $product['code'],
            'qty' => 1,
            'price' => $product['net_price'],
            'name' => $product['name'],
            'options' => array('pic' => $media['path'], 'discount_percent' => $product['discount_percent'], 'size' => $uk['selected'])
        );
        //$this->Product->updateStock($product['code']);
        if ($this->cart->insert($data)) {
            $this->session->set_flashdata('success', 'Item telah ditambahkan ke keranjang');
            redirect('products/detail/' . $permalink);
        }
    }

}

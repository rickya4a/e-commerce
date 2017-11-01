<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {

    var $template = 'template';

    var $table = 'products';

    function __construct() {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('Member');
        $this->load->model('Order');
        $this->load->model('Order_detail');
        $this->load->model('Product');
        $this->load->model('Cost');
    }



    function checkout() {
        if ($this->general->isLogin() == FALSE) {
            $this->session->set_flashdata('error', 'Silakan masuk terlebih dahulu untuk melanjutkan!');
            redirect('members/login');
        } else {

            $data['content'] = 'orders/checkout';
            $this->load->view($this->template, $data);
        }
    }

    function proceed() {
        if ($this->general->isLogin() == FALSE) {
            $this->session->set_flashdata('error', 'Silakan masuk terlebih dahulu untuk melanjutkan!');
            redirect('members/login');
        } else {
            $orderCode = $this->general->generateRandomCode(8);
            $user = $this->Member->getUserById($this->session->userdata('id'));

            $order['code'] = $orderCode;
            $order['total'] = $this->cart->total();
            $order['order_date'] = date('Y-m-d');
            $order['payment_deadline'] = $this->general->setPaymentDeadline($this->general->getSetting('Order.DueDate'));
            $order['payment_method'] = 1; // transfer
            $order['status'] = 0;
            $order['user_id'] = $user['id'];
            $order['created'] = date("Y-m-d");

            if ($this->Order->create($order)) {

                $orderId = $this->db->insert_id();

                $carts = $this->cart->contents();

                foreach ($carts as $item) {
                    $product = $this->Product->getProductByCode($item['id']);
                    $detail['code'] = $item['id'];
                    $detail['name'] = $item['name'];
                    $detail['size'] = $item['options']['size'];
                    $detail['price'] = $item['price'];
                    $detail['qty'] = $item['qty'];
                    $detail['discount_percent'] = $item['options']['discount_percent'];
                    $detail['net_price'] = $product['net_price'];
                    $detail['order_id'] = $orderId;
                    
                    $this->Order_detail->create($detail);
                    /* Don't make too much f*cking var
                    $stock=$item['stock']-$item['qty'];
                    $detail['stock'] = $stock;
                    $this->db->set('stock', $detail['stock']);
                    $this->db->where('id', $item['id']);
                    $this->db->insert($this->table);
                    */
                }
                //------- Send Invoice to Customer Email------------------//
/*  
                $this->load->library('email');
                $config['protocol'] = 'mail';
                $config['smtp_host'] = 'mail.localhost.com';
                $config['smtp_user'] = 'noreply@localhost.com';
                $config['smtp_pass'] = 'noreply';
                $config['mailtype'] = 'html';
                $this->email->initialize($config);

                $this->email->to($this->session->userdata('email'));
                $this->email->from($this->general->getSetting('Email.Admin'));
                $this->email->subject('Invoice - ProjectTA ');
                $message = '';
                $email['order'] = $this->Order->getById($orderId);
                $email['orderDetails'] = $this->Order_detail->getByOrderId($email['order']['id']);
                $email['paymentMethods'] = $this->Order->paymentMethods;
                $email['status'] = $this->Order->status;
                $message .= $this->load->view('email/invoice', $email, TRUE);

                $this->email->message($message);
                $this->email->send();
*/
                //------- Send Invoice to Customer Email------------------//
                $this->cart->destroy();
                $this->db->set('stock', 'stock-'.$item['qty'], FALSE );
                $this->Product->updateStock($item['id']);    
                $this->session->set_flashdata('success', 'Transaksi berhasil, silakan konfirmasi untuk pembayaran');
                redirect('orders/complete');
            } else {
                $this->session->set_flashdata('error', 'Transaksi gagal, silakan coba lagi.');
                redirect('orders/checkout');
            }
        }
    }

    function complete() {
        $data['content'] = 'orders/complete';
        $this->load->view($this->template, $data);
    }

    function history() {
        $options = array(
            'user_id' => $this->session->userdata('id')
        );
        $data['orders'] = $this->Order->getHistory($options);
        $data['paymentMethods'] = $this->Order->paymentMethods;
        $data['status'] = $this->Order->status;
        $data['content'] = 'orders/history';
        $this->load->view($this->template, $data);
    }

    function detail($orderCode) {
        $data['order'] = $this->Order->getByOrderCode($orderCode);
        if (empty($data['order'])) {

            redirect('order/history');
        }
        $data['orderDetails'] = $this->Order_detail->getByOrderId($data['order']['id']);

        $data['paymentMethods'] = $this->Order->paymentMethods;
        $data['status'] = $this->Order->status;
        $data['content'] = 'orders/detail';
        $this->load->view($this->template, $data);
    }

}

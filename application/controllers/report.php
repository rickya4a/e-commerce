<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

var $template = 'template_report';

    function __construct() {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('Member');
        $this->load->model('Order');
        $this->load->model('Order_detail');
        $this->load->model('Product');
        
    }
    function detail($orderCode) {
        $user = $this->Member->getUserById($this->session->userdata('id'));
        $data['order'] = $this->Order->getByOrderCode($orderCode);
        $data['orderDetails'] = $this->Order_detail->getByOrderId($data['order']['id']);
        $data['paymentMethods'] = $this->Order->paymentMethods;
        $data['status'] = $this->Order->status;
        $data['user'] = $user;
        $data['content'] = 'report/approve';
        $this->load->view($this->template, $data);
    }

    function save_download()
    { 
        //load library
        $this->load->library('m_pdf');
        
        //now pass the data//
         $this->data['title']="MY PDF TITLE 1.";
         $this->data['description']="";
         $this->data['description']=$this->official_copies;
         //now pass the data //
 
        
        $html=$this->load->view('',$this->data, true); //load the pdf_output.php by passing our data and get all data in $html varriable.
     
        //this the the PDF filename that user will get to download
        $pdfFilePath ="mypdfName-".time()."-download.pdf";
 
        
        //actually, you can pass mPDF parameter on this load() function
        $pdf = $this->m_pdf->load();
        //generate the PDF!
        $pdf->WriteHTML($html,2);
        //offer it to user via browser download! (The PDF won't be saved on your server HDD)
        $pdf->Output($pdfFilePath, "D");
         
    }
}

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Report Model
 */
class Report extends CI_Model
{
 	var $table = 'orders';
    var $status = array(
        0 => 'Pending',
        1 => 'Approved',
        2 => 'Order Sent',
        3 => 'Cancelled',
        4 => 'Waiting Approval'
    );
    var $paymentMethods = array(
        1 => 'Bank Transfer'
    );

    function __construct()
    {
        parent::__construct();
    }

    function getAll() {
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function getReports($options = array(), $limit = 5, $offset = 0, $key = null) {
        $this->db->where('status', '1');
        $this->db->where($options);
        if ($key != null) {
            $this->db->like('code', $key);
        }
        $this->db->order_by('id', 'DESC');
        $this->db->limit($limit, $offset);

        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function delete($id){
        $this->db->where('id', $id)
            ->delete('orders');
    }
}

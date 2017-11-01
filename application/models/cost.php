<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cost extends CI_Model {

    var $table  =   'cost';


    function __construct() {
        parent::__construct();
    }

    function getById($cityId) {
        $this->db->where('city_id', $cityId);
        $query = $this->db->get($this->table, 1);
        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    function getByName($cityName) {
        $this->db->where('city_name', $cityName);
        $query = $this->db->get($this->table, 1);
        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    function create() {
        $data = array(
            'city_name'   => $this->input->post('city_name'),
            'cost'      => $this->input->post('cost')
        );

        $this->db->insert($this->table, $data);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

    function update($id) {
        $data = array(
            'city_name' => $this->input->post('city_name'),
            'cost' => $this->input->post('cost'),
        );

        $this->db->where('city_id', $id);
        $this->db->update($this->table, $data);
        if ($this->db->affected_rows() == 1) {

            return TRUE;
        }
        return FALSE;
    }

    function delete($id) {
        $this->db->where('city_id', $id);
        $this->db->delete($this->table);
        if ($this->db->affected_rows() == 1) {

            return TRUE;
        }
        return FALSE;
    }

    function getDropDown() {
        $this->db->select('city_id, city_name, cost');
        $query = $this->db->get($this->table);

        $data = array();
        foreach ($query->result_array() as $row) {
            $data[$row['city_id']] = $row['city_name'];
        }

        return $data;
    }

    function getCost() {
        $this->db->select('city_id, cost');
        $query = $this->db->get($this->table);

        $data = array();
        foreach ($query->result_array() as $row) {
            $data[$row['city_id']] = $row['cost'];
        }

        return $data;
    }

    function getAllGroups()
    {
        /*
        $query = $this->db->get('location');

        foreach ($query->result() as $row)
        {
            echo $row->description;
        }*/

        $query = $this->db->query('SELECT city_name FROM cost');


        return $query->result();

        //echo 'Total Results: ' . $query->num_rows();
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
    public function getUser()
    {
        return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function getStoreData()
    {
        return $this->db->get_where('store', ['id' => $this->session->userdata('id')])->row_array();
    }

    public function getStorage()
    {
        return $this->db->get_where('products', ['id_store' => $this->session->userdata('id_store')])->result_array();
    }

    public function getSellingList()
    {
        return $this->db->get_where('products', ['status' => 'Available', 'id_store' => $this->session->userdata('id_store')])->result_array();
    }

    public function getProduct($id)
    {
        return $this->db->get_where('products', ['id_product' => $id])->row_array();
    }

    public function getHistory()
    {
        return $this->db->get_where('history', ['id_store' => $this->session->userdata('id_store')])->result_array();
    }

    public function countIncome()
    {
        return $this->db->query('SELECT SUM(cost) FROM history WHERE type="Income" and id_store=' . $this->session->userdata('id_store') . '')->row_array();
    }
    public function countSpending()
    {
        return $this->db->query('SELECT SUM(cost) FROM history WHERE type="Spending" and id_store=' . $this->session->userdata('id_store') . '')->row_array();
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Journal_model extends CI_Model {

  public function __construct(){
    $this->load->database();
  }

  function getAllAccounts(){
    $query = $this->db->query('SELECT accountName FROM chartsofaccounts');
    return $query->result();
  }

  function createData(){
    $data = array(
      'accountTitleDebit' => $this->input->post('accountTitleDebit'),
      'accountTitleCredit' => $this->input->post('accountTitleCredit'),
      'PR' => $this->input->post('PR'),
      'debit' => $this->input->post('debit'),
      'credit' => $this->input->post('credit'),
      'description' => $this->input->post('description'),
      'status' => $this->input->post('status'),
      'addedBy' => $this->input->post('addedBy')
    );
    $this->db->insert('journals', $data);
  }

  function getAllData(){
    $query = $this->db->query('SELECT * FROM journals');
    return $query->result();
  }

  function getData($ID) {
    $query = $this->db->query('SELECT * FROM journals WHERE `id` =' .$ID);
    return $query->row();
  }

  function updateData($ID) {
    $data = array(
      'status' => $this->input->post('status'),
      'statusDesc' => $this->input->post('statusDesc')
    );
    $this->db->where('id', $ID);
    $this->db->update('journals', $data);
  }

}

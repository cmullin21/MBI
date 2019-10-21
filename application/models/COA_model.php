<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class COA_model extends CI_Model {

  public function __construct(){
    $this->load->database();
  }

  function createData(){
    $data = array(
      'accountName' => $this->input->post('accountName'),
      'accountNumber' => $this->input->post('accountNumber'),
      'accountDescription' => $this->input->post('accountDescription'),
      'normalSide' => $this->input->post('normalSide'),
      'accountCategory' => $this->input->post('accountCategory'),
      'accountSubcategory' => $this->input->post('accountSubcategory'),
      'initialBalance' => $this->input->post('initialBalance'),
      'debit' => $this->input->post('debit'),
      'credit' => $this->input->post('credit'),
      'balance' => $this->input->post('balance'),
      'addedBy' => $this->input->post('addedBy'),
      'accountOrder' => $this->input->post('accountOrder'),
      'statement' => $this->input->post('statement'),
      'comment' => $this->input->post('comment')
    );
    $this->db->insert('chartsofaccounts', $data);
  }

  function getAllData($providedQuery){
    if ($providedQuery != "normal"){
      $query = $this->db->query($providedQuery);
      return $query->result();
    } else {
      $query = $this->db->query('SELECT * FROM chartsofaccounts');
      return $query->result();
    }
  }

  function getSubcategories(){
    $query = $this->db->query('SELECT subcategoryName FROM subcategories');
    return $query->result();
  }

  function getData($accountNumber) {
    $query = $this->db->query('SELECT * FROM chartsofaccounts WHERE `accountNumber` =' .$accountNumber);
    return $query->row();
  }

  function updateData($accountNumber) {
    $data = array(
      'accountName' => $this->input->post('accountName'),
      'accountNumber' => $this->input->post('accountNumber'),
      'accountDescription' => $this->input->post('accountDescription'),
      'normalSide' => $this->input->post('normalSide'),
      'accountCategory' => $this->input->post('accountCategory'),
      'accountSubcategory' => $this->input->post('accountSubcategory'),
      'statement' => $this->input->post('statement'),
      'comment' => $this->input->post('comment')
    );
    $this->db->where('accountNumber', $accountNumber);
    $this->db->update('chartsofaccounts', $data);
  }

}

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

  // function createData(){
  //   $data = array(
  //     'id' => $this->input->post('id'),
  //     'accountName' => $this->input->post('accountName'),
  //     'debitOrCredit' => $this->input->post('debitOrCredit'),
  //     'amount' => $this->input->post('amount'),
  //     'status' => $this->input->post('status'),
  //     'date' => $this->input->post('date'),
  //     'addedBy' => $this->input->post('addedBy')
  //   );
  //   $this->db->insert('jEntries', $data);
  // }

  function batchInsert($data){
    $count =  count($data['count']);

    $debitFound = FALSE;
    $creditFound = FALSE;

    for($i = 0; $i<$count; $i++){

      if ($data['debitOrCredit'][$i] == "Debit") {
        $debitFound = TRUE;
      } else if ($data['debitOrCredit'][$i] == "Credit") {
        $creditFound = TRUE;
      }

      $entries[] = array(
        'accountName' => $data['accountName'][$i],
        'debitOrCredit' => $data['debitOrCredit'][$i],
        'amounts' => $data['amount'][$i],
        'date' => $this->input->post('date')
      );
    }

    if ($debitFound == FALSE || $creditFound == FALSE){
      echo "<script type='text/javascript'>alert('At least one debit and credit entry are required');</script>";
    } else {
      $this->db->insert_batch('jentry', $entries);
  
      $data = array(
        'addedBy' => $this->input->post('addedBy'),
        'status' => $this->input->post('status')
      );
      $this->db->insert('journal', $data);
    }
  }

  function getAllEntries(){
    $query = $this->db->query('SELECT * FROM jentry');
    return $query->result();
  }

  function getAllJournals(){
    $query = $this->db->query('SELECT * FROM journal');
    return $query->result();
  }

  function mergeTables(){
    $query = $this->db->query('SELECT * FROM journal JOIN jentry ON dateTime = date');
    return $query->result();
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

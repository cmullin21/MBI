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

  function batchInsert($data){
    $countDebit = count($data['countDebit']);
    for($i = 0; $i<$countDebit; $i++){
    $debitEntries[] = array(
      'accountNameDebit' => $data['accountNameDebit'][$i],
      'amountDebit' => $data['amountDebit'][$i],
      'dateDebit' => $this->input->post('date')
    );
  }
    $this->db->insert_batch('debitEntries', $debitEntries);

    $countCredit = count($data['countCredit']);
    for($j = 0; $j < $countCredit; $j++){
    $creditEntries[] = array(
      'accountNameCredit' => $data['accountNameCredit'][$j],
      'amountCredit' => $data['amountCredit'][$j],
      'dateCredit' => $this->input->post('date')
    );
  }
    $this->db->insert_batch('creditEntries', $creditEntries);

    $data = array(
      'addedBy' => $this->input->post('addedBy'),
      'status' => $this->input->post('status'),
      'typeOfJournal' => $this->input->post('typeOfJournal')
    );
    $this->db->insert('testJournal', $data);
  }

  function getAllEntries(){
    $query = $this->db->query('SELECT * FROM debitEntries JOIN creditEntries ON date = date');
    return $query->result();
  }

  function getAllJournals(){
    $query = $this->db->query('SELECT * FROM journal');
    return $query->result();
  }

  function getJournalDates(){
    $query = $this->db->query('SELECT * FROM testJournal');
    return $query->result();
  }

  function getJournalDebits(){
    $query = $this->db->query('SELECT * FROM debitEntries JOIN testJournal ON dateTime = dateDebit');
    return $query->result();
  }

  function getJournalCredits(){
    $query = $this->db->query('SELECT * FROM creditEntries JOIN testJournal ON dateTime = dateCredit');
    return $query->result();
  }

  function getAllData(){
    $query = $this->db->query('SELECT * FROM journals');
    return $query->result();
  }

  function getData($id) {
    $query = $this->db->query('SELECT * FROM testJournal WHERE `id` =' .$id);
    return $query->row();
  }

  function updateData($id) {
    $data = array(
      'status' => $this->input->post('status'),
      'statusDesc' => $this->input->post('statusDesc'),
    );
    $this->db->where('id', $id);
    $this->db->update('testJournal', $data);
  }

}

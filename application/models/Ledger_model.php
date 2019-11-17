<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ledger_model extends CI_Model {

  public function __construct(){
    $this->load->database();
  }

  function allJournalsFrom1Account($accountName){
    $query = $this->db->query("SELECT * FROM debitEntries JOIN testJournal ON dateDebit=dateTime WHERE accountNameDebit = '".$accountName."'");
    return $query->row();
  }

  

}

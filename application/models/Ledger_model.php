<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ledger_model extends CI_Model {

  public function __construct(){
    $this->load->database();
  }

  function allApprovedJournals(){
    $query = $this->db->query('SELECT * FROM jentry JOIN journal ON date = dateTime WHERE status = "Approved" && accountName = "Office Equipment"');
    return $query->result();
  }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrialBalance_model extends CI_Model {

  public function __construct(){
    $this->load->database();
  }

  function getAssets(){
    $query = $this->db->query("SELECT * FROM chartsofaccounts WHERE accountCategory = 'Assets' ORDER BY accountNumber");
    return $query->result();
  }

  function getLiabilities(){
    $query = $this->db->query("SELECT * FROM chartsofaccounts WHERE accountCategory = 'Liability'");
    return $query->result();
  }

  function getExpenses(){
    $query = $this->db->query("SELECT * FROM chartsofaccounts WHERE accountCategory = 'Expenses'");
    return $query->result();
  }

  function getEquity(){
    $query = $this->db->query("SELECT * FROM chartsofaccounts WHERE accountCategory = 'Equity'");
    return $query->result();
  }

  function getRevenue(){
    $query = $this->db->query("SELECT * FROM chartsofaccounts WHERE accountCategory = 'Revenue'");
    return $query->result();
  }
  
  function getDebitSum(){
    $query = $this->db->query("SELECT SUM('debit') FROM chartsofaccounts WHERE accountCategory = 'Assets'");
    return $query->result();
  }
}

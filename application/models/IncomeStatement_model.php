<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IncomeStatement_model extends CI_Model {

  public function __construct(){
    $this->load->database();
  }

  function getRevenue(){
    $query = $this->db->query("SELECT * FROM chartsofaccounts WHERE accountCategory = 'Revenue'");
    return $query->result();
  }

  function getExpenses(){
    $query = $this->db->query("SELECT * FROM chartsofaccounts WHERE accountCategory = 'Expenses'");
    return $query->result();
  }

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BalanceSheet_model extends CI_Model {

  public function __construct(){
    $this->load->database();
  }

  function getAssets(){
    $query = $this->db->query("SELECT * FROM chartsofaccounts WHERE accountCategory = 'Assets'");
    return $query->result();
  }

  function getLiabilities(){
    $query = $this->db->query("SELECT * FROM chartsofaccounts WHERE accountCategory = 'Liability'");
    return $query->result();
  }

  function getEquity(){
    $query = $this->db->query("SELECT * FROM chartsofaccounts WHERE accountCategory = 'Equity'");
    return $query->result();
  }


}
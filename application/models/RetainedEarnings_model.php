<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RetainedEarnings_model extends CI_Model {

  public function __construct(){
    $this->load->database();
  }

  function getRetainedEarnings(){
    $query = $this->db->query("SELECT * FROM chartsofaccounts WHERE accountName = 'Retained Earnings'");
    return $query->result();
  }
}
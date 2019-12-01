<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_log extends CI_Model {

  public function __construct(){
    $this->load->database();
  }

  function getAllData(){
    $query = $this->db->query('SELECT * FROM eventlog');
    return $query->result();
  }
}
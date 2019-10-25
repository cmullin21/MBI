<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  public function __construct(){
    $this->load->database();
  }

  function createData(){
    $data = array(
      'firstname' => $this->input->post('firstname'),
      'lastname' => $this->input->post('lastname'),
      'birthday' => $this->input->post('birthday'),
      'email' => $this->input->post('email'),
      'address' => $this->input->post('address'),
      'level' => $this->input->post('level'),
      'username' => $this->input->post('username'),
      'password' => md5($this->input->post('password'))
    );
    $this->db->insert('users', $data);
  }

  function getAllData(){
    $query = $this->db->query('SELECT * FROM users');
    return $query->result();
  }

  function getData($ID) {
    $query = $this->db->query('SELECT * FROM users WHERE `ID` =' .$ID);
    return $query->row();
  }

  function updateData($ID) {
    $data = array(
      'firstname' => $this->input->post('firstname'),
      'lastname' => $this->input->post('lastname'),
      'birthday' => $this->input->post('birthday'),
      'email' => $this->input->post('email'),
      'address' => $this->input->post('address'),
      'level' => $this->input->post('level'),
      'active' => $this->input->post('active')
    );
    $this->db->where('ID', $ID);
    $this->db->update('users', $data);
  }

}

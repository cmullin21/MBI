<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('User_model');
  }
	public function index()
	{
    $this->load->view('register_view');
	}

  // ----- NEW -----
  public function signUp(){
    // username availability is checcked after submission
    $this->form_validation->set_rules('username', 'Username', 'trim|is_unique[users.username]');
    $this->form_validation->set_rules('email', 'Email', 'trim|is_unique[users.email]');

    if ($this->form_validation->run() == TRUE) {

       $data = array(
           //assign user data into array elements
           'firstname' => $this->input->post('firstname'),
           'lastname' => $this->input->post('lastname'),
           'birthday' => $this->input->post('birthday'),
           'email' => $this->input->post('email'),
           'address' => $this->input->post('address'),
           'level' => $this->input->post('level'),
           'username' => $this->input->post('username'),
           'password' => sha1($this->input->post('password'))
         );
       $this->User_model->addUser($data);
       //set message to be shown when registration is completed
       $this->session->set_flashdata('success','User is registered!');
       redirect($this->uri->uri_string());
    } else {
           //return to the same page again with validation errors
           redirect($this->uri->uri_string());
       }
  }

  public function create(){
    $this->User_model->createData();
    redirect("Login");
  }
}

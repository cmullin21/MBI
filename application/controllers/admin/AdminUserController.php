<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminUserController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('User_model');
    $this->load->library('usertracking'); 
    $this->usertracking->track_this();
  }

  public function index(){
    $data['result'] = $this->User_model->getAllData();
    $this->load->view('headers/adminHeader');
    $this->load->view('admin/adminUser', $data);
    $this->load->view('footers/footer');
  }

  public function create(){
    $this->User_model->createData();
    redirect("admin/AdminUserController");
  }

  // ----- New -----
  public function createNewUser(){

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
           'active' => $this->input->post('active'),
           'password' => sha1($this->input->post('password'))
         );
       $this->User_model->addUser($data);
       //set message to be shown when registration is completed
       $this->session->set_flashdata('success','User is registered!');
       redirect('admin/AdminUserController');
    } else {
           //return to the same page again with validation errors
           redirect($this->uri->uri_string());
       }
  }
  // ----- New -----
  public function updateUser(){
    $this->form_validation->set_rules('username', 'Username', 'trim|is_unique[users.username]');
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
           'active' => $this->input->post('active'),
           'password' => sha1($this->input->post('password'))
         );
       $this->User_model->updateUser($data);
       //set message to be shown when registration is completed
       $this->session->set_flashdata('success','User updated!');
       redirect('admin/AdminUserController');
    } else {
           //return to the same page again with validation errors
           redirect($this->uri->uri_string());
       }
  }

  public function edit($ID){
    $data['row'] = $this->User_model-> getData($ID);
    $this->load->view('headers/adminHeader');
    $this->load->view('admin/adminUserEdit', $data);
    $this->load->view('footers/footer');
  }

  public function update($ID) {
    $this->User_model->updateData($ID);
    redirect("admin/AdminUserController");
  }


}

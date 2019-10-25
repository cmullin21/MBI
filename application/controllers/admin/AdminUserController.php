<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminUserController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('User_model');
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

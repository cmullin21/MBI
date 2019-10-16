<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountantUserController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('User_model');
  }
	public function index()
	{
    $data['result'] = $this->User_model->getAllData();
    $this->load->view('headers/accountantHeader');
		$this->load->view('accountant/accountantUser', $data);
    $this->load->view('footers/footer');
	}
}

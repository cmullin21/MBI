<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountantREController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('RetainedEarnings_model');

  }
	public function index()
	{
    $data['retEarn'] = $this->RetainedEarnings_model->getRetainedEarnings();
    $this->load->view('headers/accountantHeader');
    $this->load->view('accountant/accountantStatementRE', $data);
    $this->load->view('footers/footer');
  }
}
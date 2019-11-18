<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagerREController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('RetainedEarnings_model');

  }
	public function index()
	{
    $data['retEarn'] = $this->RetainedEarnings_model->getRetainedEarnings();
    $this->load->view('headers/managerHeader');
    $this->load->view('manager/managerStatementRE', $data);
    $this->load->view('footers/footer');
  }
}
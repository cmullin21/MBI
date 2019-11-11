<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagerTrialBalanceController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('TrialBalance_model');

  }
	public function index()
	{
    $data['result'] = $this->TrialBalance_model->getAssets();
    $data['liability'] = $this->TrialBalance_model->getLiabilities();
    $data['expenses'] = $this->TrialBalance_model->getExpenses();
    $data['sumDebits'] = $this->TrialBalance_model->sumDebit();
    $this->load->view('headers/accountantHeader');
    $this->load->view('accountant/accountantTrialBalance', $data);
    $this->load->view('footers/footer');
  }
}
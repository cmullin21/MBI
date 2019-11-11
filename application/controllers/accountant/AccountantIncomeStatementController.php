<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountantIncomeStatementController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('IncomeStatement_model');

  }
	public function index()
	{
    $data['revenue'] = $this->IncomeStatement_model->getRevenue();
    $data['expenses'] = $this->IncomeStatement_model->getExpenses();
    $this->load->view('headers/accountantHeader');
    $this->load->view('accountant/accountantIncomeStatement', $data);
    $this->load->view('footers/footer');
  }
}
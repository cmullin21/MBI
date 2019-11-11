<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagerIncomeStatementController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('IncomeStatement_model');

  }
	public function index()
	{
    $data['revenue'] = $this->IncomeStatement_model->getRevenue();
    $data['expenses'] = $this->IncomeStatement_model->getExpenses();
    $this->load->view('headers/managerHeader');
    $this->load->view('manager/managerIncomeStatement', $data);
    $this->load->view('footers/footer');
  }
}
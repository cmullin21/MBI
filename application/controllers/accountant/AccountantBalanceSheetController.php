<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountantBalanceSheetController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('BalanceSheet_model');

  }
	public function index()
	{
    $data['assets'] = $this->BalanceSheet_model->getAssets();
    $data['liability'] = $this->BalanceSheet_model->getLiabilities();
    $data['equity'] = $this->BalanceSheet_model->getEquity();
    $this->load->view('headers/accountantHeader');
    $this->load->view('accountant/accountantBalanceSheet', $data);
    $this->load->view('footers/footer');
  }
}
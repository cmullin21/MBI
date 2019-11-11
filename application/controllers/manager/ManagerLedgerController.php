<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class managerLedgerController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Ledger_model');

  }
	public function index()
	{
    $this->load->view('headers/managerHeader');
	$this->load->view('manager/managerLedgerView');
    $this->load->view('footers/footer');
  }
  
  public function ledgerView($accountName){
    $data['result'][] = $this->Ledger_model->allJournalsFrom1Account($accountName);
    // $data['results'] = $data;
    $this->load->view('headers/managerHeader');
	$this->load->view('manager/ManagerLedgerView', $data);
    $this->load->view('footers/footer');
  }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class accountantLedgerController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Ledger_model');

  }
	public function index()
	{
    $data['jentry'] = $this->Ledger_model->allApprovedJournals();
    $this->load->view('headers/accountantHeader');
		$this->load->view('accountant/accountantLedger', $data);
    $this->load->view('footers/footer');
	}
}

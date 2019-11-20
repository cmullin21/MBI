<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class managerLedgerController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Ledger_model');

  }
	public function index()
	{

    $name = $_GET['accountName'];
    $query = "SELECT * FROM jentry WHERE accountName = '$name'";
    $dbResponse = $this->db->query($query);
    $data['result'] = $dbResponse->result();

    $this->load->view('headers/managerHeader');
	  $this->load->view('manager/managerLedgerView', $data);
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

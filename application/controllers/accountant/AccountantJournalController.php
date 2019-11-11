<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountantJournalController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Journal_model');

  }
	public function index()
	{
    $data['jentry'] = $this->Journal_model->mergeTables();
    $data['accounts'] = $this->Journal_model->getAllAccounts();
    $this->load->view('headers/accountantHeader');
		$this->load->view('accountant/accountantJournal', $data);
    $this->load->view('footers/footer');
	}

  public function createData(){
    $result = $this->Journal_model->batchInsert($_POST);
    $data['accounts'] = $this->Journal_model->getAllAccounts();
    $this->load->view('headers/accountantHeader');
    $this->load->view('accountant/accountantNewJournal', $data);
    $this->load->view('footers/footer');
    }


  public function checkAccounts($id) {
    $data['row'] = $this->Journal_model-> getData($id);
    $this->load->view('headers/accountantHeader');
    $this->load->view('accountant/accountantJournalView', $data);
    $this->load->view('footers/footer');
  }
}

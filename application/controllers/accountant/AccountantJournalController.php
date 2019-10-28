<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountantJournalController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Journal_model');
    $this->load->library('usertracking'); 
    $this->usertracking->track_this();
  }
	public function index()
	{
    $data['result'] = $this->Journal_model->getAllData();
    $data['accounts'] = $this->Journal_model->getAllAccounts();
    $this->load->view('headers/accountantHeader');
		$this->load->view('accountant/accountantJournal', $data);
    $this->load->view('footers/footer');
	}

  public function create(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('credit', 'Credit Amount', 'required');
    $this->form_validation->set_rules('debit', 'Debit Amount', 'trim|required|matches[credit]');

    if($this->form_validation->run() == TRUE) {
      $this->Journal_model->createData();
      redirect("accountant/AccountantJournalController");
    } else {
      echo "Accounts are different values";
    }
  }

  public function checkAccounts($id) {
    $data['row'] = $this->Journal_model-> getData($id);
    $this->load->view('headers/accountantHeader');
    $this->load->view('accountant/accountantJournalView', $data);
    $this->load->view('footers/footer');
  }


}

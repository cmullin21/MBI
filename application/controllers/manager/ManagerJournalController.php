<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagerJournalController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Journal_model');
  }
	public function index()
	{
    $data['result'] = $this->Journal_model->getAllData();
    $data['accounts'] = $this->Journal_model->getAllAccounts();
    $this->load->view('headers/managerHeader');
		$this->load->view('manager/managerJournal', $data);
    $this->load->view('footers/footer');
	}

  public function create(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('credit', 'Credit Amount', 'required');
    $this->form_validation->set_rules('debit', 'Debit Amount', 'trim|required|matches[credit]');

    if($this->form_validation->run() == TRUE) {
      $this->Journal_model->createData();
      redirect("manager/ManagerJournalController");
    } else {
      echo "Accounts are different values";
    }
  }

  public function edit($id){
    $data['row'] = $this->Journal_model->getData($id);
    $this->load->view('headers/managerHeader');
    $this->load->view('manager/managerJournalApproval', $data);
    $this->load->view('footers/footer');
  }

  public function update($id){
    $this->Journal_model->updateData($id);
    redirect("manager/ManagerJournalController");
  }

  public function view($id) {
    $data['row'] = $this->Journal_model-> getData($id);
    $this->load->view('headers/managerHeader');
    $this->load->view('manager/managerJournalView', $data);
    $this->load->view('footers/footer');
  }
}

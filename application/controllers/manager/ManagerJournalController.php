<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagerJournalController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Journal_model');
    $this->load->library('usertracking');
    $this->usertracking->track_this();
  }
	public function index()
	{
    $data['jDates'] = $this->Journal_model->getJournalDates();
    $data['jDebits'] = $this->Journal_model->getJournalDebits();
    $data['jCredits'] = $this->Journal_model->getJournalCredits();
    $data['accounts'] = $this->Journal_model->getAllAccounts();
    $this->load->view('headers/managerHeader');
		$this->load->view('manager/managerJournal', $data);
    $this->load->view('footers/footer');
	}

  public function createData(){
    $result = $this->Journal_model->batchInsert($_POST);
    $data['accounts'] = $this->Journal_model->getAllAccounts();
    $this->load->view('headers/managerHeader');
    $this->load->view('manager/managerNewJournal', $data);
    $this->load->view('footers/footer');
    }

  public function edit($id){
    $data['row'] = $this->Journal_model->getData($id);
    $this->load->view('headers/managerHeader');
    $this->load->view('manager/managerJournalApprove', $data) ;
    $this->load->view('footers/footer');
  }

  public function editReject($id){
    $data['row'] = $this->Journal_model->getData($id);
    $this->load->view('headers/managerHeader');
    $this->load->view('manager/managerJournalReject', $data) ;
    $this->load->view('footers/footer');
  }

  public function update($id){
    $this->Journal_model->updateData($id);
    redirect("manager/ManagerJournalController");
  }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminJournalController extends CI_Controller {

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
    $this->load->view('headers/adminHeader');
		$this->load->view('admin/adminJournal', $data);
    $this->load->view('footers/footer');
	}

  public function view($id) {
    $data['row'] = $this->Journal_model-> getData($id);
    $this->load->view('headers/adminHeader');
    $this->load->view('admin/adminJournalView', $data);
    $this->load->view('footers/footer');
  }

  public function checkAccounts($id) {
    $this->load->view('headers/adminHeader');
    $this->load->view('admin/adminJournal');
    $this->load->view('footers/footer');
  }
}

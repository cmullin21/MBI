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
    /*
    // Upload the files then pass data to your model
    $config['upload_path'] = '.uploads/documents';
    $config['allowed_types'] = 'pdf|docx|txt';
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('userfile')){
      // If the upload fails
      echo $this->upload->display_errors('<p>', '</p>');
    }else{
      // Pass the full path and post data 
      $this->Journal_model->batchInsert($this->upload->data('full_path'),$this->input->post());
      $this->load->view('accountant/accountantJournal');
    }*/
    $this->load->view('headers/accountantHeader');
    $this->load->view('accountant/accountantJournal');
    $this->load->view('footers/footer');
}

  public function checkAccounts($id) {
    $data['row'] = $this->Journal_model-> getData($id);
    $this->load->view('headers/accountantHeader');
    $this->load->view('accountant/accountantJournalView', $data);
    $this->load->view('footers/footer');
  }
}

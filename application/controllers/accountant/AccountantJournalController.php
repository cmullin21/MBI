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
   // Upload the files then pass data to your model
    $config['upload_path'] = './uploads';
    $config['allowed_types'] = 'pdf|docx|txt';
    $this->load->library('upload', $config);
    $this->form_validation->set_error_delimiters();
    if ($this->upload->batchInsert()){
      $data = $this->input->post();
      $info = $this->upload->data();
      $file_path = base_url("uploads/".$info['raw_name'].$info['file_ext']);
      $data['document'] = $file_path;
      unset($data['submit']);
      $this->load->model('Journal_model');
      if($this->queries->insert($data)){
        echo 'File uploaded sucessfully';
      } else {
        echo 'Upload failed';
      }
      exit();
    }else{
      $this->index();
    }
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

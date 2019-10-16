<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCOAController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('COA_model');
  }
	public function index()
	{
    $data['result'] = $this->COA_model->getAllData();
    $this->load->view('headers/adminHeader');
		$this->load->view('admin/adminCOA', $data);
    $this->load->view('footers/footer');
	}

  public function create(){
    $this->COA_model->createData();
    redirect("admin/AdminCOAController");
  }

  public function edit($accountNumber){
    $data['row'] = $this->COA_model-> getData($accountNumber);
    $this->load->view('headers/adminHeader');
    $this->load->view('admin/adminCOAEdit', $data);
    $this->load->view('footers/footer');
   }

  public function update($accountNumber) {
    $this->COA_model->updateData($accountNumber);
    redirect("admin/AdminCOAController");
  }
}

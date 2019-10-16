<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagerCOAController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('COA_model');
  }
	public function index()
	{
    $data['result'] = $this->COA_model->getAllData();
    $this->load->view('headers/managerHeader');
		$this->load->view('manager/managerCOA', $data);
    $this->load->view('footers/footer');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountantCOAController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('COA_model');
  }
	public function index()
	{
    $data['result'] = $this->COA_model->getAllData();
    $this->load->view('headers/accountantHeader');
		$this->load->view('accountant/accountantCOA', $data);
    $this->load->view('footers/footer');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCOAController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('COA_model');
    $this->load->library('usertracking'); 
    $this->usertracking->track_this();
  }
  public function index()
  {
    if (isset($_GET['sort'])) {
      $sortType = $_GET['sort'];
      $query = "SELECT * FROM chartsofaccounts";

      if ($sortType == "accountName"){
        $query .= " ORDER BY accountName";
      }
      else if ($sortType == "accountNumber"){
        $query .= " ORDER BY accountNumber";
      }
      else if ($sortType == "accountDescription"){
        $query .= " ORDER BY accountDescription";
      }
      else if ($sortType == "normalSide"){
        $query .= " ORDER BY normalSide";
      }
      else if ($sortType == "accountCategory"){
        $query .= " ORDER BY accountCategory";
      }
      else if ($sortType == "accountSubcategory"){
        $query .= " ORDER BY accountSubcategory";
      }
      else if ($sortType == "initialBalance"){
        $query .= " ORDER BY initialBalance";
      }
      else if ($sortType == "debit"){
        $query .= " ORDER BY debit";
      }
      else if ($sortType == "credit"){
        $query .= " ORDER BY credit";
      }
      else if ($sortType == "balance"){
        $query .= " ORDER BY balance";
      }
      else if ($sortType == "dateTimeAdded"){
        $query .= " ORDER BY dateTimeAdded";
      }
      else if ($sortType == "addedBy"){
        $query .= " ORDER BY addedBy";
      }
      else if ($sortType == "accountOrder"){
        $query .= " ORDER BY accountOrder";
      }
      else if ($sortType == "statement"){
        $query .= " ORDER BY statement";
      }
      else if ($sortType == "comment"){
        $query .= " ORDER BY comment";
      }

      $data['result'] = $this->COA_model->getAllData($query);
    } else {
      $data['result'] = $this->COA_model->getAllData("normal");
    }
    $data['subcategories'] = $this->COA_model->getSubcategories();
    $this->load->view('headers/adminHeader');
    $this->load->view('admin/adminCOA', $data);
    $this->load->view('footers/footer');
  }

  // ----- NEW -----
  public function createNewAccount(){
    // Validate account details
    // ...

    $this->form_validation->set_rules('accountName','Account name','required|trim|is_unique[chartsofaccounts.accountName]');

    if ($this->form_validation->run() == TRUE) {
      $data = array(
        //assign account data into array elements
        'accountName' => $this->input->post('accountName'),
        'accountNumber' => $this->input->post('accountNumber'),
        'accountDescription' => $this->input->post('accountDescription'),
        'normalSide' => $this->input->post('normalSide'),
        'accountCategory' => $this->input->post('accountCategory'),
        'accountSubcategory' => $this->input->post('accountSubcategory'),
        'initialBalance' => $this->input->post('initialBalance'),
        'debit' => $this->input->post('debit'),
        'credit' => $this->input->post('credit'),
        'balance' => $this->input->post('balance'),
        'addedBy' => $this->input->post('addedBy'),
        'accountOrder' => $this->input->post('accountOrder'),
        'statement' => $this->input->post('statement'),
        'comment' => $this->input->post('comment')
      );
      $this->COA_model->addAccount($data);
      //set message to be shown when registration is completed
      $this->session->set_flashdata('success','Account successfully submitted!');
      redirect('admin/AdminCOAController');
    } else {
      //return to the same page again with validation errors
      redirect($this->uri->uri_string());
  }
}
  // ----- NEW -----
  public function editAccount(){
    // VAlidation details
    // ... will change
    $this->form_validation->set_rules('accountNumber', 'Account number', 'trim|is_unique[users.username]');
    if ($this->form_validation->run() == TRUE) {
      $data = array(
        //assign account data into array elements
        'accountName' => $this->input->post('accountName'),
        'accountNumber' => $this->input->post('accountNumber'),
        'accountDescription' => $this->input->post('accountDescription'),
        'normalSide' => $this->input->post('normalSide'),
        'accountCategory' => $this->input->post('accountCategory'),
        'accountSubcategory' => $this->input->post('accountSubcategory'),
        'initialBalance' => $this->input->post('initialBalance'),
        'debit' => $this->input->post('debit'),
        'credit' => $this->input->post('credit'),
        'balance' => $this->input->post('balance'),
        'addedBy' => $this->input->post('addedBy'),
        'accountOrder' => $this->input->post('accountOrder'),
        'statement' => $this->input->post('statement'),
        'comment' => $this->input->post('comment')
      );

      $this->COA_model->updateAccount($data);
      //set message to be shown when registration is completed
      $this->session->set_flashdata('success','Account successfully submitted!');
      redirect('admin/AdminCOAController');

    }
    else{
      //return to the same page again with validation errors
      redirect($this->uri->uri_string());
    }
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

  public function updateData($accountNumber) {
    $this->COA_model->updateData($accountNumber);
    redirect("admin/AdminCOAController");
  }
	//NEW
  function search()
  {
    $data['query'] = $this->COA_model->get_search();
    $this->load->view('chartsofaccounts',$data);
  }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagerCOAController extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('COA_model');
    
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
    $this->load->view('headers/managerHeader');
		$this->load->view('manager/managerCOA', $data);
    $this->load->view('footers/footer');
	}
}

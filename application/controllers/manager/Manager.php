<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('Login');
        }
        $this->load->library('usertracking'); 
        $this->usertracking->track_this();
    }

    function index(){
        if($this->session->userdata('level') === 'Manager'){
          $this->load->view('headers/managerHeader');
          $this->load->view('manager/managerDashboard');
          $this->load->view('footers/footer');
        } else{
            echo "Access Denied";
        }
    }
}

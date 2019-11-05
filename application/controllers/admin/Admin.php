<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('Login');
        }
        
    }

    function index(){
        if($this->session->userdata('level') === 'Admin'){
          $this->load->view('headers/adminHeader');
          $this->load->view('admin/adminDashboard');
          $this->load->view('footers/footer');
        } else{
            echo "Access Denied";
        }
    }
}

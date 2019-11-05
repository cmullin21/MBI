<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminEventLogController extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Event_log');
        
      }
    
      public function index(){
        $data['result'] = $this->Event_log->getAllData();
        $this->load->view('headers/adminHeader');
        $this->load->view('admin/adminEventLog', $data);
        $this->load->view('footers/footer');
      }

}
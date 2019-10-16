<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
    }

	public function index()
	  {
		$this->load->view('login_view');
    }

  function auth(){
    $username = $this->input->post('username', TRUE);
    $password = $this->input->post('password', TRUE);
    $result = $this->Login_model->check_user($username, $password);
    if($result->num_rows() > 0){
        $data = $result->row_array();
        $name = $data['username'];
        $email = $data['email'];
        $level = $data['level'];
        $sesdata = array(
            'username' => $username,
            'email' => $email,
            'level' => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        if($level === 'Admin'){
            redirect('admin/Admin');
        } elseif($level === 'Manager') {
            redirect('manager/Manager');
        } else{
            redirect('accountant/Accountant');
        }
    } else{
        echo "<script>alert('access denied'); history.go(-1);</script>";
    }
    $this->load->view('login_view');
  }

  function logout(){
      $this->session->sess_destroy();
      redirect('Login');
  }
}

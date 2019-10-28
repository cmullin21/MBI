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
        $active = $data['active'];
        $email = $data['email'];
        $level = $data['level'];
        $sesdata = array(
            'username' => $username,
            'email' => $email,
            'level' => $level,
            'active' => $active,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        if($level === 'Admin'){
          if($active === 'Yes'){
            redirect('admin/Admin');
          } else{
            echo "<script>alert('User not active'); history.go(-1);</script>";
          }
        } elseif($level === 'Manager') {
          if($active === 'Yes'){
            redirect('manager/Manager');
          } else{
            echo "<script>alert('User not active'); history.go(-1);</script>";
          }
        } else{
          if($active === 'Yes'){
            redirect('accountant/Accountant');
          } else{
            echo "<script>alert('User not active'); history.go(-1);</script>";
          }
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

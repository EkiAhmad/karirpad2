<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('loginModel');
  }
 
  function index(){
    $this->load->view('login');
  }
 
  function auth(){
    $username    = $this->input->post('username',TRUE);
    $password = $this->input->post('password',TRUE);
    $validate = $this->loginModel->validate($username,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $name  = $data['user_name'];
        $username = $data['user_username'];
        $level = $data['user_level'];
        $sesdata = array(
            'name'  => $name,
            'username'     => $username,
            'level'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === '1' || $level === '2'){
            redirect('emp');
        }else{
            redirect('login');
        }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('login');
    }
  }
 
  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }
 
}
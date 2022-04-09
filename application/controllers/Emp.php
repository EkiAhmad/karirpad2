<?php
class Emp extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
	    	redirect('login');
	    }
		$this->load->model('EmpModel');
	}
	function index(){
		// if($this->session->userdata('level')==='1'){
  //       	$this->load->view('listEmp');
  //     	}else{
  //       	echo "Access Denied";
  //     	}
		$this->load->view('listEmp');
	}
	function show(){
		$data=$this->EmpModel->employeeList();
		// $role=$this->session->userdata('level');
		echo json_encode($data);
	}
	function save(){
		if($this->session->userdata('level')==='1'){
			// $config['upload_path']="./assets/images";
	  //       $config['allowed_types']='gif|jpg|png';
	  //       $config['encrypt_name'] = TRUE;

	  //       $this->load->library('upload',$config);
	  //       if($this->upload->do_upload("file")){
	  //           $data = array('upload_data' => $this->upload->data());
	  //           $image= $data['upload_data']['file_name']; 
	             
	  //           $result= $this->EmpModel->saveUpload($image);
	  //           echo json_decode($result);
	  //       }

			$data=$this->EmpModel->saveEmp();
			echo json_encode($data);
      	}else{
        	echo "<script>alert('Access Denied')</script>";
      	}
	}
	function update(){
		if($this->session->userdata('level')==='1'){
			$data=$this->EmpModel->updateEmp();
			echo json_encode($data);
      	}else{
        	echo "<script>alert('Access Denied')</script>";
      	}
	}
	function delete(){
		if($this->session->userdata('level')==='1'){
			$data=$this->EmpModel->deleteEmp();
			echo json_encode($data);
      	}else{
        	echo "<script>alert('Access Denied')</script>";
      	}
	}
}
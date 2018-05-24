<?php
class Helloword extends CI_Controller{

	function construct(){
		parent::__construct();
		$this->load->model('model_operator');
	}

	public function index(){
		$this->load->view('depan');
	}

	public function formlogin(){
		$this->load->view('formlogin');
	}

	public function login()
	{
		$this->load->model('model_operator');
		$nim=$this->input->post('nim');
		$password=$this->input->post('password');
		$where=array(
			'nim'=>$nim,
			'password'=>md5($password)
		);
		$cek=$this->model_operator->login('login_mhs',$where)->num_rows();
		if($cek>0){
			$data_session=array(
				'nim'=>$nim,
				'status'=>"login"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('/'));
		}else{
			echo "Nim/Password anda salah";
		}
	}

	function logout(){
		$this->session->session_destroy();
		redirect('helloword/login');
	}

}
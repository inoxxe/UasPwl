<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');
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
	public function loginadmin(){
		$this->load->view('loginadmin');
	}
	public function formregister(){
		$this->load->view('formregister');
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
	public function login_adm()
	{
		$this->load->model('model_operator');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$where=array(
			'username'=>$username,
			'password'=>md5($password)
		);
		$cek=$this->model_operator->login('login_adm',$where)->num_rows();
		if($cek>0){
			$data_session=array(
				'username'=>$username,
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
	
	public function register()
	{
		$this->load->model('model_operator');
		$data = array(
        'nim' => $this->input->post('nim'),
        'nama' => $this->input->post('nama'),
        'password' => md5($this->input->post('password')),
        'jns_klmn' => $this->input->post('jns_klmn'),
        'lahir' => $this->input->post('lahir'),
        'alamat' => $this->input->post('alamat'),
        'jurusan' => $this->input->post('jurusan'),
        'orangtua' => $this->input->post('orangtua'),
         );

		$data = $this->model_operator->Insert('login_mhs', $data);
		return "berhasil";
    	//redirect(base_url(),'refresh');
	}
}
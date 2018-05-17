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

	function login(){
		if (isset($_POST['submit'])){
			$nim=$this->input->uas_pwl['nim'];
			$password=$this->input->uas_pwl['password'];
			$hasil=$this->model_operator->login($nim,$password);
			if($hasi==1){
				$this->session->set_userdata(array(
					'status_login'=>'berhasil'
				));
				redirect('depan.php');
			}
			else{
				echo "gagal login";
			}
		}
		else{
			$this->load->view['form_login'];
		}
	}

	function logout(){
		$this->session->session_destroy();
		redirect('helloword/login');
	}

}
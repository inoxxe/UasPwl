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
	public function daftarmahasiswa(){
	$data=$this->load->model('model_operator');
	$data=$this->model_operator->GetMahasiswa('register');
	$data=array('data'=>$data);
	$this->load->view('daftar_mahasiswa',$data);
	}
	

	public function login_adm()
	{
		$this->load->model('model_operator');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$where=array(
			'nim'=>$username,
			'password'=>md5($password)
		);
		$cek=$this->model_operator->login('register',$where);
		if( $cek->num_rows() > 0 )
		{
			$data = $cek->row_array();	
			$this->session->set_userdata('login', TRUE);
			if($data['level'] === 'Mahasiswa' )
			{
				$this->session->set_userdata('akses', 'Mahasiswa');
				$this->session->set_userdata('username', $data['nim']);
				$this->session->set_userdata('nama', $data['nama']);
				redirect(base_url('index.php/control_peminjaman/kelas'));
			}
			
			if($data['level'] === 'Admin' )
			{
				$this->session->set_userdata('akses', 'Admin');
				$this->session->set_userdata('username', $data['nim']);
				$this->session->set_userdata('nama', $data['nama']);
				redirect(base_url('/'));
			}
			
		}else{
			
			redirect(base_url('index.php/helloword/loginadmin'));
			echo '<Script>alert ("Gagal Login");</Script>';
		}
	}
	public function logout(){
		$this->session->session_destroy();
		redirect('bagas/helloword/login');
	}
	
	public function prosesregister()
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
        'level' => $this->input->post('level')
         );

		$data = $this->model_operator->Insert('register', $data);
		
    	redirect(base_url('index.php/helloword/formregister'));
	}

	public function mahasiswa()
	{
		$this->load->view('mahasiswa');
	}


}
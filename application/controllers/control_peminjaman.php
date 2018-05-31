<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_peminjaman extends CI_Controller {
	
	function kelas()
		{
			
			if($this->session->userdata('akses'))
			{
				/*$this->load->model('model_peminjaman');
				$where = $this->session->userdata('nim');
				$data = $this->model_peminjaman->GetWhere('kelas',$where);
				$data = array('data' => $data );*/
				$this->load->view('welcome');
					
				}
				else{
					
					$this->load->view('helloworld/index');
				}
				
			}
	function pinjam()
		{
			
			if($this->session->userdata('akses'))
			{
				
				$this->load->view('pinjam_kelas');
					
				}
				else{
					
					$this->load->view('helloworld/index');
				}
				
			}

	function gedung()
		{
			
			if($this->session->userdata('akses'))
			{
			
					$this->load->view('gedung');
					
				}
				else{
					
					$this->load->view('helloworld/index');
				}
				
			}
	function h3()
		{
			
			if($this->session->userdata('akses'))
			{
			
					$this->load->view('ruang/h3');
					
				}
				else{
					
					$this->load->view('helloworld/index');
				}
				
			}

	function h4()
		{
			
			if($this->session->userdata('akses'))
			{
			
					$this->load->view('ruang/h4');
					
				}
				else{
					
					$this->load->view('helloworld/index');
				}
				
			}

	function h5()
		{
			
			if($this->session->userdata('akses'))
			{
			
					$this->load->view('ruang/h5');
					
				}
				else{
					
					$this->load->view('helloworld/index');
				}
				
		}

	function h6()
		{
			
			if($this->session->userdata('akses'))
			{
			
					$this->load->view('ruang/h6');
					
				}
				else{
					
					$this->load->view('helloworld/index');
				}
				
			}	

	function h7()
		{
			
			if($this->session->userdata('akses'))
			{
			
					$this->load->view('ruang/h7');
					
				}
				else{
					
					$this->load->view('helloworld/index');
				}
				
			}

		function proses_kelas(){
		$this->load->model('model_peminjaman');
    	$data = array(
        'nim' => $this->input->post('nim'),
        'hari' => $this->input->post('hari'),
        'jam' => $this->input->post('jam'),
        'keperluan' => $this->input->post('keperluan')
        );
    	$data = $this->model_peminjaman->Insert('kelas', $data);
    	redirect(base_url('index.php/control_peminjaman/gedung'));
		}

	
}

?>
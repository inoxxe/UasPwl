<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_peminjaman extends CI_Controller {
	
	function kelas()
		{
			
			if($this->session->userdata('akses'))
			{
			
					$this->load->view('welcome');
					
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

		public function prosesedit()
	{
		$id = $_POST['id'];
	    $matakuliah = $_POST['matakuliah'];
	    $jamm = $_POST['jamm'];
	    $jams = $_POST['jams'];
	    $data = array(
	        'matkul' => $matakuliah,
	        'jammulai' => $jamm,
	        'jamselesai' => $jams,
	     );
	    $where = array(
	        'id' => $id,
	    );
	    $this->load->model('modeladmin');
	    $res = $this->modeladmin->Update('matakuliah', $data, $where);
	    if ($res>0) {
	        redirect('admin/matakuliah','refresh');
	    }
	}

	public function delete_data($id)
	{
	    $id = array('id' => $id);
	    $this->load->model('model_peminjaman');
	    $this->model_peminjaman->Delete('kelas', $id);
	    redirect('admin/peminjaman','refresh');
	}

	public function daftar()
	{
		$this->load->model('model_peminjaman');
		$data = $this->model_peminjaman->GetMahasiswa('kelas');
		$data = array('data' => $data );
		$this->load->view('admin/peminjaman', $data);
	}
}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/home');
	}

	public function peminjaman()
	{
		$this->load->view('admin/peminjaman');
	}

	public function matakuliah()
	{
		$this->load->model('Modeladmin');
		$data = $this->Modeladmin->GetMahasiswa('matakuliah');
		$data = array('data' => $data );
		$this->load->view('admin/matakuliah', $data);
	}

	public function prosestambahmatakuliah()
	{
		$this->load->model('Modeladmin');
    	$data = array(
        'matkul' => $this->input->post('matakuliah'),
        'jammulai' => $this->input->post('jamm'),
        'jamselesai' => $this->input->post('jams')
        );
    $data = $this->Modeladmin->Insert('matakuliah', $data);
    redirect(base_url('index.php/admin/matakuliah'),'refresh');
	}

	
	public function editmatkul($id)
	{
		$this->load->model('modeladmin');
	    $krs = $this->modeladmin->GetWhere('matakuliah', array('id' => $id));
	    $data = array(
	    'id' => $krs[0]['id'],
        'matkul' => $krs[0]['matkul'],
        'jammulai' => $krs[0]['jammulai'],
        'jamselesai' => $krs[0]['jamselesai'],
        );
    	$this->load->view('admin/editmatkul', $data);  
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

	public function delete_matkul($id)
	{
	    $id = array('id' => $id);
	    $this->load->model('modeladmin');
	    $this->modeladmin->Delete('matakuliah', $id);
	    redirect('admin/matakuliah','refresh');
	}


	/// Punya INO

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

	/*public function ya($id)
	{
		$this->load->model('modeladmin');
	    $krs = $this->modeladmin->GetWhere('register', array('nim' => $id));
	    $data = array(
	    'nim' => $krs[0]['nim'],
        );
		$nim = $id;
	    $status = "ya";
	    $data = array(
	        'status' => $status
	     );
	    $where = array(
	        'nim' => $nim
	    );
	    $this->load->model('model_peminjaman');
	    $res = $this->model_peminjaman->Update('register', $data, $where);
	        redirect('admin/peminjaman','refresh');
	}*/

}
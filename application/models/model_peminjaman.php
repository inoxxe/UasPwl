<?php
class Model_peminjaamn extends CI_Model{
	public function Insert($table,$data){
        $res = $this->db->insert($table, $data);
        return $res; 
    }
	function login($table, $where){
		
		// $cek= $this->db->get_where('register',array('nim'=>$nim,'password'=>md5($password)));
		// if($cek->num_rows()>0){
		// 	return 1;
		// }
		// else{
		// 	return 0;
		// }
		return $this->db->get_where($table,$where);
	}
	/*function login_adm($table, $where){
		return $this->db->get_where($table,$where);
	}*/
	function register($table,$where){
		return $this->db->get_where($table,$where);
	}

	function tampil($table){
		$res = $this->db->get('$table');
		return $res->result_array();
	}
	public function GetMahasiswa($table)
	{
		$res=$this->db->get($table);//memilih tabel
		return $res->result_array();//mengembalikan hasil
	}

}
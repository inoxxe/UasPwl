<?php
class Model_operator extends CI_Model{

	function login($table, $where){
		return $this->db->get_where($table,$where);
		// $cek= $this->db->get_where('login_mhs',array('nim'=>$nim,'password'=>md5($password)));
		// if($cek->num_rows()>0){
		// 	return 1;
		// }
		// else{
		// 	return 0;
		// }
	}
}
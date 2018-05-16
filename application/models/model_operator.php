<?php
class model_operator extends CI_Model{

	function login(&nim, &password){
		$cek= $this->db->get_where('operator',array('nim'=>$nim,'password'=>md5($password)));
		if($cek->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}
}
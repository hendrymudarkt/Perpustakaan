<?php 
class Login_model extends CI_Model{	
	function cek_login($username){		
		return $this->db->get_where('user',array('username'=>$username))->row_array();
	}
	function cek_logins($nisn){		
		return $this->db->get_where('siswa',array('nisn'=>$nisn))->row_array();
	}
}

<?php 

class M_user extends CI_Model{
	function cek_login($where){
		return $this->db->get_where('user1',$where);


	}
}

 ?>
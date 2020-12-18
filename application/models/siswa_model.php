<?php

class Siswa_Model extends CI_Model
{
	function ambil()
	{
		$query = $this->db->get("tb_siswa");
		return $query;
	}
	function insert($data){
		$this->db->insert('tb_siswa',$data);
	}
}
?>
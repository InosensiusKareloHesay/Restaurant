<?php
class Model_register extends CI_Model {
	
	public $table = 'account';

	public function register($data){
		$this->db->insert($this->table,$data);
	}

}
?>
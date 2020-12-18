<?php
/**
* 
*/
class User_model extends CI_Model
{
	public $primary_key = 'no_id';
	public $table = 'account';
	/*function check_user($insert_user,$insert_pass)
	{
		$user = $insert_user;
		$pass = $insert_pass;
		$query = $this->db->get_where('user',array('username' => $user, 'password' => $pass));
		return $query->num_rows();
	}*/
	function get_user($id){
		$this->db->select('*');
		$this->db->where('no_id',$id);
		$result = $this->db->get('account')->result_array();
		return $result;
	}

	function update($id,$data){
		$this->db->where($this->primary_key,$id);
		$this->db->update($this->table,$data);
	}

}
?>
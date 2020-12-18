<?php
/**
* 
*/
class Show_model extends CI_Model
{
	
	function get_show()
	{
		$query = $this->db->get('show');
		return $query->result_array();
	}
}
?>
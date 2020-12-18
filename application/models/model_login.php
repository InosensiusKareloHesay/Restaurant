<?php
class Model_login extends CI_Model {

	public function login($username, $password){
		$cek = array('user_id' => $username, 'password' => $password );
		$log = $this->db->get_where('account', $cek);

			if ($log->num_rows()==1) {
				return true;
			}else {
				return false;
			}
	}

	function get_id($data){
		/*$this->db->select('no_id');
		$this->db->where('user_id',$data);
		$result = $this->db->get('account')->get();
		return $result;

		$this->db->select('no_id');
	    $this->db->where('user_id',$data);
    	$query = $this->db->get('account');       
    	foreach ($query->result_array() as $row)
        {
            $user_id = $row['no_id'];
        }
        return $user_id;*/
  		
  		/*$this->db->where('user_id',$data);
  		$query = $this->db->get('account')->row_array(); // retrieves only first-row.
 		return $query['no_id'];*/

 		$query = "SELECT no_id from account where user_id = ?";
 		$result = $this->db->query($query, array($data))->result_array();
 		foreach ($result as $row)
 		{
 			$user_id = $row['no_id'];
 		}
 		return $user_id;
}

}?>
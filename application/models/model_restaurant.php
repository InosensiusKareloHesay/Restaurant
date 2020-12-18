<?php
class Model_restaurant extends CI_Model {
	public $table = 'ta_restaurant';
	public $primary_key='resto_id';

	function getRestaurant(){
        $query = $this->db->get('restaurant');
        return $query->result_array();
    }

    function getNamaRestaurant($resto_id){
    	$query = "SELECT * from restaurant where resto_id = ?";
        $result = $this->db->query($query, array($resto_id))->row_array();
		return $result;
    }

    function by_id($resto_id){
		$this->db->select('*');
		$this->db->where('resto_id',$resto_id);
		$result = $this->db->get('makanan')->result_array();
		return $result;
	}

	function by_id2($resto_id){
		$this->db->select('*');
		$this->db->where('resto_id',$resto_id);
		$result = $this->db->get('minuman')->result_array();
		return $result;
	}
}?>
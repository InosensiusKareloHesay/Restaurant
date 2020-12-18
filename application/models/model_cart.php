<?php
class Model_cart extends CI_Model {

	public $table = 'keranjang';
	public $primary_key = 'id_pembelian';
	public $param = 'no_id';

	function getCartMakanan($id){
		$query = "SELECT * from makanan as m join keranjang as k WHERE k.id_makanan = m.id_makanan AND k.no_id = ?";
		$result = $this->db->query($query, array($id))->result_array();
		return $result;
	}

	function getCartMinuman($id){
		$query = "SELECT * from minuman as m join keranjang as k WHERE k.id_minuman = m.id_minuman AND k.no_id = ?";
		$result = $this->db->query($query, array($id))->result_array();
		return $result;
	}

	function getEditMakanan($id,$id_user){
		$query = "SELECT * from makanan as m join keranjang as k where k.id_makanan = m.id_makanan AND m.id_makanan = ? AND k.no_id = ?";
		$result = $this->db->query($query, array($id,$id_user))->result_array();
		return $result;
	}

	function getEditMinuman($id,$id_user){
		$query = "SELECT * from minuman as m join keranjang as k where k.id_minuman = m.id_minuman AND m.id_minuman = ? AND k.no_id = ?";
		$result = $this->db->query($query, array($id,$id_user))->result_array();
		return $result;
	}

	function getInvoice($id){
		$query = "SELECT id_invoice from keranjang where no_id = ? limit 1";
        $result = $this->db->query($query, array($id))->row_array();
		return $result;
	}

	function getIdPembelian($id){
		$query = "SELECT id_pembelian from keranjang where no_id = ?";
        $result = $this->db->query($query, array($id))->result_array();
		return $result;
	}

	function getHargaMakanan($id){
		$query = "SELECT sum(harga_makanan * quantity) as total_harga from makanan join keranjang 
				  where keranjang.id_makanan = makanan.id_makanan && keranjang.no_id = ?";
		$result = $this->db->query($query, array($id))->row_array();
		return $result;
	}

	function getHargaMinuman($id){
		$query = "SELECT sum(harga_minuman * quantity) as total_minuman from minuman join keranjang
				  where keranjang.id_minuman = minuman.id_minuman and keranjang.no_id = ?";
		$result = $this->db->query($query, array($id))->row_array();
		return $result;
	}

	public function insert_cart_pesanan($data){
		$this->db->insert($this->table,$data);
	}

	function update_data($user,$id,$data){
		$query = "UPDATE keranjang set quantity = ? where no_id = ? and id_makanan = ?";
		$result = $this->db->query($query, array($data,$user,$id));
	}

	function update_data2($user,$id,$data){
		$query = "UPDATE keranjang set quantity = ? where no_id = ? and id_minuman = ?";
		$result = $this->db->query($query, array($data,$user,$id));
	}
	public function delete_data($id){
		$this->db->delete($this->table, array($this->primary_key=>$id));
	}

}?>
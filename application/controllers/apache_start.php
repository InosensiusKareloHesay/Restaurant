<?php
class Belajar extends CI_Controller(

	public function ah(){
		echo "Yukkk";
	}
	
	public function uh(){
		echo "Ayukkk";
	}
	
	public function eh(){
		echo "Hayukkk";
	}
	
	public function index(){
		$this->ah();
		$this->uh();
		$this->eh();
	}
	
}
?>
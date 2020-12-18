 <?php
 class Kategori extends CI_Controller{
	function index()
	{
		$this->load->view("header");
		$this->load->view("kategori");
		$this->load->view("footer");
	}
 }
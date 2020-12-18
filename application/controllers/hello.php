<?php

class Hello extends CI_Controller
{
	function index() {
		$this->load->view('head');
		$this->load->view('home');
	}

	function guru() {
		$this->load->view('head');
		$this->load->view('guru');
	}

	function siswa() {
		$this->load->model('siswa_model');
		$data["ambil"] = $this->siswa_model->ambil();

		$this->load->view('head');
		$this->load->view('siswa', $data);
}
}

<?php if (!defined('BASEPATH')) exit('No direct script acces allowed');

/**
* 
*/
class Siswa extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model');
	}

	function index()
	{
		$this->data['siswa'] = $this->siswa_model->get_all();
		$this->load->view('siswa', $this->data);
	}
	
}
?>
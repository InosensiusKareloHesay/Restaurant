 <?php
 class Home extends CI_Controller{
	function index()
	{
		$data['show'] = $this->show_model->get_show();
		
		$this->load->view("header");
		$this->load->view("main",$data);
		$this->load->view("footer");
	}
 }
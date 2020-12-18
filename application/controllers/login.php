<?php
class login extends CI_Controller{

    public function index(){
        $this->load->view('header_login');
        $this->load->view('main_login');
        $this->load->view('footer_home');
    }

    public function do_login()
	{
		$this->load->model('model_login');
		$user = $this->session->userdata('name');
		$user_id = $this->model_login->get_id($this->input->post('username'));

		 if($this->model_login->login($this->input->post('username'), $this->input->post('password'))==TRUE){
		 	$this->session->set_userdata("id", $user_id);
		 	$this->session->set_userdata("name", $this->input->post('username'));
		 	$this->session->set_userdata("login", TRUE);
		 	echo "<script>  
		 			window.location.href='".base_url('/')."';
		 			alert('Login Success!');
                 </script>";
		 }else{
		 	echo "<script>
                    window.location.href='".base_url('login')."';
                    alert('Login Failed, Wrong Username or Password');
                 </script>";
		 }
 	}
 	public function do_logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
?>
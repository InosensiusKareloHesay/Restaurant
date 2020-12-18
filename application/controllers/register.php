<?php
class register extends CI_Controller{

    public function index(){
        $this->load->view('header_register');
        $this->load->view('main_register');
        $this->load->view('footer_home');
    }

    public function do_register(){
			//$no_id=$this->input->post('id_tiket');
			$nama=$this->input->post('name');
        	$email=$this->input->post('email');
			$phone=$this->input->post('phone');
			$user_id=$this->input->post('userid');
			$password=$this->input->post('password');
		
			$data=array(
			       'nama'=>$nama,
			       'email'=>$email,
			       'phone'=>$phone,
			       'user_id'=>$user_id,
			       'password'=>$password	
			);
			
			$this->model_register->register($data);
			echo "<script>
                    window.location.href='".base_url('login')."';
                    alert('Register success!');
                 </script>";
	}
}
?>
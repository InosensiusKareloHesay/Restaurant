<?php
class profile extends CI_Controller{

    public function index(){
        $this->load->view('header_profile');
        $this->load->view('main_profile');
        $this->load->view('footer_home');
    }

    public function edit_profile($id){
    	$data['edit'] = $this->user_model->get_user($id);
    	$this->load->view('header_profile');
        $this->load->view('main_profile', $data);
        $this->load->view('footer_home');
    }

    public function edit(){
    		$id=$this->uri->segment(3);
    		$name=$this->input->post('name');
			$email=$this->input->post('email');
        	$phone=$this->input->post('phone');
			$password=$this->input->post('password');
	
		$data=array(
			   'no_id'=>$id,
		       'nama'=>$name,
		       'email'=>$email,
		       'phone'=>$phone,
		       'password'=>$password	
		);

		$this->user_model->update($id,$data);
		redirect(base_url('/awal'));
    }
}
?>
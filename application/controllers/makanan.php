<?php
class makanan extends CI_Controller{

    public function index(){
        $this->load->view('header_makanan');
        $this->load->view('main_makanan');
        $this->load->view('footer_home');
    }
}
?>
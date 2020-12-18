<?php
class pilihan extends CI_Controller{

    public function index(){
        $this->load->view('header_pilihan');
        $this->load->view('main_pilihan');
        $this->load->view('footer_home');
    }
}
?>
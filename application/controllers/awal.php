<?php
class awal extends CI_Controller{
    public function index(){
        $this->load->view('header_home');
        $this->load->view('main_home');
        $this->load->view('footer_home');
    }
}
?>
<?php
class minuman extends CI_Controller{

    public function index(){
        $this->load->view('header_minuman');
        $this->load->view('main_minuman');
        $this->load->view('footer_home');
    }
}
?>
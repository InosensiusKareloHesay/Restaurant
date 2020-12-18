<?php
class contact extends CI_Controller{

    public function index(){
        $this->load->view('header_contact');
        $this->load->view('main_contact');
        $this->load->view('footer_home');
    }
}
?>
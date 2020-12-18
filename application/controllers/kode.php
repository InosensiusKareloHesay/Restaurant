<?php
class kode extends CI_Controller{

    public function index(){
    	$id = $this->session->userdata('id');
    	$data['harga'] = $this->model_cart->getHargaMakanan($id);
        $data['hargaminuman'] = $this->model_cart->getHargaMinuman($id);
        $this->load->view('header_contact');
        $this->load->view('kode_bayar',$data);
        $this->load->view('footer_home');
    }
}
?>
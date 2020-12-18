<?php
class cart extends CI_Controller{

    public function index(){
    	$id = $this->session->userdata('id');
    	$data['invoice'] = $this->model_cart->getInvoice($id);
        $data['param'] = $this->model_cart->getIdPembelian($id);
    	$data['harga'] = $this->model_cart->getHargaMakanan($id);
        $data['hargaminuman'] = $this->model_cart->getHargaMinuman($id);
    	$data['coba'] = $this->model_cart->getCartMinuman($id);
    	$data['test'] = $this->model_cart->getCartMakanan($id);
        $this->load->view('header_cart');
        $this->load->view('main_cart',$data);
        $this->load->view('footer_home');
    }

    public function edit_data($id_data){
        $this->load->view('header_cart');
        $this->load->view('edit_cart',$id_data);
        $this->load->view('footer_home');
    }

    public function edit_data2($id_data){
        $this->load->view('header_cart');
        $this->load->view('edit_cart2',$id_data);
        $this->load->view('footer_home');
    }

    public function delete_data($id_data){
        $this->model_cart->delete_data($id_data);
        redirect(base_url('/cart'));
    }
    
}
?>
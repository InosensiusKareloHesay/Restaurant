<?php
class editcart extends CI_Controller{

    public function index(){
    	$id = $this->uri->segment(3);
    	//$data['invoice'] = $this->model_cart->getInvoice($id);
        //$data['param'] = $this->model_cart->getIdPembelian($id);
    	//$data['harga'] = $this->model_cart->getHargaMakanan($id);
        //$data['hargaminuman'] = $this->model_cart->getHargaMinuman($id);
    	//$data['coba'] = $this->model_cart->getCartMinuman($id);
    	$data['test'] = $this->model_cart->getCartMakanan($id);
        $this->load->view('header_cart');
        $this->load->view('edit_cart',$data);
        $this->load->view('footer_home');
    }

    public function edit_data(){
        $user = $this->session->userdata('id');
        $id = $this->uri->segment(3);
        $data['test'] = $this->model_cart->getEditMakanan($id,$user);
        $this->load->view('header_cart');
        $this->load->view('edit_cart',$data);
        $this->load->view('footer_home');
    }

    public function edit_data2(){
        $user = $this->session->userdata('id');
        $id = $this->uri->segment(3);
        $data['test'] = $this->model_cart->getEditMinuman($id,$user);
        $this->load->view('header_cart');
        $this->load->view('edit_cart2',$data);
        $this->load->view('footer_home');
    }

    public function update($id){
            $user = $this->session->userdata('id');
            $qty=$this->input->post('qty');

            $data=array(
               'quantity'=>$qty  
            );

        $this->model_cart->update_data($user,$id,$data);
        redirect(base_url('/cart'));    
    }

    public function update2($id){
            $user = $this->session->userdata('id');
            $qty=$this->input->post('qty');

            $data=array(
               'quantity'=>$qty  
            );

        $this->model_cart->update_data2($user,$id,$data);
        redirect(base_url('/cart'));    
    }

    public function delete_data($id_data){
        $this->model_cart->delete_data($id_data);
        redirect(base_url('/cart'));
    }
    
}
?>
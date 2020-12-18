<?php
class makanminum extends CI_Controller{

    public function index(){
        $this->load->view('header_makanminum');
        $this->load->view('main_makanminum');
        $this->load->view('footer_home');
    }

    public function getMakanMinum($resto_id){
    	$data['row']=$this->model_restaurant->by_id($resto_id);
        $data['arr']=$this->model_restaurant->by_id2($resto_id);
        $data['name']=$this->model_restaurant->getNamaRestaurant($resto_id);
        $this->load->view('header_makanminum');
        $this->load->view('main_makanminum', $data);
        $this->load->view('footer_home');
    }

    public function buy_makanan(){
            $no_id=$this->input->post('id_user');
            $resto_id=$this->uri->segment(3);
            $id_makanan=$this->input->post('id_makanan');
            $qty=$this->input->post('qty');
            $id_invoice=$no_id.$resto_id."ABC";

        
            $data=array(
                   'no_id'=>$no_id,
                   'resto_id'=>$resto_id,
                   'id_makanan'=>$id_makanan,
                   'quantity'=>$qty,
                   'id_invoice'=>$id_invoice
            );

            $this->model_cart->insert_cart_pesanan($data);
            echo "<script>  
                    window.location.href='".base_url('/restaurant')."';
                    alert('Menambah Pesanan Success!');
                 </script>";
            redirect(base_url('/restaurant/'));
    }

    public function buy_minuman(){
            $no_id=$this->input->post('id_user');
            $resto_id=$this->uri->segment(3);
            $id_minuman=$this->input->post('id_minuman');
            $qty=$this->input->post('qty');
            $id_invoice=$no_id.$resto_id."ABC";

        
            $data=array(
                   'no_id'=>$no_id,
                   'resto_id'=>$resto_id,
                   'id_minuman'=>$id_minuman,
                   'quantity'=>$qty,
                   'id_invoice'=>$id_invoice
            );

            $this->model_cart->insert_cart_pesanan($data);
            echo "<script>  
                    window.location.href='".base_url('/restaurant/')."';
                    alert('Menambah Pesanan Success!');
                 </script>";
            redirect(base_url('/restaurant/'));
    }
}
?>
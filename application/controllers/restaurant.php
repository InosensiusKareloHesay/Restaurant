<?php
class restaurant extends CI_Controller{

    public function index(){
    	$data['get'] = $this->model_restaurant->getRestaurant();

        $this->load->view('header_restaurant');
        $this->load->view('main_restaurant',$data);
        $this->load->view('footer_home');
    }
}
?>
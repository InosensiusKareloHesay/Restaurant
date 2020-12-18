<?php
class cguru extends CI_Controller{
function __construct(){
	parent::__construct();
	$this->load->model('mguru');
}
function index()
{
	$data['title']='Testing';
	$data['datainduk']=$this->mguru->selectAll();
	$this->load->view('guru',$data);
	}
}
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


<?php 
defiend('BASEPATH') or exit ('no direct script access allowed');

class web extends CI_controller{

	function_construct(){
		parent::_construct();

}

public function index(){
	$data{'judul'} = "Halaman Depan";
	$this->load->view('v_header',$data);
	$this->load->view('v_index',$data);
	$this->load->('v_footer',$data);

}

}
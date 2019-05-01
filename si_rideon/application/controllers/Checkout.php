<?php

class Checkout extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Sepeda_model');
	}
	
	public function index(){
		$data['title'] = 'Checkout';
		$data['cart'] = $this->Sepeda_model->getallcart($this->session->userdata('username_or_email'));
		$this->load->view('templates/header', $data);
		$this->load->view('bikes/checkout');
		$this->load->view('templates/footer');
	}
}
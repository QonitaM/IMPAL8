<?php

class Bikes extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Sepeda_model');
	}
	
	public function index($kategori){
		$data['title'] = $kategori;
		$data['kategori'] = $kategori;
		$data['sepeda'] = $this->Sepeda_model->getByKategori($kategori);
		$this->load->view('templates/header', $data);
		$this->load->view('bikes/index');
		$this->load->view('templates/footer');

	}
}
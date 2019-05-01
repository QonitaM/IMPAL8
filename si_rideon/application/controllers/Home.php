<?php

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index(){
		$data['title'] = 'Official Site - Polygon Bikes';
		$this->load->view('templates/header', $data);
		$this->load->view('home/home');
		$this->load->view('templates/footer');
	}

	public function viewlogin(){
		$data['title'] = 'My Account - Polygon Bikes';
		$this->load->view('templates/header', $data);
		$this->load->view('home/index');
		$this->load->view('templates/footer');	}

	public function viewReview(){
		$data['title'] = 'Review Sepeda';
		$this->load->view('templates/header', $data);
		$this->load->view('home/review');
		$this->load->view('templates/footer');
	}

	public function viewsepeda($nama){
	//	$content['data']=$this->Sepeda_model->getonesepeda();
		$this->load->model('Sepeda_model');
		$content['sepeda'] = $this->Sepeda_model->getonesepeda(urldecode($nama));
		$data['title'] = 'Junior Bikes - Polygon Bikes';
		$this->load->view('templates/header', $data);
		$this->load->view('home/viewsepeda',$content);
		$this->load->view('templates/footer');	
	}
	public function viewprofile(){

			$data['title'] = 'My Account - Polygon Bikes';
			$this->load->view('templates/header', $data);
			$this->load->view('home/profile');
			$this->load->view('templates/footer');
	}
	public function viewprofile_address(){
		$this->load->model('User_model');
			$data['title'] = 'My Account - Polygon Bikes';
			$data['user']=$this->User_model->getuser($this->session->userdata('username_or_email'));
			$this->load->view('templates/header', $data);
			$this->load->view('home/profile-address',$data);
			$this->load->view('templates/footer');
	}

	public function viewprofile_detail(){
			$this->load->model('User_model');
			$data['title'] = 'My Account - Polygon Bikes';
			$data['user']=$this->User_model->getuser($this->session->userdata('username_or_email'));
			$this->load->view('templates/header', $data);
			$this->load->view('home/profile-detail',$data);
			$this->load->view('templates/footer');
	}
	public function updateprofile(){
		$this->load->model('User_model');
		$data=$this->User_model->getuser($this->session->userdata('username_or_email'));
		foreach ($data as $key) {
			$pass=$key->password;
		}
		$content = array(
			'email'=>$this->input->post('email'),
			'firstname'=>$this->input->post('firstname'),
			'lastname'=>$this->input->post('lastname'),
			'username'=>$this->input->post('displayname'),
			'password'=>$pass
		);
		if($this->input->post('curpass')!='' ){
			if($this->input->post('curpass')==$pass){
				if($this->input->post('newpass')!='' && $this->input->post('newpass')==$this->input->post('confirmnewpass')){
					$content['password']=$this->input->post('newpass');
					$this->User_model->update($content);
					echo "<script type='text/javascript'> alert('Success update profile') </script>";
					$this->viewprofile_detail();
				}else echo "<script type='text/javascript'> alert('password baru tidak valid') </script>";

			}else echo "<script type='text/javascript'> alert('password salah') </script>";

		}else{
			$this->User_model->update($content);
			echo "<script type='text/javascript'> alert('Success update profile') </script>";
			$this->viewprofile_detail();
		}
	}
	public function login(){

		$this->form_validation->set_rules('username_or_email', 'username_or_email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if($this->form_validation->run() == FALSE){
			redirect(base_url());
		}else if($this->User_model->validate($this->input->post('username_or_email'), $this->input->post('password')) == TRUE){
			$this->session->set_userdata('username_or_email', $this->input->post('username_or_email'));
			$this->viewprofile();
		}else{
			redirect(base_url());
		}
	
	}
	
	public function viewprofile_orders(){
		$data['title'] = 'My Account - Polygon Bikes';
			$this->load->view('templates/header', $data);
			$this->load->view('home/profile-orders');
			$this->load->view('templates/footer');
	}
		public function viewprofile_downloads(){
		$data['title'] = 'My Account - Polygon Bikes';
			$this->load->view('templates/header', $data);
			$this->load->view('home/profile-downloads');
			$this->load->view('templates/footer');
	}

	public function viewcart(){
		$this->load->model('Sepeda_model');

		$content['sepeda'] = $this->Sepeda_model->getallcart($this->session->userdata('username_or_email'));

		$data['title'] = 'Cart - Polygon Bikes';
		$this->load->view('templates/header', $data);
		$this->load->view('home/cart',$content);
		$this->load->view('templates/footer');	
	}
	public function updatecart($idcart){
		$this->load->model('Sepeda_model');
			$dummy = $this->Sepeda_model->getallcart($this->session->userdata('username_or_email'));
		foreach($dummy as $dmy){
#			if($this->input->post('jumlah'.$dmy->id_cart)!=NULL){
				$this->Sepeda_model->updatecart($this->input->post('jumlah'.$dmy->id_cart),$this->input->post('n'.$dmy->id_cart));
#			}
		}
		redirect(base_url().'Home/viewcart/');

	}
	public function deletecart($id_cart){
		$this->load->model('Sepeda_model');
		$this->Sepeda_model->deletecart($id_cart);

		redirect(base_url().'Home/viewcart');
	}
	public function addtocart($idsepeda){
		
		echo "<script type='text/javascript'> alert('Success add to cart') </script>";

		$this->load->model('Sepeda_model');
		$data=array(
			'email'=>$this->session->userdata('username_or_email'),
			'id_sepeda'=>$idsepeda,
			'jumlah'=>1
		);
		$this->Sepeda_model->insertcart($data);
		redirect(base_url().'Home/viewcart');
	}

	public function register(){

		$this->form_validation->set_rules('email', 'email', 'required|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'password', 'required');

		if($this->form_validation->run() == FALSE){
			redirect(base_url());
		}else{
			$data = [
				"email" =>$this->input->post('email', TRUE),
				"password" =>$this->input->post('password', TRUE),
			];

			$this->User_model->insert($data);
			redirect(base_url().'Home/viewlogin');
		}
	}
	public function viewsejarah(){
		$data['title'] = 'Sejarah - Polygon Bikes';
		$this->load->view('templates/header', $data);
		$this->load->view('home/sejarah');
		$this->load->view('templates/footer');		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'/Home/viewlogin');
	}
	public function deleteakun(){
		$email=$this->session->userdata('username_or_email');
		$this->User_model->delete($email);
		$this->session->sess_destroy();
		redirect(base_url().'/Home/viewlogin');
	}
	

}

?>
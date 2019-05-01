<?php

class Sepeda_model extends CI_model{

	public function getAll(){
		return $this->db->get('sepeda')->result_array();
	}

	public function getByKategori($kategori){
		$this->db->where('kategori', $kategori);
		return $this->db->get('sepeda')->result_array();
	}

	public function getallcart($email){
		$query = $this->db->query("SELECT sepeda.id_sepeda,sepeda.nama,sepeda.color,sepeda.harga,sepeda.size,cart.jumlah,cart.id_cart FROM sepeda join cart using(id_sepeda) where cart.email='$email';");
		return $query->result();
	}

	public function getonesepeda($nama){
		$query = $this->db->query("SELECT * from sepeda where nama='$nama';");
		return $query->result();
	}

	public function getSepedaById($id){
		$query = $this->db->query("SELECT * from sepeda where id='$id';");
		return $query->result_array();
	}

	public function insertcart($data){
		$this->db->insert('cart', $data);
	}
	public function deletecart($id_cart){
		$this->db->where('id_cart',$id_cart);
		$this->db->delete('cart');
	}
	public function updatecart($data,$idcart){
			$this->db->query("UPDATE cart SET jumlah = '$data' WHERE id_cart = '$idcart';");
	}

	

}

?>
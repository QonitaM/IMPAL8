<?php

class User_model extends CI_model{

	public function getAll(){
		return $this->db->get('user')->result_array();
	}

	public function insert($data){
		$this->db->insert('user', $data);
	}
	public function delete($email){
		$this->db->where('email',$email);
		$this->db->delete('user');
	}
	public function update($data){
		$this->db->query("UPDATE `user` SET `email` = '{$data['email']}', `firstname` = '{$data['firstname']}', `lastname` = '{$data['lastname']}', `username` = '{$data['username']}', `password` = '{$data['password']}' WHERE `user`.`email` = '{$data['email']}';");

	}
	public function getuser($email){
		$this->db->where('email',$email);
		return $this->db->get('user')->result();
	}

	public function validate($username_or_email, $password){
		$valid = FALSE;

		foreach ($this->getAll() as $user) {
			if((strcmp($user['username'], $username_or_email) == 0 || strcmp($user['email'], $username_or_email) == 0) && strcmp($user['password'], $password) == 0){
				$valid = TRUE;
				break;
			}
		}

		return $valid;
	}

}

?>
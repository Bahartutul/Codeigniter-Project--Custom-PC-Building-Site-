<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admindb extends CI_MODEL {

	public function checkUser($user, $pass){

		$this->load->database();
		$sql = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
		$result = $this->db->query($sql);
		if($result->row_array()){
			 $this->session->set_userdata('username', $user);
        	 $this->session->set_userdata('password', $pass);
  
		}
		return $result->row_array(); 
	}
	
}
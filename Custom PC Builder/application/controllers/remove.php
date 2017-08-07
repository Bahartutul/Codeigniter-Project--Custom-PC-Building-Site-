<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Remove extends CI_Controller {

	public function cpu(){
		$this->session->unset_userdata('cpu');
		$this->session->unset_userdata('cprice');
		$this->session->unset_userdata('cshop');
		//$this->session->sess_destroy();
		$this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');
	}

		public function mobo(){
		$this->session->unset_userdata('motherboard');
		$this->session->unset_userdata('mprice');
		$this->session->unset_userdata('mshop');
		//$this->session->sess_destroy();
		$this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');
	}

	public function ram(){
		$this->session->unset_userdata('memory');
		$this->session->unset_userdata('rprice');
		$this->session->unset_userdata('rshop');
		//$this->session->sess_destroy();
		$this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');
	}


	public function hdd(){
		$this->session->unset_userdata('storage');
		$this->session->unset_userdata('sprice');
		$this->session->unset_userdata('sshop');
		//$this->session->sess_destroy();
		$this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');
	}

	public function gpu(){
		$this->session->unset_userdata('gpu');
		$this->session->unset_userdata('gprice');
		$this->session->unset_userdata('gshop');
		//$this->session->sess_destroy();
		$this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');
	}


	public function psu(){
		$this->session->unset_userdata('psu');
		$this->session->unset_userdata('pprice');
		$this->session->unset_userdata('pshop');
		//$this->session->sess_destroy();
		$this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');
	}

	public function dvd(){
		$this->session->unset_userdata('dvd');
		$this->session->unset_userdata('dprice');
		$this->session->unset_userdata('dshop');
		//$this->session->sess_destroy();
		$this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');
	}

	public function mouse(){
		$this->session->unset_userdata('mouse');
		$this->session->unset_userdata('msprice');
		$this->session->unset_userdata('msshop');
		//$this->session->sess_destroy();
		$this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');
	}

	public function key(){
		$this->session->unset_userdata('key');
		$this->session->unset_userdata('kprice');
		$this->session->unset_userdata('kshop');
		//$this->session->sess_destroy();
		$this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');
	}

	public function casing(){
		$this->session->unset_userdata('casing');
		$this->session->unset_userdata('caprice');
		$this->session->unset_userdata('cashop');
		//$this->session->sess_destroy();
		$this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');
	}

	



}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Login extends CI_Controller{

		public function __construct()
		{
		parent::__construct();
		$this->load->model('admindb');
		$this->load->library('parser');
		}


		public function index(){
             
			$username =$this->session->userdata('username');
			 $password =$this->session->userdata('password');

			if($username==true && $password==true){

				$this->load->helper('url');
				redirect('http://localhost/ATP3/admin', 'refresh');

			}

			if(! $this->input->get_post('loginButton')){

					$this->parser->parse('login_view', array());

					return;
			}

			$user = $this->input->get_post('username');
			$pass = $this->input->get_post('password');

			$result = $this->admindb->checkUser($user, $pass);

			if($result){
				$this->load->helper('url');
				redirect('http://localhost/ATP3/admin', 'refresh');
			}
			
         
			else{
				
				$this->load->library('form_validation');
			 
			 $data['message']="";
			
			 if($this->form_validation->run('login')==false)
			 {
				 $data['message']=validation_errors(); 
				  $this->parser->parse('login_view',$data);
				 return;
			 }
			}

		}
	}

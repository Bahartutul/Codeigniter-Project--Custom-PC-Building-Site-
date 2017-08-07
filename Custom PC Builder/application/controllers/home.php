<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dbmodel');
		$this->load->library('parser');
	}

	
	public function index()
	{
	
		

		$value['cpu'] = $this->session->userdata('cpu');
		$value['cprice'] = $this->session->userdata('cprice');
		$value['cshop'] = $this->session->userdata('cshop');

		$value['motherboard'] = $this->session->userdata('motherboard');
		$value['mprice'] = $this->session->userdata('mprice');
		$value['mshop'] = $this->session->userdata('mshop');

		$value['storage'] = $this->session->userdata('storage');
		$value['sprice'] = $this->session->userdata('sprice');
		$value['sshop'] = $this->session->userdata('sshop');

		$value['memory'] = $this->session->userdata('memory');
		$value['rprice'] = $this->session->userdata('rprice');
		$value['rshop'] = $this->session->userdata('rshop');

		$value['gpu'] = $this->session->userdata('gpu');
		$value['gprice'] = $this->session->userdata('gprice');
		$value['gshop'] = $this->session->userdata('gshop');

		$value['psu'] = $this->session->userdata('psu');
		$value['pprice'] = $this->session->userdata('pprice');
		$value['pshop'] = $this->session->userdata('pshop');

		$value['dvd'] = $this->session->userdata('dvd');
		$value['dprice'] = $this->session->userdata('dprice');
		$value['dshop'] = $this->session->userdata('dshop');

		$value['casing'] = $this->session->userdata('capu');
		$value['caprice'] = $this->session->userdata('caprice');
		$value['cashop'] = $this->session->userdata('cashop');

		$value['mouse'] = $this->session->userdata('mouse');
		$value['msprice'] = $this->session->userdata('msprice');
		$value['msshop'] = $this->session->userdata('msshop');

		$value['key'] = $this->session->userdata('key');
		$value['kprice'] = $this->session->userdata('kprice');
		$value['kshop'] = $this->session->userdata('kshop');

		$this->parser->parse('index_view', $value);
	}


//---------------------------------------------------------------------------------------------------------------------------------------



	public function processor(){

		if($this->input->get_post('searchbtn') )
		{
			$data['name']="CPU";
		
			$search=$this->input->get_post('search');
			$data['product']=$this->dbmodel->searchProcessor($search);
			$this->parser->parse('product_list', $data);
			return;
		}


		if(! $this->input->get_post('btnAdd'))
		{
			$data['name']="CPU";
			$data['product'] = $this->dbmodel->getProcessor();
			$this->parser->parse('product_list', $data);

			return;
		}


		$data['name']="CPU";
		$data['product'] = $this->dbmodel->getProcessor();
		$this->parser->parse('product_list', $data);

		$cpu = $this->input->post('item');
        $cprice= $this->input->post('price');
        $cshop = $this->input->post('shop');

        $this->session->set_userdata('cpu', $cpu);
        $this->session->set_userdata('cprice', $cprice);
        $this->session->set_userdata('cshop', $cshop);

        $this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');

	}

 /* public function search()
  {
	  	if(! $this->input->get_post('searchbtn'))
		{
			$data['name']="CPU";
			$data['product'] = $this->dbmodel->getProcessor();
			$this->parser->parse('search_view', $data);

			return;
		}
		else
		{
		
		}


      

        
  }*/
	//---------------------------------------------------------------------------------------------------------------------------------------




	public function motherboard(){


		if($this->input->get_post('searchbtn') )
		{
			$data['name']="Motherboard";
		
			$search=$this->input->get_post('search');
			$data['product']=$this->dbmodel->searchMotherboard($search);
			$this->parser->parse('product_list', $data);
			return;
		}


		if(! $this->input->get_post('btnAdd'))
		{
			$data['name']="Motherboard";
			$data['product'] = $this->dbmodel->getMotherboard();
			$this->parser->parse('product_list', $data);

			return;
		}

		$data['name']="Motherboard";
		$data['product'] = $this->dbmodel->getMotherboard();
		$this->parser->parse('product_list', $data);

		$motherboard = $this->input->post('item');
        $mprice= $this->input->post('price');
        $mshop = $this->input->post('shop');

        $this->session->set_userdata('motherboard', $motherboard);
        $this->session->set_userdata('mprice', $mprice);
        $this->session->set_userdata('mshop', $mshop);

        $this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');

	}

	//------------------------------------------------------------------------------------------------------


	public function storage(){


		

		if($this->input->get_post('searchbtn') )
		{
			$data['name']="STORAGE";
		
			$search=$this->input->get_post('search');
			$data['product']=$this->dbmodel->searchStorage($search);
			$this->parser->parse('product_list', $data);
			return;
		}
		if(! $this->input->get_post('btnAdd'))
		{
			$data['name']="Storage";
			$data['product'] = $this->dbmodel->getStorage();
			$this->parser->parse('product_list', $data);

			return;
		}

		$data['name']="Storage";
		$data['product'] = $this->dbmodel->getStorage();
		$this->parser->parse('product_list', $data);

		$storage= $this->input->post('item');
        $sprice= $this->input->post('price');
        $sshop = $this->input->post('shop');

        $this->session->set_userdata('storage', $storage);
        $this->session->set_userdata('sprice', $sprice);
        $this->session->set_userdata('sshop', $sshop);

        $this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');

	}

	//----------------------------------------------------------------------------------------------------------


	public function memory(){


		if($this->input->get_post('searchbtn') )
		{
			$data['name']="Memory";
		
			$search=$this->input->get_post('search');
			$data['product']=$this->dbmodel->searchMemory($search);
			$this->parser->parse('product_list', $data);
			return;
		}
		if(! $this->input->get_post('btnAdd'))
		{
			$data['name']="Memory";
			$data['product'] = $this->dbmodel->getMemory();
			$this->parser->parse('product_list', $data);

			return;
		}

		$data['name']="Memory";
		$data['product'] = $this->dbmodel->getMemory();
		$this->parser->parse('product_list', $data);


		$memory= $this->input->post('item');
        $rprice= $this->input->post('price');
        $rshop = $this->input->post('shop');

        $this->session->set_userdata('memory', $memory);
        $this->session->set_userdata('rprice', $rprice);
        $this->session->set_userdata('rshop', $rshop);

        $this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');

	}

	//--------------------------------------------------------------------------------------------------------.

	public function gpu(){


		if($this->input->get_post('searchbtn') )
		{
			$data['name']="Gpu";
		
			$search=$this->input->get_post('search');
			$data['product']=$this->dbmodel->searchGpu($search);
			$this->parser->parse('product_list', $data);
			return;
		}
		if(! $this->input->get_post('btnAdd'))
		{
			$data['name']="Graphics Card";
			$data['product'] = $this->dbmodel->getGpu();
			$this->parser->parse('product_list', $data);

			return;
		}

		$data['name']="Graphics Card";
		$data['product'] = $this->dbmodel->getGpu();
		$this->parser->parse('product_list', $data);

		$gpu= $this->input->post('item');
        $gprice= $this->input->post('price');
        $gshop = $this->input->post('shop');

        $this->session->set_userdata('gpu', $gpu);
        $this->session->set_userdata('gprice', $gprice);
        $this->session->set_userdata('gshop', $gshop);

        $this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');

	}

	//---------------------------------------------------------------------------------------------------------


	public function psu(){


		if($this->input->get_post('searchbtn') )
		{
			$data['name']="Psu";
		
			$search=$this->input->get_post('search');
			$data['product']=$this->dbmodel->searchPsu($search);
			$this->parser->parse('product_list', $data);
			return;
		}
		if(! $this->input->get_post('btnAdd'))
		{
			$data['name']="Power Supply";
			$data['product'] = $this->dbmodel->getPsu();
			$this->parser->parse('product_list', $data);

			return;
		}

		$data['name']="Power Supply";
		$data['product'] = $this->dbmodel->getPsu();
		$this->parser->parse('product_list', $data);

		$psu= $this->input->post('item');
        $pprice= $this->input->post('price');
        $pshop = $this->input->post('shop');

        $this->session->set_userdata('psu', $psu);
        $this->session->set_userdata('pprice', $pprice);
        $this->session->set_userdata('pshop', $pshop);

        $this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');

	}

	//-------------------------------------------------------------------------------------------------------------------
	public function optical(){


		if($this->input->get_post('searchbtn') )
		{
			$data['name']="Optical";
		
			$search=$this->input->get_post('search');
			$data['product']=$this->dbmodel->searchOptical($search);
			$this->parser->parse('product_list', $data);
			return;
		}
		if(! $this->input->get_post('btnAdd'))
		{
			$data['name']="Optical Drive";
			$data['product'] = $this->dbmodel->getOptical();
			$this->parser->parse('product_list', $data);

			return;
		}

		$data['name']="Optical Drive";
		$data['product'] = $this->dbmodel->getOptical();
		$this->parser->parse('product_list', $data);


		$dvd= $this->input->post('item');
        $dprice= $this->input->post('price');
        $dshop = $this->input->post('shop');

        $this->session->set_userdata('dvd', $dvd);
        $this->session->set_userdata('dprice', $dprice);
        $this->session->set_userdata('dshop', $dshop);

        $this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');

	}


//-------------------------------------------------------------------------------------------------------------------
	public function casing(){


		if($this->input->get_post('searchbtn') )
		{
			$data['name']="Casing";
		
			$search=$this->input->get_post('search');
			$data['product']=$this->dbmodel->searchCasing($search);
			$this->parser->parse('product_list', $data);
			return;
		}
		if(! $this->input->get_post('btnAdd'))
		{
			$data['name']="Casing";
			$data['product'] = $this->dbmodel->getCasing();
			$this->parser->parse('product_list', $data);

			return;
		}

		$data['name']="Casing";
		$data['product'] = $this->dbmodel->getCasing();
		$this->parser->parse('product_list', $data);
		
		


		$casing= $this->input->post('item');
        $caprice= $this->input->post('price');
        $cashop = $this->input->post('shop');

        $this->session->set_userdata('casing', $casing);
        $this->session->set_userdata('caprice', $caprice);
        $this->session->set_userdata('cashop', $cashop);

        $this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');

	}


	//-------------------------------------------------------------------------------------------------------------------
	public function mouse(){


		if($this->input->get_post('searchbtn') )
		{
			$data['name']="Mouse";
		
			$search=$this->input->get_post('search');
			$data['product']=$this->dbmodel->searchMouse($search);
			$this->parser->parse('product_list', $data);
			return;
		}
		if(! $this->input->get_post('btnAdd'))
		{
			$data['name']="Mouse";
			$data['product'] = $this->dbmodel->getMouse();
			$this->parser->parse('product_list', $data);

			return;
		}
			$data['name']="Mouse";
			$data['product'] = $this->dbmodel->getMouse();
			$this->parser->parse('product_list', $data);

		$mouse= $this->input->post('item');
        $msprice= $this->input->post('price');
        $msshop = $this->input->post('shop');

        $this->session->set_userdata('mouse', $mouse);
        $this->session->set_userdata('msprice', $msprice);
        $this->session->set_userdata('msshop', $msshop);

        $this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');

	}

	//-------------------------------------------------------------------------------------------------------------------
	public function keyboard(){


		if($this->input->get_post('searchbtn') )
		{
			$data['name']="Keyboard";
		
			$search=$this->input->get_post('search');
			$data['product']=$this->dbmodel->searchKeyboard($search);
			$this->parser->parse('product_list', $data);
			return;
		}
		if(! $this->input->get_post('btnAdd'))
		{
			$data['name']="Keyboard";
			$data['product'] = $this->dbmodel->getKeyboard();
			$this->parser->parse('product_list', $data);

			return;
		}

		$data['name']="Keyboard";
		$data['product'] = $this->dbmodel->getKeyboard();
		$this->parser->parse('product_list', $data);


		$key= $this->input->post('item');
        $kprice= $this->input->post('price');
        $kshop = $this->input->post('shop');

        $this->session->set_userdata('key', $key);
        $this->session->set_userdata('kprice', $kprice);
        $this->session->set_userdata('kshop', $kshop);

        $this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');

	}

	public function Remove(){

		$this->session->unset_userdata('cpu');
		$this->session->unset_userdata('cprice');
		$this->session->unset_userdata('cshop');
		//$this->session->sess_destroy();
		$this->load->helper('url');
		redirect('http://localhost/ATP3/', 'refresh');
	}
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dbmodel');
		$this->load->library('parser');
		$this->load->helper('url');
		$this->load->library('form_validation');
		
	}

	
	public function index()
	{
		$this->parser->parse('admin_view', array());
	}

	///-------------------------- ADD Processor----------------------------------------------------

	public function addProcessor(){
		  
		 	$data['message']='';
		  
		  if(!$this->input->get_post('addButton'))
		  {
			
			$data['name'] = "CPU";
			$data['product'] = $this->dbmodel->getProcessor();
			$this->parser->parse('addproduct_view', $data);
			return;
		  }
		  if($this->form_validation->run('addProcessor')==false)
		{
			$data['message']=validation_errors();
			$data['name'] = "CPU";
		    $data['product'] = $this->dbmodel->getProcessor();
			$this->parser->parse('addproduct_view', $data);
			return;
		}
	


            $pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
       		$pro['details'] = $this->input->post('details');
        	$this->dbmodel->addProcessor($pro);
			$this->load->helper('url');
		redirect('http://localhost/ATP3/admin/addProcessor','refresh');

		

	}


	///-------------------------- Update Processor----------------------------------------------------


	public function updateProcessor(){

		$data['message']='';
		if($this->input->get_post('confirm')){	
		
			$pro['id']= $this->input->post('id');
			$pro['name'] = "cpu";
			$pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
        	$pro['details'] = $this->input->post('details');

        	 if($this->form_validation->run('addProcessor')==false){
			$pro['message']=validation_errors();
			$this->parser->parse('update_confirm', $pro);
			return;
		}
        	
       		$this->dbmodel->updateProcessor($pro);
			redirect('http://localhost/ATP3/admin/updateProcessor', 'refresh');
		}


		if(!$this->input->get_post('btnUpdate')){
		$data['name'] = "CPU";
		$data['product'] = $this->dbmodel->getProcessor();
		$this->parser->parse('update_view', $data);
		return;
	}

		$pro['name'] = "CPU";
		$pro['item'] = $this->input->get_post('item');
        $pro['price']= $this->input->get_post('price');
        $pro['shop'] = $this->input->get_post('shop');
        $pro['details'] = $this->input->post('details');
       	$pro['id']= $this->input->post('id');
		$this->parser->parse('update_confirm', $pro);
        
	}



	///-------------------------- Remove Processor----------------------------------------------------


	public function removeProcessor(){

		if($this->input->get_post('confirm')){	
      			
				$rid =$this->input->get_post('id');
				$this->dbmodel->removeProcessor($rid);
		}
		

		if(!$this->input->get_post('btnRemove')){
			$data['name'] = "CPU";
			$data['product'] = $this->dbmodel->getProcessor();
			$this->parser->parse('remove_view', $data);
			return;
		}

		$remove['item'] = $this->input->get_post('item');
        $remove['price']= $this->input->get_post('price');
        $remove['shop'] = $this->input->get_post('shop');
        $remove['details'] = $this->input->post('details');
        $remove['id']= $this->input->get_post('id');
        $remove['name']="CPU";
        $remove['type']="Processor";

		$this->parser->parse('confirm_view', $remove);
		
		
        
	}




	///-------------------------- Add Motherboard----------------------------------------------------
	public function addMotherboard(){
		  
		  $data['message']='';
		  
		  if(!$this->input->get_post('addButton'))
		  {		
			  	$data['name'] = "Motherboard";
				$data['product'] = $this->dbmodel->getMotherboard();
				$this->parser->parse('addproduct_view', $data);
			  	return;
		  }

		  if($this->form_validation->run('addProcessor')==false)
		{
			$data['message']=validation_errors();
			$data['name'] = "Motherboard";
		    $data['product'] = $this->dbmodel->getMotherboard();
			$this->parser->parse('addproduct_view', $data);
			return;
		}
	
            $pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
       		$pro['details'] = $this->input->post('details');
        	$this->dbmodel->addMotherboard($pro);
			$this->load->helper('url');
			redirect('http://localhost/ATP3/admin/addMotherboard','refresh');

		

	}
	


	///--------------------------Update Motherboard----------------------------------------------------


	public function updateMotherboard(){

		$data['message']='';
		if($this->input->get_post('confirm')){	
		
			$pro['id']= $this->input->post('id');
			$pro['name'] = "Motherboard";
			$pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
        	$pro['details'] = $this->input->post('details');

        	 if($this->form_validation->run('addProcessor')==false)
		{
			$pro['message']=validation_errors();
			$this->parser->parse('update_confirm', $pro);
			return;
		}
        	
       		$this->dbmodel->updateMotherboard($pro);
			redirect('http://localhost/ATP3/admin/updateMotherboard', 'refresh');
		}


		if(!$this->input->get_post('btnUpdate')){
		$data['name'] = "Motherboard";
		$data['product'] = $this->dbmodel->getMotherboard();
		$this->parser->parse('update_view', $data);
		return;
	}

		$pro['name'] = "Motherboard";
		$pro['item'] = $this->input->get_post('item');
        $pro['price']= $this->input->get_post('price');
        $pro['shop'] = $this->input->get_post('shop');
        $pro['details'] = $this->input->post('details');
       	$pro['id']= $this->input->post('id');
		$this->parser->parse('update_confirm', $pro);
        
	}



	///-------------------------- Remove Motherboard----------------------------------------------------


	public function removeMotherboard(){

		if($this->input->get_post('confirm')){	
      			
				$rid =$this->input->get_post('id');
				$this->dbmodel->removeMotherboard($rid);
		}
		

		if(!$this->input->get_post('btnRemove')){
			$data['name'] = "Motherboard";
			$data['product'] = $this->dbmodel->getMotherboard();
			$this->parser->parse('remove_view', $data);
			return;
		}

		$remove['item'] = $this->input->get_post('item');
        $remove['price']= $this->input->get_post('price');
        $remove['shop'] = $this->input->get_post('shop');
        $remove['details'] = $this->input->post('details');
        $remove['id']= $this->input->get_post('id');
        $remove['name']="Motherboard";
        $remove['type']="Motherboard";

		$this->parser->parse('confirm_view', $remove);
		
		
        
	}



///-------------------------- Add Memory----------------------------------------------------

public function addMemory(){
          $this->load->library('form_validation');
		  
		  $data['message']='';
		  
		  if(!$this->input->get_post('addButton'))
		  {
			
			  $data['name'] = "Memory";
		$data['product'] = $this->dbmodel->getMemory();
		$this->parser->parse('addproduct_view', $data);
			  return;
		  }
		  if($this->form_validation->run('addProcessor')==false)
		{
			$data['message']=validation_errors();
			$data['name'] = "Memory";
		    $data['product'] = $this->dbmodel->getMemory();
			$this->parser->parse('addproduct_view', $data);
			return;
		}
	


            $pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
       		$pro['details'] = $this->input->post('details');
        	$this->dbmodel->addMemory($pro);
			$this->load->helper('url');
		redirect('http://localhost/ATP3/admin/addMemory','refresh');

		

	}
/*	public function addMemory(){

		
		if($this->input->get_post('addButton')){
			$pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
       		$pro['details'] = $this->input->post('details');
        	$this->dbmodel->addMemory($pro);
		}

		$data['name'] = "Memory";
		$data['product'] = $this->dbmodel->getMemory();
		$this->parser->parse('addproduct_view', $data);

	}*/


	///--------------------------Update Memory----------------------------------------------------


	public function updateMemory(){
		$data['message']='';
		if($this->input->get_post('confirm')){	
		
			$pro['id']= $this->input->post('id');
			$pro['name'] = "Memory";
			$pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
        	$pro['details'] = $this->input->post('details');

        	 if($this->form_validation->run('addProcessor')==false){
			$pro['message']=validation_errors();
			$this->parser->parse('update_confirm', $pro);
			return;
		}
        	
       		$this->dbmodel->updateMemory($pro);
			redirect('http://localhost/ATP3/admin/updateMemory', 'refresh');
		}


		if(!$this->input->get_post('btnUpdate')){
		$data['name'] = "Memory";
		$data['product'] = $this->dbmodel->getMemory();
		$this->parser->parse('update_view', $data);
		return;
	}

		$pro['name'] = "Memory";
		$pro['item'] = $this->input->get_post('item');
        $pro['price']= $this->input->get_post('price');
        $pro['shop'] = $this->input->get_post('shop');
        $pro['details'] = $this->input->post('details');
       	$pro['id']= $this->input->post('id');
		$this->parser->parse('update_confirm', $pro);
        
	}
        
	



	///-------------------------- Remove Memory----------------------------------------------------


	public function removeMemory(){

		if($this->input->get_post('confirm')){	
      			
				$rid =$this->input->get_post('id');
				$this->dbmodel->removeMemory($rid);
		}
		

		if(!$this->input->get_post('btnRemove')){
			$data['name'] = "Memory";
			$data['product'] = $this->dbmodel->getMemory();
			$this->parser->parse('remove_view', $data);
			return;
		}

		$remove['item'] = $this->input->get_post('item');
        $remove['price']= $this->input->get_post('price');
        $remove['shop'] = $this->input->get_post('shop');
        $remove['details'] = $this->input->post('details');
        $remove['id']= $this->input->get_post('id');
        $remove['name']="Memory";
         $remove['type']="Memory";

		$this->parser->parse('confirm_view', $remove);
		
		
        
	}

	

	///-------------------------- Add Storage----------------------------------------------------
public function addStorage(){
          $this->load->library('form_validation');
		  
		  $data['message']='';
		  
		  if(!$this->input->get_post('addButton'))
		  {
			
			  $data['name'] = "Storage";
		$data['product'] = $this->dbmodel->getStorage();
		$this->parser->parse('addproduct_view', $data);
			  return;
		  }
		  if($this->form_validation->run('addProcessor')==false)
		{
			$data['message']=validation_errors();
			$data['name'] = "Storage";
		    $data['product'] = $this->dbmodel->getStorage();
			$this->parser->parse('addproduct_view', $data);
			return;
		}
	


            $pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
       		$pro['details'] = $this->input->post('details');
        	$this->dbmodel->addStorage($pro);
			$this->load->helper('url');
		redirect('http://localhost/ATP3/admin/addStorage','refresh');

		

	}
	

	///--------------------------Update Storage----------------------------------------------------


	public function updateStorage(){
		$data['message']='';
		if($this->input->get_post('confirm')){	
		
			$pro['id']= $this->input->post('id');
			$pro['name'] = "Storage";
			$pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
        	$pro['details'] = $this->input->post('details');

        	 if($this->form_validation->run('addProcessor')==false){
			$pro['message']=validation_errors();
			$this->parser->parse('update_confirm', $pro);
			return;
		}
        	
       		$this->dbmodel->updateStorage($pro);
			redirect('http://localhost/ATP3/admin/updateStorage', 'refresh');
		}


		if(!$this->input->get_post('btnUpdate')){
		$data['name'] = "Storage";
		$data['product'] = $this->dbmodel->getStorage();
		$this->parser->parse('update_view', $data);
		return;
	}

		$pro['name'] = "Storage";
		$pro['item'] = $this->input->get_post('item');
        $pro['price']= $this->input->get_post('price');
        $pro['shop'] = $this->input->get_post('shop');
        $pro['details'] = $this->input->post('details');
       	$pro['id']= $this->input->post('id');
		$this->parser->parse('update_confirm', $pro);
        
	}
        
	



	///-------------------------- Remove Storage----------------------------------------------------


	public function removeStorage(){

		if($this->input->get_post('confirm')){	
      			
				$rid =$this->input->get_post('id');
				$this->dbmodel->removeStorage($rid);
		}
		

		if(!$this->input->get_post('btnRemove')){
			$data['name'] = "Storage";
			$data['product'] = $this->dbmodel->getStorage();
			$this->parser->parse('remove_view', $data);
			return;
		}

		$remove['item'] = $this->input->get_post('item');
        $remove['price']= $this->input->get_post('price');
        $remove['shop'] = $this->input->get_post('shop');
        $remove['details'] = $this->input->post('details');
        $remove['id']= $this->input->get_post('id');
        $remove['name']="Storage";
         $remove['type']="Storage";

		$this->parser->parse('confirm_view', $remove);
		
		
        
	}



	///-------------------------- Add Gpu----------------------------------------------------
public function addGpu(){
          $this->load->library('form_validation');
		  
		  $data['message']='';
		  
		  if(!$this->input->get_post('addButton'))
		  {
			
			  $data['name'] = "GPU";
		$data['product'] = $this->dbmodel->getGpu();
		$this->parser->parse('addproduct_view', $data);
			  return;
		  }
		  if($this->form_validation->run('addProcessor')==false)
		{
			$data['message']=validation_errors();
			$data['name'] = "GPU";
		    $data['product'] = $this->dbmodel->getGpu();
			$this->parser->parse('addproduct_view', $data);
			return;
		}
	


            $pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
       		$pro['details'] = $this->input->post('details');
        	$this->dbmodel->addGpu($pro);
			$this->load->helper('url');
		redirect('http://localhost/ATP3/admin/addGpu','refresh');

		

	}


	///--------------------------Update Gpu----------------------------------------------------


	public function updateGpu(){
		$data['message']='';
		if($this->input->get_post('confirm')){	
		
			$pro['id']= $this->input->post('id');
			$pro['name'] = "Gpu";
			$pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
        	$pro['details'] = $this->input->post('details');

        	 if($this->form_validation->run('addProcessor')==false){
			$pro['message']=validation_errors();
			$this->parser->parse('update_confirm', $pro);
			return;
		}
        	
       		$this->dbmodel->updateGpu($pro);
			redirect('http://localhost/ATP3/admin/updateGpu', 'refresh');
		}


		if(!$this->input->get_post('btnUpdate')){
		$data['name'] = "Gpu";
		$data['product'] = $this->dbmodel->getGpu();
		$this->parser->parse('update_view', $data);
		return;
	}

		$pro['name'] = "Gpu";
		$pro['item'] = $this->input->get_post('item');
        $pro['price']= $this->input->get_post('price');
        $pro['shop'] = $this->input->get_post('shop');
        $pro['details'] = $this->input->post('details');
       	$pro['id']= $this->input->post('id');
		$this->parser->parse('update_confirm', $pro);
        
	}
        
	



	///-------------------------- Remove Gpu----------------------------------------------------


	public function removeGpu(){

		if($this->input->get_post('confirm')){	
      			
				$rid =$this->input->get_post('id');
				$this->dbmodel->removeGpu($rid);
		}
		

		if(!$this->input->get_post('btnRemove')){
			$data['name'] = "Graphics Card";
			$data['product'] = $this->dbmodel->getGpu();
			$this->parser->parse('remove_view', $data);
			return;
		}

		$remove['item'] = $this->input->get_post('item');
        $remove['price']= $this->input->get_post('price');
        $remove['shop'] = $this->input->get_post('shop');
        $remove['details'] = $this->input->post('details');
        $remove['id']= $this->input->get_post('id');
        $remove['name']="Graphics Card";
         $remove['type']="Gpu";

		$this->parser->parse('confirm_view', $remove);
		
		
        
	}


	///-------------------------- Add Psu----------------------------------------------------
public function addPsu(){
          $this->load->library('form_validation');
		  
		  $data['message']='';
		  
		  if(!$this->input->get_post('addButton'))
		  {
			
			  $data['name'] = "PSU";
		$data['product'] = $this->dbmodel->getPsu();
		$this->parser->parse('addproduct_view', $data);
			  return;
		  }
		  if($this->form_validation->run('addProcessor')==false)
		{
			$data['message']=validation_errors();
			$data['name'] = "PSU";
		    $data['product'] = $this->dbmodel->getPsu();
			$this->parser->parse('addproduct_view', $data);
			return;
		}
	


            $pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
       		$pro['details'] = $this->input->post('details');
        	$this->dbmodel->addPsu($pro);
			$this->load->helper('url');
		redirect('http://localhost/ATP3/admin/addPsu','refresh');

		

	}




	///--------------------------Update Psu----------------------------------------------------


	public function updatePsu(){
		$data['message']='';
		if($this->input->get_post('confirm')){	
		
			$pro['id']= $this->input->post('id');
			$pro['name'] = "Psu";
			$pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
        	$pro['details'] = $this->input->post('details');

        	 if($this->form_validation->run('addProcessor')==false){
			$pro['message']=validation_errors();
			$this->parser->parse('update_confirm', $pro);
			return;
		}
        	
       		$this->dbmodel->updatePsu($pro);
			redirect('http://localhost/ATP3/admin/updatePsu', 'refresh');
		}


		if(!$this->input->get_post('btnUpdate')){
		$data['name'] = "Gpu";
		$data['product'] = $this->dbmodel->getPsu();
		$this->parser->parse('update_view', $data);
		return;
	}

		$pro['name'] = "Psu";
		$pro['item'] = $this->input->get_post('item');
        $pro['price']= $this->input->get_post('price');
        $pro['shop'] = $this->input->get_post('shop');
        $pro['details'] = $this->input->post('details');
       	$pro['id']= $this->input->post('id');
		$this->parser->parse('update_confirm', $pro);
        
        
	}



	///-------------------------- Remove Psu----------------------------------------------------


	public function removePsu(){

		if($this->input->get_post('confirm')){	
      			
				$rid =$this->input->get_post('id');
				$this->dbmodel->removePsu($rid);
		}
		

		if(!$this->input->get_post('btnRemove')){
			$data['name'] = "Power Supply";
			$data['product'] = $this->dbmodel->getPsu();
			$this->parser->parse('remove_view', $data);
			return;
		}

		$remove['item'] = $this->input->get_post('item');
        $remove['price']= $this->input->get_post('price');
        $remove['shop'] = $this->input->get_post('shop');
        $remove['details'] = $this->input->post('details');
        $remove['id']= $this->input->get_post('id');
        $remove['name']="Power Supply";
         $remove['type']="Psu";

		$this->parser->parse('confirm_view', $remove);
		
		
        
	}


	///-------------------------- Add Optical Drive----------------------------------------------------
public function addOptical(){
          $this->load->library('form_validation');
		  
		  $data['message']='';
		  
		  if(!$this->input->get_post('addButton'))
		  {
			
			  $data['name'] = "Optical Drive";
		$data['product'] = $this->dbmodel->getOptical();
		$this->parser->parse('addproduct_view', $data);
			  return;
		  }
		  if($this->form_validation->run('addProcessor')==false)
		{
			$data['message']=validation_errors();
			$data['name'] = "Optical Drive";
		    $data['product'] = $this->dbmodel->getOptical();
			$this->parser->parse('addproduct_view', $data);
			return;
		}
	


            $pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
       		$pro['details'] = $this->input->post('details');
        	$this->dbmodel->addOptical($pro);
			$this->load->helper('url');
		redirect('http://localhost/ATP3/admin/addOptical','refresh');

		

	}


	///--------------------------Update Optical Drive----------------------------------------------------


	public function updateOptical(){
		$data['message']='';
		if($this->input->get_post('confirm')){	
		
			$pro['id']= $this->input->post('id');
			$pro['name'] = "Optical Drive";
			$pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
        	$pro['details'] = $this->input->post('details');

        	 if($this->form_validation->run('addProcessor')==false){
			$pro['message']=validation_errors();
			$this->parser->parse('update_confirm', $pro);
			return;
		}
        	
       		$this->dbmodel->updateOptical($pro);
			redirect('http://localhost/ATP3/admin/updateOptical', 'refresh');
		}


		if(!$this->input->get_post('btnUpdate')){
		$data['name'] = "Optical Drive";
		$data['product'] = $this->dbmodel->getOptical();
		$this->parser->parse('update_view', $data);
		return;
	}

		$pro['name'] = "Optical Drive";
		$pro['item'] = $this->input->get_post('item');
        $pro['price']= $this->input->get_post('price');
        $pro['shop'] = $this->input->get_post('shop');
        $pro['details'] = $this->input->post('details');
       	$pro['id']= $this->input->post('id');
		$this->parser->parse('update_confirm', $pro);
        
        
	}



	///-------------------------- Remove Optical Drive----------------------------------------------------


	public function removeOptical(){

		if($this->input->get_post('confirm')){	
      			
				$rid =$this->input->get_post('id');
				$this->dbmodel->removeOptical($rid);
		}
		

		if(!$this->input->get_post('btnRemove')){
			$data['name'] = "Optical Drive";
			$data['product'] = $this->dbmodel->getOptical();
			$this->parser->parse('remove_view', $data);
			return;
		}

		$remove['item'] = $this->input->get_post('item');
        $remove['price']= $this->input->get_post('price');
        $remove['shop'] = $this->input->get_post('shop');
        $remove['details'] = $this->input->post('details');
        $remove['id']= $this->input->get_post('id');
        $remove['name']="Optical Drive";
        $remove['type']="Optical";

		$this->parser->parse('confirm_view', $remove);
		
		
        
	}



	///-------------------------- Add Casing----------------------------------------------------
public function addCasing(){
          $this->load->library('form_validation');
		  
		  $data['message']='';
		  
		  if(!$this->input->get_post('addButton'))
		  {
			
			  $data['name'] = "Casing";
		$data['product'] = $this->dbmodel->getCasing();
		$this->parser->parse('addproduct_view', $data);
			  return;
		  }
		  if($this->form_validation->run('addProcessor')==false)
		{
			$data['message']=validation_errors();
			$data['name'] = "Casing";
		    $data['product'] = $this->dbmodel->getCasing();
			$this->parser->parse('addproduct_view', $data);
			return;
		}
	


            $pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
       		$pro['details'] = $this->input->post('details');
        	$this->dbmodel->addCasing($pro);
			$this->load->helper('url');
		redirect('http://localhost/ATP3/admin/addCasing','refresh');

		

	}
	

	///--------------------------Update Casing----------------------------------------------------


	public function updateCasing(){
		$data['message']='';
		if($this->input->get_post('confirm')){	
		
			$pro['id']= $this->input->post('id');
			$pro['name'] = "Casing";
			$pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
        	$pro['details'] = $this->input->post('details');

        	 if($this->form_validation->run('addProcessor')==false){
			$pro['message']=validation_errors();
			$this->parser->parse('update_confirm', $pro);
			return;
		}
        	
       		$this->dbmodel->updateCasing($pro);
			redirect('http://localhost/ATP3/admin/updateCasing', 'refresh');
		}


		if(!$this->input->get_post('btnUpdate')){
		$data['name'] = "Casing";
		$data['product'] = $this->dbmodel->getCasing();
		$this->parser->parse('update_view', $data);
		return;
	}

		$pro['name'] = "Casing";
		$pro['item'] = $this->input->get_post('item');
        $pro['price']= $this->input->get_post('price');
        $pro['shop'] = $this->input->get_post('shop');
        $pro['details'] = $this->input->post('details');
       	$pro['id']= $this->input->post('id');
		$this->parser->parse('update_confirm', $pro);
        
        
	}



	///-------------------------- Remove Casing----------------------------------------------------


	public function removeCasing(){

		if($this->input->get_post('confirm')){	
      			
				$rid =$this->input->get_post('id');
				$this->dbmodel->removeCasing($rid);
		}
		

		if(!$this->input->get_post('btnRemove')){
			$data['name'] = "Casing";
			$data['product'] = $this->dbmodel->getCasing();
			$this->parser->parse('remove_view', $data);
			return;
		}

		$remove['item'] = $this->input->get_post('item');
        $remove['price']= $this->input->get_post('price');
        $remove['shop'] = $this->input->get_post('shop');
        $remove['details'] = $this->input->post('details');
        $remove['id']= $this->input->get_post('id');
        $remove['name']="Casing";
         $remove['type']="Casing";

		$this->parser->parse('confirm_view', $remove);
		
		
        
	}


	///-------------------------- Add Mouse----------------------------------------------------
public function addMouse(){
          $this->load->library('form_validation');
		  
		  $data['message']='';
		  
		  if(!$this->input->get_post('addButton'))
		  {
			
			  $data['name'] = "Mouse";
		$data['product'] = $this->dbmodel->getMouse();
		$this->parser->parse('addproduct_view', $data);
			  return;
		  }
		  if($this->form_validation->run('addProcessor')==false)
		{
			$data['message']=validation_errors();
			$data['name'] = "Mouse";
		    $data['product'] = $this->dbmodel->getMouse();
			$this->parser->parse('addproduct_view', $data);
			return;
		}
	


            $pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
       		$pro['details'] = $this->input->post('details');
        	$this->dbmodel->addMouse($pro);
			$this->load->helper('url');
		redirect('http://localhost/ATP3/admin/addMouse','refresh');

		

	}
	



	///--------------------------Update Mouse----------------------------------------------------


	public function updateMouse(){
		$data['message']='';
		if($this->input->get_post('confirm')){	
		
			$pro['id']= $this->input->post('id');
			$pro['name'] = "Mouse";
			$pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
        	$pro['details'] = $this->input->post('details');

        	 if($this->form_validation->run('addProcessor')==false){
			$pro['message']=validation_errors();
			$this->parser->parse('update_confirm', $pro);
			return;
		}
        	
       		$this->dbmodel->updateMouse($pro);
			redirect('http://localhost/ATP3/admin/updateMouse', 'refresh');
		}


		if(!$this->input->get_post('btnUpdate')){
		$data['name'] = "Mouse";
		$data['product'] = $this->dbmodel->getMouse();
		$this->parser->parse('update_view', $data);
		return;
	}

		$pro['name'] = "Mouse";
		$pro['item'] = $this->input->get_post('item');
        $pro['price']= $this->input->get_post('price');
        $pro['shop'] = $this->input->get_post('shop');
        $pro['details'] = $this->input->post('details');
       	$pro['id']= $this->input->post('id');
		$this->parser->parse('update_confirm', $pro);
        
        
	}



	///-------------------------- Remove Mouse----------------------------------------------------


	public function removeMouse(){

		if($this->input->get_post('confirm')){	
      			
				$rid =$this->input->get_post('id');
				$this->dbmodel->removeMouse($rid);
		}
		

		if(!$this->input->get_post('btnRemove')){
			$data['name'] = "Mouse";
			$data['product'] = $this->dbmodel->getMouse();
			$this->parser->parse('remove_view', $data);
			return;
		}

		$remove['item'] = $this->input->get_post('item');
        $remove['price']= $this->input->get_post('price');
        $remove['shop'] = $this->input->get_post('shop');
        $remove['details'] = $this->input->post('details');
        $remove['id']= $this->input->get_post('id');
        $remove['name']="Mouse";
         $remove['type']="Mouse";

		$this->parser->parse('confirm_view', $remove);
		
		
        
	}







	///-------------------------- Add Keyboard----------------------------------------------------
public function addKeyboard(){
          $this->load->library('form_validation');
		  
		  $data['message']='';
		  
		  if(!$this->input->get_post('addButton'))
		  {
			
			  $data['name'] = "Keyboard";
		$data['product'] = $this->dbmodel->getKeyboard();
		$this->parser->parse('addproduct_view', $data);
			  return;
		  }
		  if($this->form_validation->run('addProcessor')==false)
		{
			$data['message']=validation_errors();
			$data['name'] = "Keyboard";
		    $data['product'] = $this->dbmodel->getKeyboard();
			$this->parser->parse('addproduct_view', $data);
			return;
		}
	


            $pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
       		$pro['details'] = $this->input->post('details');
        	$this->dbmodel->addKeyboard($pro);
			$this->load->helper('url');
		redirect('http://localhost/ATP3/admin/addKeyboard','refresh');

		

	}
	


	///--------------------------Update Keyboard----------------------------------------------------


	public function updateKeyboard(){
	$data['message']='';
		if($this->input->get_post('confirm')){	
		
			$pro['id']= $this->input->post('id');
			$pro['name'] = "Keyboard";
			$pro['item'] = $this->input->get_post('item');
        	$pro['price']= $this->input->get_post('price');
        	$pro['shop'] = $this->input->get_post('shop');
        	$pro['details'] = $this->input->post('details');

        	 if($this->form_validation->run('addProcessor')==false){
			$pro['message']=validation_errors();
			$this->parser->parse('update_confirm', $pro);
			return;
		}
        	
       		$this->dbmodel->updateKeyboard($pro);
			redirect('http://localhost/ATP3/admin/updateKeyboard', 'refresh');
		}


		if(!$this->input->get_post('btnUpdate')){
		$data['name'] = "Keyboard";
		$data['product'] = $this->dbmodel->getKeyboard();
		$this->parser->parse('update_view', $data);
		return;
	}

		$pro['name'] = "Keyboard";
		$pro['item'] = $this->input->get_post('item');
        $pro['price']= $this->input->get_post('price');
        $pro['shop'] = $this->input->get_post('shop');
        $pro['details'] = $this->input->post('details');
       	$pro['id']= $this->input->post('id');
		$this->parser->parse('update_confirm', $pro);
        
        
	}



	///-------------------------- Remove Keyboard----------------------------------------------------


	public function removeKeyboard(){

		if($this->input->get_post('confirm')){	
      			
				$rid =$this->input->get_post('id');
				$this->dbmodel->removeKeyboard($rid);
		}
		

		if(!$this->input->get_post('btnRemove')){
			$data['name'] = "Keyboard";
			$data['product'] = $this->dbmodel->getKeyboard();
			$this->parser->parse('remove_view', $data);
			return;
		}

		$remove['item'] = $this->input->get_post('item');
        $remove['price']= $this->input->get_post('price');
        $remove['shop'] = $this->input->get_post('shop');
        $remove['details'] = $this->input->post('details');
        $remove['id']= $this->input->get_post('id');
        $remove['name']="Keyboard";
        $remove['type']="Keyboard";

		$this->parser->parse('confirm_view', $remove);
		
		
        
	}







	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		
		$this->load->helper('url');
		redirect('http://localhost/ATP3/login', 'refresh');
	}

}
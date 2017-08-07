<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbmodel extends CI_MODEL {


//--------------------------------------PROCESSOR--------------------------------------------------------------------------------------------------


	public function getProcessor()
	{
		$this->load->database();
		$sql = "SELECT * FROM processors";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getProcessorById($id)
	{
		$this->load->database();
		$sql = "SELECT * FROM Processors WHERE id=$id";
		$result = $this->db->query($sql);
		return $result->row_array(); 

	}



	public function addProcessor($pro)
	{
		$this->load->database();
		$sql = "INSERT INTO processors VALUES (null, '$pro[item]', '$pro[details]', '$pro[price]','$pro[shop]')";
		return $this->db->query($sql);
	}

	public function updateProcessor($pro){

		$this->load->database();
		$sql="UPDATE processors SET item='$pro[item]', details='$pro[details]',price='$pro[price]', shop='$pro[shop]' WHERE id='$pro[id]'";
	
		return $this->db->query($sql);
	

	}

	public function removeProcessor($id)
	{
		$this->load->database();
		$sql = "DELETE FROM processors WHERE id='$id'";
		return $this->db->query($sql);
	}

  public function searchProcessor($data)
  {
	  $this->load->database();
	  $sql="select * from processors where CONCAT(item,details,price,shop) like '%$data%'";
	  $result=$this->db->query($sql);
return $result->result_array();
  }
//------------------------------------------MOTHERBOARD----------------------------------------------------------------------------------------------


	public function getMotherboard()
	{
		$this->load->database();
		$sql = "SELECT * FROM motherboards";
		$result = $this->db->query($sql);
		return $result->result_array();
	}


	public function addMotherboard($pro)
	{
		$this->load->database();
		$sql = "INSERT INTO motherboards VALUES (null, '$pro[item]', '$pro[details]', '$pro[price]','$pro[shop]')";
		return $this->db->query($sql);
	}

	public function updateMotherboard($pro){

		$this->load->database();
		$sql="UPDATE motherboards SET item='$pro[item]', details='$pro[details]',price='$pro[price]', shop='$pro[shop]' WHERE id='$pro[id]'";
	
		return $this->db->query($sql);
	

	}

	public function removeMotherboard($id)
	{
		$this->load->database();
		$sql = "DELETE FROM motherboards WHERE id='$id'";
		return $this->db->query($sql);
	}
	public function searchMotherboard($data)
  {
	  $this->load->database();
	  $sql="select * from motherboards where CONCAT(item,details,price,shop) like '%$data%'";
	  $result=$this->db->query($sql);
	 return $result->result_array();
  }
 


//----------------------------------------------------------------------------------------------------------------------------------------

//------------------------------------------MEMORY----------------------------------------------------------------------------------------------


	public function getMemory()
	{
		$this->load->database();
		$sql = "SELECT * FROM memories";
		$result = $this->db->query($sql);
		return $result->result_array();
	}


	public function addMemory($pro)
	{
		$this->load->database();
		$sql = "INSERT INTO memories VALUES (null, '$pro[item]', '$pro[details]', '$pro[price]','$pro[shop]')";
		return $this->db->query($sql);
	}

	public function updateMemory($pro){

		$this->load->database();
		$sql="UPDATE memories SET item='$pro[item]', details='$pro[details]',price='$pro[price]', shop='$pro[shop]' WHERE id='$pro[id]'";
	
		return $this->db->query($sql);
	

	}

	public function removeMemory($id)
	{
		$this->load->database();
		$sql = "DELETE FROM memories WHERE id='$id'";
		return $this->db->query($sql);
	}
	public function searchMemory($data)
  {
	  $this->load->database();
	  $sql="select * from memories where CONCAT(item,details,price,shop) like '%$data%'";
	  $result=$this->db->query($sql);
	 return $result->result_array();
  }


//----------------------------------------------------------------------------------------------------------------------------------------


//------------------------------------------Storage----------------------------------------------------------------------------------------------


	public function getStorage()
	{
		$this->load->database();
		$sql = "SELECT * FROM storages";
		$result = $this->db->query($sql);
		return $result->result_array();
	}


	public function addStorage($pro)
	{
		$this->load->database();
		$sql = "INSERT INTO storages VALUES (null, '$pro[item]', '$pro[details]', '$pro[price]','$pro[shop]')";
		return $this->db->query($sql);
	}

	public function updateStorage($pro){

		$this->load->database();
		$sql="UPDATE storages SET item='$pro[item]', details='$pro[details]',price='$pro[price]', shop='$pro[shop]' WHERE id='$pro[id]'";
	
		return $this->db->query($sql);
	

	}

	public function removeStorage($id)
	{
		$this->load->database();
		$sql = "DELETE FROM storages WHERE id='$id'";
		return $this->db->query($sql);
	}
	public function searchStorage($data)
  {
	  $this->load->database();
	  $sql="select * from storages where CONCAT(item,details,price,shop) like '%$data%'";
	  $result=$this->db->query($sql);
      return $result->result_array();
  }


//----------------------------------------------------------------------------------------------------------------------------------------

//------------------------------------------GPU----------------------------------------------------------------------------------------------


	public function getGpu()
	{
		$this->load->database();
		$sql = "SELECT * FROM gpus";
		$result = $this->db->query($sql);
		return $result->result_array();
	}


	public function addGpu($pro)
	{
		$this->load->database();
		$sql = "INSERT INTO gpus VALUES (null, '$pro[item]', '$pro[details]', '$pro[price]','$pro[shop]')";
		return $this->db->query($sql);
	}

	public function updateGpu($pro){

		$this->load->database();
		$sql="UPDATE gpus SET item='$pro[item]', details='$pro[details]',price='$pro[price]', shop='$pro[shop]' WHERE id='$pro[id]'";
	
		return $this->db->query($sql);
	

	}

	public function removeGpu($id)
	{
		$this->load->database();
		$sql = "DELETE FROM gpus WHERE id='$id'";
		return $this->db->query($sql);
	}
	public function searchGpu($data)
  {
	  $this->load->database();
	  $sql="select * from gpus where CONCAT(item,details,price,shop) like '%$data%'";
	  $result=$this->db->query($sql);
	 return $result->result_array();
  }


//----------------------------------------------------------------------------------------------------------------------------------------

//------------------------------------------PSU----------------------------------------------------------------------------------------------


	public function getPsu()
	{
		$this->load->database();
		$sql = "SELECT * FROM psus ";
		$result = $this->db->query($sql);
		return $result->result_array();
	}


	public function addPsu($pro)
	{
		$this->load->database();
		$sql = "INSERT INTO psus VALUES (null, '$pro[item]', '$pro[details]', '$pro[price]','$pro[shop]')";
		return $this->db->query($sql);
	}

	public function updatePsu($pro){

		$this->load->database();
		$sql="UPDATE psus SET item='$pro[item]', details='$pro[details]',price='$pro[price]', shop='$pro[shop]' WHERE id='$pro[id]'";
	
		return $this->db->query($sql);
	

	}

	public function removePsu($id)
	{
		$this->load->database();
		$sql = "DELETE FROM psus WHERE id='$id'";
		return $this->db->query($sql);
	}
	public function searchPsu($data)
  {
	  $this->load->database();
	  $sql="select * from psus where CONCAT(item,details,price,shop) like '%$data%'";
	  $result=$this->db->query($sql);
	 return $result->result_array();
  }


//----------------------------------------------------------------------------------------------------------------------------------------


//------------------------------------------OPTICAL DRIVE----------------------------------------------------------------------------------------------


	public function getOptical()
	{
		$this->load->database();
		$sql = "SELECT * FROM dvds";
		$result = $this->db->query($sql);
		return $result->result_array();
	}


	public function addOptical($pro)
	{
		$this->load->database();
		$sql = "INSERT INTO dvds VALUES (null, '$pro[item]', '$pro[details]', '$pro[price]','$pro[shop]')";
		return $this->db->query($sql);
	}

	public function updateOptical($pro){

		$this->load->database();
		$sql="UPDATE dvds SET item='$pro[item]', details='$pro[details]',price='$pro[price]', shop='$pro[shop]' WHERE id='$pro[id]'";
	
		return $this->db->query($sql);
	

	}

	public function removeOptical($id)
	{
		$this->load->database();
		$sql = "DELETE FROM dvds WHERE id='$id'";
		return $this->db->query($sql);
	}
	public function searchOptical($data)
  {
	  $this->load->database();
	  $sql="select * from dvds where CONCAT(item,details,price,shop) like '%$data%'";
	  $result=$this->db->query($sql);
	 return $result->result_array();
  }


//----------------------------------------------------------------------------------------------------------------------------------------


//------------------------------------------Casings----------------------------------------------------------------------------------------------


	public function getCasing()
	{
		$this->load->database();
		$sql = "SELECT * FROM casings";
		$result = $this->db->query($sql);
		return $result->result_array();
	}


	public function addCasing($pro)
	{
		$this->load->database();
		$sql = "INSERT INTO casings VALUES (null, '$pro[item]', '$pro[details]', '$pro[price]','$pro[shop]')";
		return $this->db->query($sql);
	}

	public function updateCasing($pro){

		$this->load->database();
		$sql="UPDATE casings SET item='$pro[item]', details='$pro[details]',price='$pro[price]', shop='$pro[shop]' WHERE id='$pro[id]'";
	
		return $this->db->query($sql);
	

	}

	public function removeCasing($id)
	{
		$this->load->database();
		$sql = "DELETE FROM casings WHERE id='$id'";
		return $this->db->query($sql);
	}
	public function searchCasing($data)
  {
	  $this->load->database();
	  $sql="select * from casings where CONCAT(item,details,price,shop) like '%$data%'";
	  $result=$this->db->query($sql);
	 return $result->result_array();
  }


//----------------------------------------------------------------------------------------------------------------------------------------

	
	//------------------------------------------Mouse----------------------------------------------------------------------------------------------


	public function getMouse()
	{
		$this->load->database();
		$sql = "SELECT * FROM mouses";
		$result = $this->db->query($sql);
		return $result->result_array();
	}


	public function addMouse($pro)
	{
		$this->load->database();
		$sql = "INSERT INTO mouses VALUES (null, '$pro[item]', '$pro[details]', '$pro[price]','$pro[shop]')";
		return $this->db->query($sql);
	}

	public function updateMouse($pro){

		$this->load->database();
		$sql="UPDATE mouses SET item='$pro[item]', details='$pro[details]',price='$pro[price]', shop='$pro[shop]' WHERE id='$pro[id]'";
	
		return $this->db->query($sql);
	

	}

	public function removeMouse($id)
	{
		$this->load->database();
		$sql = "DELETE FROM mouses WHERE id='$id'";
		return $this->db->query($sql);
	}
	public function searchMouse($data)
  {
	  $this->load->database();
	  $sql="select * from mouses where CONCAT(item,details,price,shop) like '%$data%'";
	  $result=$this->db->query($sql);
	 return $result->result_array();
  }


//----------------------------------------------------------------------------------------------------------------------------------------


//------------------------------------------Keyboard----------------------------------------------------------------------------------------------


	public function getKeyboard()
	{
		$this->load->database();
		$sql = "SELECT * FROM keyboards";
		$result = $this->db->query($sql);
		return $result->result_array();
	}


	public function addKeyboard($pro)
	{
		$this->load->database();
		$sql = "INSERT INTO keyboards VALUES (null, '$pro[item]', '$pro[details]', '$pro[price]','$pro[shop]')";
		return $this->db->query($sql);
	}

	public function updateKeyboard($pro){

		$this->load->database();
		$sql="UPDATE keyboards SET item='$pro[item]', details='$pro[details]',price='$pro[price]', shop='$pro[shop]' WHERE id='$pro[id]'";
	
		return $this->db->query($sql);
	

	}

	public function removeKeyboard($id)
	{
		$this->load->database();
		$sql = "DELETE FROM keyboards WHERE id='$id'";
		return $this->db->query($sql);
	}
	public function searchKeyboard($data)
  {
	  $this->load->database();
	  $sql="select * from keyboards where CONCAT(item,details,price,shop) like '%$data%'";
	  $result=$this->db->query($sql);
	 return $result->result_array();
  }


//----------------------------------------------------------------------------------------------------------------------------------------

	
}
<?php
  class TopicModel extends CI_Model{

  	public function insertdata($data)
  	{
  		if ($this->db->insert("topics", $data)) 
  		{ 
		   return true; 
	    } 	
  	}

  	

  }
?>
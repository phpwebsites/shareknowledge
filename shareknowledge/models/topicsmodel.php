<?php
  class TopicsModel extends CI_Model{

  	public function insertdata($data)
  	{
  		if ($this->db->insert("topics", $data)) 
  		{ 
		   return true; 
	    } 	
  	}

  	public function getalltopics()
  	{
       $query = $this->db->get('topics');  
       $alldatares = $query->result();
       return $alldatares;  
  	}

    public function gettopic($id)
    {
       $query = $this->db->query("SELECT * FROM topics WHERE id=".$id);
       $res = $query->result();  // this returns an object of all results
       $row = $res[0]; 
       return $row; 
    }

  	

  }
?>
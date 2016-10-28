<?php
  class UsersModel extends CI_Model{

  	public function insertuserdata($data)
  	{
  		if ($this->db->insert("users", $data)) 
  		{ 
		    return true; 
	    } 	
  	}

    public function getuser($id)
    {
       $query = $this->db->query("SELECT * FROM users WHERE id=".$id);
       $res = $query->result();  // this returns an object of all results
       $row = $res[0]; 
       return $row;          // get the first row
    }

    public function validuser($data)
    {
      $query = $this->db->query("SELECT * FROM users WHERE email = $data['email'] AND password = $data['password']");
      $resno = $query->num_rows();
      return $resno;
    }
    

  	

  }
?>
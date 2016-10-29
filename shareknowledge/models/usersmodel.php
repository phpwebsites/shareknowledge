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
      // print_r($data);exit;
      $query = $this->db->query("SELECT * FROM users WHERE email ='" .$data['email']."' AND password ='" .md5($data['password'])."'");
      $userdata = $query->result();
      return $userdata[0];
    }
    

  	

  }
?>
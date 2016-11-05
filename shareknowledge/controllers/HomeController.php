<?php
   class HomeController extends CI_Controller
   {
	   	function __construct() 
	   	{ 
	   		parent::__construct(); 
	   		$this->load->model('topicsmodel');
	   		
	   	}

	   	public function index()
	   	{
	   		$data['topic_result'] = $this->topicsmodel->getalltopics();
	   		$this->load->view('includes/header');
	   		$this->load->view('index',$data);
	   		$this->load->view('includes/footer');
	   	}

	   	public function getusername($userid)
	   	{
           $data = $this->usersmodel->getuser($userid);
           return $data;
	   	}
	}
?>
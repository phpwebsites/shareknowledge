<?php
   class HomeController extends CI_Controller
   {
	   	function __construct() 
	   	{ 
	   		parent::__construct(); 
	   		
	   	}

	   	public function index()
	   	{
	   		$this->load->view('includes/header');
	   		$this->load->view('index');
	   		$this->load->view('includes/footer');
	   	}
	}
?>
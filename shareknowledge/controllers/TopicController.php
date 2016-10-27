<?php
   class TopicController extends CI_Controller
   {
	   	function __construct() 
	   	{ 
	   		parent::__construct(); 
	   		$this->load->model('topicmodel');

	   		
	   	}

	   	public function topic()
	   	{
	   		
	   		$this->load->view('includes/header');
	   		$this->load->view('topic');
	   		$this->load->view('includes/footer');
	   	}

	   	public function topiccreate()
	   	{
	   		$data = array('name' => $this->input->post('name'),'title' => $this->input->post('title'),'email' => $this->input->post('email'),'description' =>$this->input->post('description'),'phoneno' => $this->input->post('phno'),'linkedin' => $this->input->post('linkedin'),'facebook' => $this->input->post('facebook'),'twitter' => $this->input->post('twitter'));
	   		$data = $this->topicmodel->insertdata($data);
	   		if($data)
	   		{
	   			echo "insert";
	   			exit;
	   		}
	   	}
	}
?>
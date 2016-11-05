<?php
   class UserController extends CI_Controller
   {
	   	function __construct() 
	   	{ 
	   		parent::__construct(); 
	   		$this->load->model('usersmodel');
	   		
	   	}

	   	public function index()
	   	{
	   		$this->load->view('includes/header');
	   		$this->load->view('index');
	   		$this->load->view('includes/footer');
	   	}

	   	public function create()
	   	{
	   		$data = array('email' => $this->input->post('email'),'password' => md5($this->input->post('password')) );
	   		$data = $this->usersmodel->insertuserdata($data);
	   		$lastid = $this->db->insert_id();
	   		$userdata = $this->usersmodel->getuser($lastid);
	   		$userdata = array('userid' => $userdata->id , 'email' => $userdata->email);
	   		$this->session->set_userdata($userdata);
	   		if($data)
	   		{
	   			$this->session->set_flashdata('sucess', 'Your Registration is sucessfull.Please share your valueble thinks on site');
	   			redirect('index');
	   		}
	   	}

	   	public function signup()
	   	{
	   	  $this->load->view('includes/header');
	   	  $this->load->view('signup');
	   	  $this->load->view('includes/footer');
	   	}

	   	public function login()
	   	{

	   		$this->load->view('includes/header');
	   		$this->load->view('login');
	   		$this->load->view('includes/footer');
	   	}

	   	public function logincreate()
	   	{
	   		$data = array('email' =>$this->input->post('email'),'password' =>$this->input->post('password'));
	   		$userdata = $this->usersmodel->validuser($data);
	   		// print_r($userdata); exit;
	   		if(empty($data))
	   		{
	   			$this->session->set_flashdata('msg','Your email and password is worng');
	   			redirect('home');
	   		}
	   		else
	   		{
	   			$sessiondata = array('userid'=> $userdata->id,'email' => $userdata->email);
	   			$this->session->set_userdata($sessiondata);
	   			$this->session->set_flashdata('msg','Your login is sucessfull.Please share your valueble thinks on site ');
	   			redirect('home');
	   		}
	   	}

	   	public function logout()
	   	{
	   	  $this->session->sess_destroy();	
	   	  $this->load->view('includes/header');
	   	  $this->load->view('index');
	   	  $this->load->view('includes/footer');
	   	}


	}
?>
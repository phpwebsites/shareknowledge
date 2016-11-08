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

	   	public function subscribe()
	   	{
	   		$email = $this->input->post('email');
	   		$subject = "Share Knowledge Subscription";
	   	    $message = "<html>
                       <body>
                        <div style='width: 640px;height: 145px;background-color: #d0cfcf;padding: 20px;font-size: 20px;text-align: center;'>
                           <p>
                             Your Email Subscription is Sucessfull
                           </p>
                        </div>
                       </body>
                      </html>
                      ";
            //echo $message;exit;
            $this->_sendEmail($email,$subject,$message);
            $this->session->set_flashdata('emailsentsucess','Your email subscription sucessfull on our site');
			redirect('home');	

	   	}

	   	public function logout()
	   	{
	   	  $this->session->sess_destroy();	
	   	  $this->load->view('includes/header');
	   	  $this->load->view('index');
	   	  $this->load->view('includes/footer');
	   	}

	   	private function _sendEmail($email,$subject,$message)
      {
	      $config = array();
	      $config['useragent'] = "CodeIgniter";
	      $config['mailpath']  = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
	      $config['protocol']  = "smtp";
	      $config['smtp_host'] = "ssl://smtp.googlemail.com";
	      $config['smtp_port'] = "465";
	      $config['smtp_user'] = 'promtads1414@gmail.com';
	      $config['smtp_pass'] = 'promtads';
	      $config['mailtype'] = 'html';
	      $config['charset']  = 'utf-8';
	      $config['newline']  = "\r\n";
	      $config['wordwrap'] = TRUE;
	      $this->load->library('email');
	      $this->email->initialize($config);
	      $this->email->from('promoteads@newbiesoftsolutions.com');
	      $this->email->to($email);
	      $this->email->subject($subject);
	      $this->email->message($message);
	      if($this->email->send())
	      {
	          
	      }
	     else
	     {
	       show_error($this->email->print_debugger());
	       
	     }
      }


	}
?>
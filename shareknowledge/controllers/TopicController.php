<?php
   class TopicController extends CI_Controller
   {
	   	function __construct() 
	   	{ 
	   		parent::__construct(); 
	   		$this->load->model('topicsmodel');
	   	}

	   	public function topic()
	   	{
	   		
	   		$this->load->view('includes/header');
	   		$this->load->view('topic');
	   		$this->load->view('includes/footer');
	   	}

	   	public function topiccreate()
	   	{
	   		$config['upload_path']   = './uploads/'; 
		    $config['allowed_types'] = 'gif|jpg|png'; 
		    $config['max_size']      = ''; 
		    $config['max_width']     = '274'; 
		    $config['max_height']    = '183';  
		    $config['overwrite'] = TRUE;
		    $config['remove_spaces'] = TRUE;
		    $this->form_validation->set_rules("name", "Name", "trim|required");
	        $this->form_validation->set_rules("title", "Title", "trim|required");
	        $this->form_validation->set_rules("email", "Email", "trim|required");
	        $this->form_validation->set_rules("description", "Description", "trim|required");
	        $this->form_validation->set_rules("phno", "Phonenumber", "trim|required");
	        // $this->form_validation->set_rules("linkedin", "Linkedin", "trim|required");
	        // $this->form_validation->set_rules("facebook", "Facebook", "trim|required");
	        // $this->form_validation->set_rules("twitter", "Twitter", "trim|required");
	        $this->form_validation->set_rules('image', 'image', 'callback_file_selected_test');
	        // exit;
		    $this->load->library('upload', $config);
			// $data = array('name' => $this->input->post('name'),'title' => $this->input->post('title'),'email' => $this->input->post('email'),'description' =>$this->input->post('description'),'phoneno' => $this->input->post('phno'),'linkedin' => $this->input->post('linkedin'),'facebook' => $this->input->post('facebook'),'twitter' => $this->input->post('twitter'));
	   		// print_r($data);
	   		if($this->form_validation->run() == FALSE)
		    {
		    	$this->load->view('includes/header');
		    	$this->load->view('topic');
		    	$this->load->view('includes/footer');
		    }
		    else
		    {
		         if ($this->upload->do_upload('image'))
		         {
		         	$image_data = $this->upload->data();
		         	$userid = $this->session->userdata('userid');
		        	$data = array('name' => $this->input->post('name'),'title' => $this->input->post('title'),'email' => $this->input->post('email'),'description' =>$this->input->post('description'),'phoneno' => $this->input->post('phno'),'linkedin' => $this->input->post('linkedin'),'facebook' => $this->input->post('facebook'),'twitter' => $this->input->post('twitter'),'	userid' => $userid,'image' => $image_data['file_name']);
		   		    $data = $this->topicsmodel->insertdata($data);
	   		   		if($data)
			   		{
			   			$this->session->set_flashdata('sucess', 'Thank you for shareing your knowledge');
			   			redirect('home');	
			   		} 	
		         }
		         else
		         {
		         	 // $error = array('error' => $this->upload->display_errors());
		    		 $this->validation->set_message('image',$this->upload->display_errors());
					 $this->load->view('includes/header');
		    	     $this->load->view('topic');
		    	     $this->load->view('includes/footer');
                     // return false;
		         }
		   		
	   	   }
	   	}

	   	public function file_selected_test()
        {
		      // echo array_sum($_FILES['image']['name']); exit;
		      $errors = $_FILES['image']['name'];
		      $this->form_validation->set_message('file_selected_test', 'Please upload your image');
		      if (!empty($errors)) 
		      {
		        return true;
		      }
		      else
		      {
		        return false;
		      }
       }

       public function topicedit()
       {
          $id = $this->uri->segment(2);       	
          $data['topics'] = $this->topicsmodel->gettopic($id);
          $this->load->view('includes/header');
          $this->load->view('updatetopic',$data);
          $this->load->view('includes/footer');
       }

	}
?>
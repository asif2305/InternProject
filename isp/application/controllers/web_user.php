<?php

class Web_user extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		
		// load library
		$this->load->library(array('table','form_validation'));
		
		// load helper
		$this->load->helper(array('form', 'url'));
		
		// load model
		$this->load->model('customer','',TRUE);
		$this->load->model('sell','',TRUE);
	}

	public function index()
	{
		$this->session->sess_destroy();
	    $this->load->view('template/template');
	}

    function user_page()
	{
		$login = $this->session->userdata('is_logged_in');

		if(!isset($login) || $login!=true)
		{
			$this->session->sess_destroy();
			redirect('login');
		}
		
	    $this->load->view('user_view_page/user_template'); 
	}
    
    public function user_profile()
    {
    	$login = $this->session->userdata('is_logged_in');

		if(!isset($login) || $login!=true)
		{
			$this->session->sess_destroy();
			redirect('login');
		}
		 $login = $this->session->userdata('id');
   
		
		$data['record'] = $this->customer->get_by_id($this->session->userdata('id'))->row();
	    $this->load->view('user_view_page/user_page_header');
	    $this->load->view('user_view_page/user_profile_view',$data);
	    $this->load->view('user_view_page/user_page_footer');
    }

	public function login()
	{
		$this->session->sess_destroy();
		$this->load->view('user_view_page/user_login');
	}

	public function change_password()
    {
  	$login = $this->session->userdata('is_logged_in');

		if(!isset($login) || $login!=true)
		{
			$this->session->sess_destroy();
			redirect('login');
		}

		$data['message'] = "";
		$this->load->view('user_view_page/user_page_header');
     $this->load->view('user_view_page/change_password_view',$data);
      $this->load->view('user_view_page/user_page_footer');
	}
	function change()
	{
		$login = $this->session->userdata('is_logged_in');
		

		if(!isset($login) || $login!=true )
		{
			$this->session->sess_destroy();
			redirect('login');
		}	
		
		$cas = $this->session->userdata('id');
		
		$this->load->library('form_validation');
		// set validation properties
		
		$data['action'] = ('change_password/change');
		$data['title'] = 'Change Password ';

		$this->_set_rules_ch();
		
		
		if ($this->form_validation->run() === FALSE) {
			
			$data['message'] = '';
			$data['employee'] = (array)$this->customer->get_by_id($cas)->row();
			
			// set common properties

			$data['title'] = 'Change Password';
		} 
		else {
			
			$this->load->model('customer');
			$this->customer->changepassword($cas,$this->input->post('password'));
			$data['employee'] = (array)$this->customer->get_by_id($cas)->row();
			// set user message
			$data['message'] = '<div class="success">Change Password successfully</div>';

			
		}
		  
			$this->load->view('user_view_page/user_page_header');
            $this->load->view('user_view_page/change_password_view',$data);
            $this->load->view('user_view_page/user_page_footer');
		   
	}


	public function user_validation()
	{
		
		$data = array();
	    $data = $this->customer->valid_user_customer(); 


		if($data['id'])
		{
			$this->session->set_userdata($data);
			return true;
		}
		else
		{
			$this->form_validation->set_message('user_validation','The username or password you entered is incorrect.');
			return false;
		}	
	}

	public function input_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_id','User ID','trim|required');
		$this->form_validation->set_rules('password','Password','required|callback_user_validation');

		if($this->form_validation->run() === TRUE)
		{
			//redirect('home/user_page');
			$this->user_page();
		}
		else
		{
			$this->login();
		}
	}

		function _set_rules_ch() {
		
		$this->load->library("form_validation");
      
  		$this->form_validation->set_rules("prvpassword","Previous Password","trim|required|callback_pass_match");
	    $this->form_validation->set_rules("password","Password","trim|required|matches[check]");
	    $this->form_validation->set_rules("check","Password Check","trim|required");
	}

	function pass_match(){
		$cas = $this->session->userdata('id');
		$res = $this->customer->get_by_id($cas)->row();

		if($res->password == md5($this->input->post('prvpassword'))) return true;
		else
		{
			$this->form_validation->set_message('pass_match','Previous Password did not match');
			return false;
		}
	}
	function transaction()
	{
		//echo $this->session->userdata('id');
		//die();
		$data['row']= $this->sell->get_by_id($this->session->userdata('id'))->result();
		$this->load->view('user_view_page/user_page_header');
        $this->load->view('user_view_page/transaction_history',$data);
        $this->load->view('user_view_page/user_page_footer');
	}
}
<?php

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	} 

	public function index()
	{
		$this->session->sess_destroy();
		$this->load->view('template/login_template');
	}

	public function user_validation()
	{
		$this->load->model("employee");
		$data = array();
	    $data = $this->employee->valid_user(); 


		if($data['name'])
		{
			$this->session->set_userdata($data);
			$this->load->model("customer");
			$this->customer->defaulter();
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
		$this->form_validation->set_rules('uname','Username','trim|required');
		$this->form_validation->set_rules('upass','Password','required|callback_user_validation');

		if($this->form_validation->run() === TRUE)
		{
			redirect('home');
		}
		else
		{
			$this->index();
		}
	}
}
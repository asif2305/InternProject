<?php

class Logout extends CI_Controller{

	function index()
	{
		$this->session->sess_destroy();
		$this->load->view('template/demo');
		redirect('login');
	}
}
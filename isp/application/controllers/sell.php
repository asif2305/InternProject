<?php

class Sell extends CI_Controller{

	function index()
	{
		$prv = $this->session->userdata('privilege');
		$login = $this->session->userdata('is_logged_in');

		if(!isset($login) || $login!=true || $prv=='It')
		{
			$this->session->sess_destroy();
			redirect('login');
		}	

		
		if($prv=='Admin')
		{
			$this->load->view("template/header_ad");
			$this->load->view("pages/sell_view");
			$this->load->view("template/footer");
		}
		else if($prv == 'Accounts')
		{
			$this->load->view("template/header_ac");
			$this->load->view("pages/sell_view");
			$this->load->view("template/footer");
		}
	}

}
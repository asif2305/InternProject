<?php

class Sell_list extends CI_Controller{

	function index()
	{
		$prv = $this->session->userdata('privilege');
		$login = $this->session->userdata('is_logged_in');

		if(!isset($login) || $login!=true || $prv=='It')
		{
			$this->session->sess_destroy();
			redirect('login');
		}	

		$data['action'] = site_url('sell_list/get_sell');
		
		if($prv=='Admin')
		{
			$this->load->view("template/header_ad");
			$this->load->view("pages/sell_view",$data);
			$this->load->view("template/footer");
		}
		else if($prv == 'Accounts')
		{
			$this->load->view("template/header_ac");
			$this->load->view("pages/sell_view",$data);
			$this->load->view("template/footer");
		}
	}

	function get_sell()
	{
		$login = $this->session->userdata('is_logged_in');
		$prev = $this->session->userdata('privilege');

		if(!isset($login) || $login!=true || $prev=='It')
		{
			$this->session->sess_destroy();
			redirect('login');
		}	
       
         
		if($this-> validate()===false) $this->index();

		else
		{
			$this->load->model('sell');
		
			// load data 
			$val = $this->sell->range_view();
			$data['nrows'] = $val->num_rows(); 
			$customers = $val->result();
			
			// generate table data
			$this->load->library('table');
			$this->table->set_empty("&nbsp;");
			$this->table->set_heading('ID','PAYMENT DATE','AMOUNT');
			
			$data['total'] = 0;
			foreach ($customers as $customer){
				$this->table->add_row(	
										    $customer->id,
										    $customer->pay_date,
											$customer->amount
									 );
				$data['total']+=$customer->amount;
			}
			
			$data['table'] = $this->table->generate();
			$data['$link_back'] = anchor('sell_list/get_sell','Back to list of Payment',array('class'=>'back'));
			
			// load view	
			if($prev == 'Admin') {
				$this->load->view("template/header_ad");
				$this->load->view("pages/sell_list_view", $data);
				$this->load->view("template/footer");
			}
			else if (($prev == 'Accounts')) {
				$this->load->view("template/header_ac");
				$this->load->view("pages/sell_list_view", $data);
				$this->load->view("template/footer");
			}
		}	
	}

	function validate()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fstdt','From Date','trim|required');
		$this->form_validation->set_rules('secdt','To Date','trim|required');

		if($this->form_validation->run() == false) return false;
		return true;
	}

}
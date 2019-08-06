<?php

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		// load model
		$this->load->model('customer','',TRUE);
	}
	public function index()
	{
		$login = $this->session->userdata('is_logged_in');
		
		if(!isset($login) || $login!=true)
		{
			$this->session->sess_destroy();
			redirect('login');
		}	
					
		
			$dat = $this->session->userdata('privilege');

			if(isset($dat) && $dat == 'Admin') {

				$tem = $this->customer->get_all();

				$data['num'] = 0;
				$data['num'] = $tem->num_rows();
				$data['customers'] = $tem->result();

				$this->load->view("template/header_ad");
				$this->load->view('pages/home_view',$data);
				$this->load->view("template/footer");
		   }
		   else if(isset($dat) && $dat == 'Accounts') {
				$this->load->view("template/header_ac");
				$this->load->view('pages/home_view_ac');
				$this->load->view("template/footer");
		   }
		   else if(isset($dat) && $dat == 'It') {

		   		$tem = $this->customer->get_all();

				$data['num'] = 0;
				$data['num'] = $tem->num_rows();
				$data['customers'] = $tem->result();
				
				$this->load->view("template/header_it");
				$this->load->view('pages/home_view',$data);
				$this->load->view("template/footer");
		   }
		
	}
	function investor_relations()
  {
    $this->load->view('web_template/template_header');
     $this->load->view('web_template/template_investor_relations');
      $this->load->view('web_template/template_footer');
  }
	
}
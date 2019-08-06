<?php

Class Invoice_gen extends CI_Controller{

	private $limit = 10;
	
	function __construct()
	{
		parent::__construct();
		
		// load library
		$this->load->library(array('table','form_validation'));
		
		// load helper
		$this->load->helper(array('form', 'url'));
		
		// load model
		$this->load->model('customer','',TRUE);
	}
	
	function index($offset = 0) {
		// offset
		
		$login = $this->session->userdata('is_logged_in');
		$prv = $this->session->userdata('privilege');


		if(!isset($login) || $login!=true || $prv=='It')
		{
			$this->session->sess_destroy();
			redirect('login');
		}	
        $prev = $this->session->userdata('privilege');

        $uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		
		// load data 
		$this->load->model('sell');
		$this->load->model('package_model');
		$tpack = $this->package_model->getall();
		$nrow = $this->customer->count_active_all()->num_rows();
		$customers = $this->customer->get_active_paged_list($this->limit, $offset)->result();
		
		//package data in array
		foreach ($tpack as $pack) {
			$ar[$pack->name] = $pack->bandwidth;
			$br[$pack->name] = $pack->price;
		}
		$sum_band = 0;
		
		// generate pagination
		$this->load->library('pagination');
		$config['base_url'] = site_url('invoice_gen/index/');
 		$config['total_rows'] = $nrow;
 		$config['per_page'] = $this->limit;
		$config['uri_segment'] = $uri_segment;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		// generate table data
		$this->load->library('table');
		$this->table->set_empty("&nbsp;");
		$this->table->set_heading('ID','NAME','AREA','IP','MAC','PACKAGE','DATA','PRICE','PAID','STATUS', 'ACTIONS','MAIL');
		
		$i = 0 + $offset;
		foreach ($customers as $customer){
			$sum_band += $ar[$customer->package];

			if($customer->paid == "Yes" && $this->sell->chk_paid($customer->cu_id)==false)
			$tem = anchor('Invoice_gen/send_email/'.$customer->cu_id,'Send',array('class'=>'button','target'=>'_blank','type'=>"submit"));
			else $tem = "Email Sended";
			$this->table->add_row(	$customer->cu_id,
									    $customer->cu_name,
										$customer->address,
										$customer->ip,
										$customer->mac,
										$customer->package,
										$ar[$customer->package],
										$br[$customer->package],
										$customer->paid,
										$customer->status,
			                         // strtoupper($customer->gender)=='M'? 'Male':'Female',
			   
			anchor('Invoice_gen/generate/'.$customer->cu_id,'Generate Invoice',array('class'=>'Invoice','target'=>'_blank','onclick'=>"return confirm('Are you want to generate Invoice for this customer')"))
			,
			$tem
			);
		}
		
		$data['table'] = $this->table->generate();
		$data['action'] = site_url('invoice_gen/clear_bill');
		$data['sum'] = $sum_band;
		// load view	
		if($prev == 'Admin') {
			$this->load->view("template/header_ad");
			$this->load->view("pages/customer_active_list_view", $data);
			$this->load->view("template/footer");
		}
		else if (($prev == 'Accounts')) {
			$this->load->view("template/header_ac");
			$this->load->view("pages/customer_active_list_view", $data);
			$this->load->view("template/footer");
		}
		
	}

	public function generate($id)
	{
		$login = $this->session->userdata('is_logged_in');
		$prv = $this->session->userdata('privilege');


		if(!isset($login) || $login!=true || $prv=='It')
		{
			$this->session->sess_destroy();
			redirect('login');
		}	

		$this->load->model('package_model');
		$tpack = $this->package_model->getall();
		$this->load->model('sell');

		$sv = $this->customer->get_by_id($id)->row();
		$this->load->model('invoice');
		$data['msg'] = "";

		foreach ($tpack as $pack) {
			$ar[$pack->name] = $pack->bandwidth;
		}

		$data['bandwidth'] = $ar[$sv->package];

		if($sv->paid == 'Yes' && $this->sell->chk_paid($id))
	    {
          echo  "This customer already paid for this month";
	    }
	    /*else if($sv->paid !='Not yet Paid' && $sv->paid != 'Defaulter')
	    {
	    	$this->customer->inv_gen($id);
			$this->load->model('invoice');
			$this->invoice->insert_data($id);
			$data['customer'] = $this->customer->get_by_id($id)->row();

			$this->load->view("template/invoice_template",$data);
	    }*/
	    else
	    {
	    	$data['customer'] = $this->customer->get_by_id($id)->row();
	    	$this->load->view("template/invoice_template_company",$data);
	    }
	}

	function send_email($id)
	{
		$login = $this->session->userdata('is_logged_in');
		$prv = $this->session->userdata('privilege');


		if(!isset($login) || $login!=true || $prv=='It')
		{
			$this->session->sess_destroy();
			redirect('login');
		}	

		$sv = $this->customer->get_by_id($id)->row();
		$this->load->model('sell');

		if($sv->paid == 'Yes' && $this->sell->chk_paid($id))
	    {
          echo  "This customer already paid for this month";die();
	    }
	    else if($sv->paid !='Not yet Paid' && $sv->paid != 'Defaulter')
	    {
	    	$res = $this->customer->get_by_id($id)->row();
	    	$this->load->model('package_model');
	    	$tem = $this->package_model->get_by_name($res->package)->row();
	    	$pack = $tem->price;
	    
	    	$bl = $res->amount;

	    	if(($bl-$pack) >= $pack)
	    	{
	    		$this->customer->amount_cut($id,$pack);
	    		$this->load->model('sell');
				$this->customer->paid($id);
				$this->sell->sell_sv($id,0);
				echo  "This customer already paid for this month";

				die();
	    	} 

	    	
	    	$this->customer->amount_cut($id,$pack);
	    	$this->customer->inv_gen($id);
			$this->load->model('invoice');
			
			$data['customer'] = $this->customer->get_by_id($id)->row();


		    $tpack = $this->package_model->getall();

		    foreach ($tpack as $pack) {
					$ar[$pack->name] = $pack->bandwidth;
			}

			$data['bandwidth'] = $ar[$res->package];


			$this->load->view("template/invoice_template",$data);
	    
		    $mail = $this->customer->get_by_id($id)->row();
		     $email = $mail->email;
			$this->load->library('email');
			$this->email->set_newline("\r\n");

			$this->email->from('rizwan.cse33@gmail.com','ISP Company'); // .... change koro...........
			$this->email->to($email); // change koro ...........
			$this->email->subject('INVIOCE MAIL');
			

			$this->email->message($this->load->view('template/invoice_template','', TRUE));


			//$path = $this->config->item('server_root');
			//$file = $path . '/isp/application/views/template/invoice_template.html';
			//$this->email->attach($file);

			if($this->email->send())
			{
				$this->invoice->insert_data($id);
				echo'You email has sent'; 
				die();
			}
			else 
			{
				show_error($this->email->print_debugger());
			}
		}
		else echo "Mail already sended";	
	}

	public function clear_bill()
	{
		$login = $this->session->userdata('is_logged_in');
		$prv = $this->session->userdata('privilege');


		if(!isset($login) || $login!=true || $prv=='It')
		{
			$this->session->sess_destroy();
			redirect('login');
		}	

		$this->_set_rules();
		if($this->form_validation->run()===false) $this->index();

		else
		{
			$this->load->model('sell');
			$id = $this->input->post('id');
			$this->customer->paid($id);
			$this->sell->sell_sv($id,$this->input->post('amount'));
			$this->customer->amount_add($id,$this->input->post('amount'));
			//$this->index();
			redirect('invoice_gen/index','refresh');
		}	
	}

	function _set_rules() {
		
		$this->load->library("form_validation");
      
	    $this->form_validation->set_rules("id","ID","required|trim");
	    $this->form_validation->set_rules("amount","Amount","required|trim");
	}

		
}
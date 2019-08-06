<?php 

class Customer_list_form extends CI_Controller {

/*  first process(.........................................) 

	function index() {

		$login = $this->session->userdata('is_logged_in');

		if(!isset($login) || $login!=true)
		{
			redirect('login');
		}	
		
		$this->load->library('pagination');
		$this->load->library('table');

		$this->table->set_heading('ID','NAME','ADDRESS','CONTACT','Email','BANDWIDTH','IP','MAC','PACKAGE','STATUS','ACTION');
        
   //$this->db->get('customer');
   //$query = "SELECT cu_id,cu_name,address,contact,email,bandwidth,ip,mac,package,status FROM customer";
   //$qury= $this->db->select('cu_id,cu_name,address,contact,email,bandwidth,ip,mac,package,status');
        		
        $config['base_url'] = site_url('customer_list_form/index/');
		$config['total_rows'] = $this->db->get('customer')->num_rows();
		$config['per_page'] = 10;
		$config['num_links'] = 20;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';

		$this->pagination->initialize($config);
        $this->db->select('cu_id,cu_name,address,contact,email,bandwidth,ip,mac,package,status');
		//$this->db->where('cu_id','cu_name','address','contact','email','bandwidth');
		$data['records'] = $this->db->get('customer', $config['per_page'],$this->uri->segment(3));
		
		$this->load->view("template/header");
		$this->load->view("pages/customer_list_view", $data);
		$this->load->view("template/footer");
	}
*/
/*second process....................*/

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

		if(!isset($login) || $login!=true)
		{
			$this->session->sess_destroy();
			redirect('login');
		}	
        $prev = $this->session->userdata('privilege');

        $uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		
		// load data 
		$customers = $this->customer->get_paged_list($this->limit, $offset)->result();
		
		// generate pagination
		$this->load->library('pagination');
		$config['base_url'] = site_url('customer_list_form/index/');
 		$config['total_rows'] = $this->customer->count_all();
 		$config['per_page'] = $this->limit;
		$config['uri_segment'] = $uri_segment;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		// generate table data
		$this->load->library('table');
		$this->table->set_empty("&nbsp;");
		$this->table->set_heading('ID','NAME','AREA','IP','MAC','PACKAGE','PAID','BALANCE','STATUS', 'ACTIONS');
		//$this->table->set_heading('ID','NAME','ADDRESS','BANDWIDTH','IP','MAC','PACKAGE','STATUS', 'ACTIONS');
		$i = 0 + $offset;
		foreach ($customers as $customer){
			$this->table->add_row($customer->cu_id, $customer->cu_name,
										$customer->address,
										//date('d-m-Y',strtotime($customer->dob)),
										//$customer->contact,
										//$customer->email,
										$customer->ip,
										$customer->mac,
										$customer->package,
										$customer->paid,
										$customer->amount,
										$customer->status,
			                         // strtoupper($customer->gender)=='M'? 'Male':'Female',
			   
			anchor('customer_list_form/view/'.$customer->cu_id,'view',array('class'=>'view')).' '.
			anchor('customer_list_form/update/'.$customer->cu_id,'update',array('class'=>'update')).' '.
			anchor('customer_list_form/delete/'.$customer->cu_id,'delete',array('class'=>'delete','onclick'=>"return confirm('Are you sure want to delete this person?')"))
			);
		}
		
		$data['table'] = $this->table->generate();
	
		// load view	
		if($prev == 'Admin') {
			$this->load->view("template/header_ad");
			$this->load->view("pages/customer_list_view", $data);
			$this->load->view("template/footer");
		}
		else if (($prev == 'Accounts')) {
			$this->load->view("template/header_ac");
			$this->load->view("pages/customer_list_view", $data);
			$this->load->view("template/footer");
		}
		else if (($prev == 'It')) {
			$this->load->view("template/header_it");
			$this->load->view("pages/customer_list_view", $data);
			$this->load->view("template/footer");
		}
	}
	
	function addPerson(){
		
		$prev = $this->session->userdata('privilege');
		$login = $this->session->userdata('is_logged_in');

		if(!isset($login) || $login!=true || $prev=='It')
		{
			$this->session->sess_destroy();
			redirect('login');
		}	

		// set common properties
		$prev = $this->session->userdata('privilege');
	//	
		//$data['title'] = 'Add new customer';
		$data['action'] = site_url('customer_list_form/addPerson');
		$data['link_back'] = anchor('customer_list_form/','Back to list of persons',array('class'=>'back'));
		
		$this->load->model('package_model');
   		$data['res'] = $this->package_model->getall();
   		$this->load->model("sell");

		// set validation properties
		
		$this->_set_rules($prev);
		
		// run validation
		if ($this->form_validation->run() === FALSE){
			
			//$data['title'] = 'Add new customer';
			$data['message'] = '';
			$data['link_back'] = anchor('customer_list_form/','Back to list of persons',array('class'=>'back'));
		    
		  if($prev == 'Admin') {
			$this->load->view("template/header_ad");
			$this->load->view("pages/customer_form_view",$data);
			$this->load->view("template/footer");
		  }
		  else if($prev == 'Accounts') {
			$this->load->view("template/header_ac");
			$this->load->view("pages/customer_form_ac_view",$data);
			$this->load->view("template/footer");
		  }
		
		}

        else {
			// save data
			if($prev == 'Admin') {
			$customer = array('cu_name' => $this->input->post('name'),
							  'address' => $this->input->post('address'),
							  'dob' => date('Y-m-d', strtotime($this->input->post('dob'))),
							  'gender' => $this->input->post('gender'),
							  'contact' => $this->input->post('phone'),
							  'email' => $this->input->post('email'),
							  'password' => md5($this->input->post('password')),
							  //'bandwidth' => $this->input->post('bandwidth'),
							  'ip' => $this->input->post('ip'),
							  'mac' => $this->input->post('mac'),
							  'package' => $this->input->post('package'),
							  'paid' => $this->input->post('paid'),
							  'status' => $this->input->post('status')
							);
		    }
		    else if($prev == 'Accounts') {
			$customer = array('cu_name' => $this->input->post('name'),
							  'address' => $this->input->post('address'),
							  'dob' => date('Y-m-d', strtotime($this->input->post('dob'))),
							  'gender' => $this->input->post('gender'),
							  'contact' => $this->input->post('phone'),
							  'email' => $this->input->post('email'),
							  'password' => md5($this->input->post('password')),
							  //'bandwidth' => $this->input->post('bandwidth'),
							  'package' => $this->input->post('package'),
							  'paid' => $this->input->post('paid'),
							  'status' => $this->input->post('status')
							);
		    }

		    else if($prev == 'It') {
			$customer = array('ip' => $this->input->post('ip'),
							  'mac' => $this->input->post('mac')
							);
		    }

			$id = $this->customer->save($customer);
			$this->customer->amount_add($id,$this->input->post('amount'));
			$this->sell->sell_sv($id,$this->input->post('amount'));
			
			
			// set form input name="id"
			$this->validation->id = $id;
			
			// set user message
			$data['message'] = '<div class="success"> add new customer successfully </div>';
            
           if($prev == 'Admin') {
			$this->load->view("template/header_ad");
			$this->load->view("pages/customer_form_view",$data);
			$this->load->view("template/footer");
		   }
		   else if($prev == 'Accounts') {
			$this->load->view("template/header_ac");
			$this->load->view("pages/customer_form_ac_view",$data);
			$this->load->view("template/footer");
		   }
		  
		}
	}
	
	function view($id){

		$login = $this->session->userdata('is_logged_in');

		if(!isset($login) || $login!=true)
		{
			$this->session->sess_destroy();
			redirect('login');
		}	

		$prev = $this->session->userdata('privilege');
		// set common properties
		$data['title'] = 'Customer Details Information';
		$data['link_back'] = anchor('customer_list_form/','Back to list of persons',array('class'=>'back'));
		
		// get person details
		$data['customer'] = $this->customer->get_by_id($id)->row();
		
		// load view
		if($prev == 'Admin') {
			$this->load->view("template/header_ad");
			$this->load->view("pages/customerView",$data);
			$this->load->view("template/footer");
		}
		else if($prev == 'Accounts') {
			$this->load->view("template/header_ac");
			$this->load->view("pages/customerView",$data);
			$this->load->view("template/footer");
		}
		else if($prev == 'It') {
			$this->load->view("template/header_it");
			$this->load->view("pages/customerView",$data);
			$this->load->view("template/footer");
		}
	}
	
	
	function update($id){

		$login = $this->session->userdata('is_logged_in');

		if(!isset($login) || $login!=true)
		{
			$this->session->sess_destroy();
			redirect('login');
		}	

		$prev = $this->session->userdata('privilege');
		
		// set common properties
		$data['title'] = 'Update Customer Information';
		$this->load->library('form_validation');
		
		// set validation properties
	
		$data['action'] = ('customer_list_form/update/'.$id);
		$this->load->model('package_model');
   		$data['res'] = $this->package_model->getall();
		$this->_set_rules_upd($prev);
		
		// run validation
		if ($this->form_validation->run() === FALSE){
			
			$data['message'] = '';
			$data['customer'] = (array)$this->customer->get_by_id($id)->row();
			
			// set common properties

			$data['title'] = 'Update customer Information';
			$data['message'] = '';

		} else {
			// save data
			$id = $this->input->post('cu_id');
			
			if($prev == 'Admin') {
			$customer = array('cu_name' => $this->input->post('name'),
							  'address' => $this->input->post('address'),
							  'dob' => date('Y-m-d', strtotime($this->input->post('dob'))),
							  'gender' => $this->input->post('gender'),
							  'contact' => $this->input->post('phone'),
							  'email' => $this->input->post('email'),
							 // 'bandwidth' => $this->input->post('bandwidth'),
							  'ip' => $this->input->post('ip'),
							  'mac' => $this->input->post('mac'),
							  'package' => $this->input->post('package'),
							  'paid' => $this->input->post('paid'),
							  'status' => $this->input->post('status')
							);
			}

			else if($prev == 'Accounts') {
			$customer = array('cu_name' => $this->input->post('name'),
							  'address' => $this->input->post('address'),
							  'dob' => date('Y-m-d', strtotime($this->input->post('dob'))),
							  'gender' => $this->input->post('gender'),
							  'contact' => $this->input->post('phone'),
							  'email' => $this->input->post('email'),
							//  'bandwidth' => $this->input->post('bandwidth'),
							  'package' => $this->input->post('package'),
							  'paid' => $this->input->post('paid'),
							  'status' => $this->input->post('status')
							);
		    }

		    else if($prev == 'It') {
			$customer = array('ip' => $this->input->post('ip'),
							  'mac' => $this->input->post('mac'),
							  'status' => $this->input->post('status')
							);
		    }

			$this->customer->update($id,$customer);
			$data['customer'] = (array)$this->customer->get_by_id($id)->row();
			// set user message
			$data['message'] = '<div class="success">Update this customer Information successfully</div>';
		}
		
		$data['link_back'] = anchor('customer_list_form/','Back to list of persons',array('class'=>'back'));
		
		// load view
		if($prev == 'Admin') {
			$this->load->view("template/header_ad");
			$this->load->view("pages/customerUpdate",$data);
			$this->load->view("template/footer");
	    }
	    else if($prev == 'Accounts') {
			$this->load->view("template/header_ac");
			$this->load->view("pages/customerUpdate_ac",$data);
			$this->load->view("template/footer");
	    }
	    else if($prev == 'It') {
			$this->load->view("template/header_it");
			$this->load->view("pages/customerUpdate_it",$data);
			$this->load->view("template/footer");
	    }
	}
	
	function delete($id){

		$login = $this->session->userdata('is_logged_in');

		if(!isset($login) || $login!=true)
		{
			$this->session->sess_destroy();
			redirect('login');
		}	
		
		// delete person
		$this->customer->delete($id);
		
		// redirect to person list page
		redirect('customer_list_form/index/','refresh');
	}
	
		
	// validation rules
	function _set_rules($prev) {
		
		$this->load->library("form_validation");
      
        if($prev == 'Admin') {
			$this->form_validation->set_rules("name","Name","required|trim");
			$this->form_validation->set_rules("address","Address","required|trim");
			$this->form_validation->set_rules('dob', 'Date of birth', 'required|callback_valid_date');
			$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
			$this->form_validation->set_rules("email","Email","required|trim|valid_email");
			$this->form_validation->set_rules("phone","Phone number","trim|required");
			$this->form_validation->set_rules("password","Password","trim|required|matches[check]|max_length[30]");
			$this->form_validation->set_rules("check","Password Check","trim|required");
			//$this->form_validation->set_rules("bandwidth","Bandwidth","trim|required");
			$this->form_validation->set_rules("ip","IP address","trim|required");
			$this->form_validation->set_rules("mac","MAC adress","trim|required");	
			$this->form_validation->set_rules("package","Package","trim|required");
			$this->form_validation->set_rules("amount","Amount","trim|required");
			$this->form_validation->set_rules("paid","Paid","trim|required");
			$this->form_validation->set_rules("status","Status","trim|required");
	    }
	    else if($prev == 'Accounts') {
			$this->form_validation->set_rules("name","Name","required|trim");
			$this->form_validation->set_rules("address","Address","required|trim");
			$this->form_validation->set_rules('dob', 'Date of birth', 'required|callback_valid_date');
			$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
			$this->form_validation->set_rules("email","Email","required|trim|valid_email");
			$this->form_validation->set_rules("phone","Phone number","trim|required");
			$this->form_validation->set_rules("password","Password","trim|required|matches[check]|max_length[30]");
			$this->form_validation->set_rules("check","Password Check","trim|required");
			//$this->form_validation->set_rules("bandwidth","Bandwidth","trim|required");
		    $this->form_validation->set_rules("package","Package","trim|required");
			$this->form_validation->set_rules("paid","Paid","trim|required");
			$this->form_validation->set_rules("status","Status","trim|required");
	    }
	    else if($prev == 'It') {
			$this->form_validation->set_rules("ip","IP address","trim|required");
			$this->form_validation->set_rules("mac","MAC adress","trim|required");
	    }
	}

	function _set_rules_upd($prev) {
		
		$this->load->library("form_validation");
      
        if($prev == 'Admin') {
			$this->form_validation->set_rules("name","Name","required|trim");
			$this->form_validation->set_rules("address","Address","required|trim");
			$this->form_validation->set_rules('dob', 'Date of birth', 'required|callback_valid_date');
			$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
			$this->form_validation->set_rules("email","Email","required|trim|valid_email");
			$this->form_validation->set_rules("phone","Phone number","trim|required");
			//$this->form_validation->set_rules("bandwidth","Bandwidth","trim|required");
			$this->form_validation->set_rules("ip","IP address","trim|required");
			$this->form_validation->set_rules("mac","MAC adress","trim|required");	
			$this->form_validation->set_rules("package","Package","trim|required");
			$this->form_validation->set_rules("paid","Paid","trim|required");
			$this->form_validation->set_rules("status","Status","trim|required");
	    }
	    else if($prev == 'Accounts') {
			$this->form_validation->set_rules("name","Name","required|trim");
			$this->form_validation->set_rules("address","Address","required|trim");
			$this->form_validation->set_rules('dob', 'Date of birth', 'required|callback_valid_date');
			$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
			$this->form_validation->set_rules("email","Email","required|trim|valid_email");
			$this->form_validation->set_rules("phone","Phone number","trim|required");
			//$this->form_validation->set_rules("bandwidth","Bandwidth","trim|required");
		    $this->form_validation->set_rules("package","Package","trim|required");
			$this->form_validation->set_rules("paid","Paid","trim|required");
			$this->form_validation->set_rules("status","Status","trim|required");
	    }
	    else if($prev == 'It') {
			$this->form_validation->set_rules("ip","IP address","trim|required");
			$this->form_validation->set_rules("mac","MAC adress","trim|required");
	    }
	}



	function valid_date($str)
	{
		if(!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $str))
		{
			$this->form_validation->set_message('valid_date', 'date format is not valid. yyyy-mm-dd');
			return false;
		}
		else
		{
			return true;
		}
	}
}
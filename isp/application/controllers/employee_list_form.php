<?php 

class employee_list_form extends CI_Controller {

	private $limit = 7;
	
	function __construct()
	{
		parent::__construct();
		
		// load library
		$this->load->library(array('table','form_validation'));
		
		// load helper
		$this->load->helper(array('form', 'url'));
		
		// load model
		$this->load->model('employee','',TRUE);
	}
	
	function index($offset = 0){
		// offset
		
		$login = $this->session->userdata('is_logged_in');
		$prv = $this->session->userdata('privilege');

		if(!isset($login) || $login!=true || $prv != 'Admin')
		{
			$this->session->sess_destroy();
			redirect('login');
		}	

		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		
		// load data 
		$employees = $this->employee->get_paged_list($this->limit, $offset)->result();
		
		// generate pagination
		$this->load->library('pagination');
		$config['base_url'] = site_url('employee_list_form/index/');
 		$config['total_rows'] = $this->employee->count_all();
 		$config['per_page'] = $this->limit;
		$config['uri_segment'] = $uri_segment;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		// generate table data
		$this->load->library('table');
		$this->table->set_empty("&nbsp;");
		$this->table->set_heading('NO','USERNAME','NAME','GENDER','SALARY','PRIVILEGE', 'ACTIONS');
		//$this->table->set_heading('NO','USERNAME','NAME','GENDER','BIRTHDAY','PHONE','EMAIL','PRIVILEGE', 'ACTIONS');
		
		$i = 0 + $offset;
		foreach ($employees as $employee){
			$this->table->add_row(++$i, $employee->username,
										$employee->name,
										strtoupper($employee->gender)=='M'? 'Male':'Female',
										//date('d-m-Y',strtotime($employee->dob)),
										//$employee->phone,
										//$employee->email,
										$employee->salary,
										$employee->privilege,			  
			   
				anchor('employee_list_form/view/'.$employee->username,'view',array('class'=>'view')).' '.
				anchor('employee_list_form/update/'.$employee->username,'update',array('class'=>'update')).' '.
				anchor('employee_list_form/delete/'.$employee->username,'delete',array('class'=>'delete','onclick'=>"return confirm('Are you sure want to delete this person?')"))
			);
		}
		$data['table'] = $this->table->generate();
		
		// load view
		$this->load->view("template/header_ad");
		$this->load->view("pages/employee_list_view", $data);
		$this->load->view("template/footer");
	}
	
		
	function addemployee(){

		$login = $this->session->userdata('is_logged_in');
		$prv = $this->session->userdata('privilege');

		if(!isset($login) || $login!=true || $prv != 'Admin')
		{
			$this->session->sess_destroy();
			redirect('login');
		}	
		// set common properties

		$data['title'] = 'Create New Employee';
		$data['action'] = site_url('employee_list_form/addemployee');
		$data['link_back'] = anchor('employee_list_form/','Back to list of persons',array('class'=>'back'));
		
		// set validation properties
		
		$this->_set_rules();
		
		// run validation
		if ($this->form_validation->run() === FALSE){
			
			
			$data['message'] = '';
			$data['employee']['username']='';
			$data['employee']['password']='';
			$data['employee']['check']='';
			$data['employee']['name']='';
			$data['employee']['gender']='';
			$data['employee']['dob']='';
			$data['employee']['email']='';
			$data['employee']['phone']='';
			$data['employee']['salary']='';
			$data['employee']['privilege']='';
			$data['link_back'] = anchor('employee_list_form/','Back to list of persons',array('class'=>'back'));
		    
		   
			$this->load->view("template/header_ad");
			$this->load->view("pages/employee_create_view",$data);
			$this->load->view("template/footer");

		} 
        else {
			// save data
			$employee = array(
								'username' => $this->input->post('username'),
								'password' => md5($this->input->post('password')),
								'name' => ucfirst($this->input->post('name')),
								'gender' => $this->input->post('gender'),
							    'dob' => date('Y-m-d', strtotime($this->input->post('dob'))),
								'email' => $this->input->post('email'),
								'phone' => $this->input->post('phone'),
								'salary' => $this->input->post('salary'),
								'privilege' => $this->input->post('privilege')
		); 
			
			$id = $this->employee->save($employee);
			
			// set form input name="id"
			$this->validation->id = $id;
			
			// set user message
			$data['message'] = '<div class="success"> Add new employee successfully </div>';
            $this->load->view("template/header_ad");
			$this->load->view("pages/employee_create_view",$data);
			$this->load->view("template/footer");
		}
		
	}
	
	function view($id){

		$login = $this->session->userdata('is_logged_in');
		$prv = $this->session->userdata('privilege');

		if(!isset($login) || $login!=true || $prv != 'Admin')
		{
			$this->session->sess_destroy();
			redirect('login');
		}	

		// set common properties
		$data['title'] = 'employee Details Information';
		$data['link_back'] = anchor('employee_list_form/','Back to list of persons',array('class'=>'back'));
		
		// get person details
		$data['employee'] = $this->employee->get_by_id($id)->row();
		
		// load view
		$this->load->view("template/header_ad");
		$this->load->view("pages/employeeView",$data);
		$this->load->view("template/footer");
	}
	
	
	function update($id){

		$login = $this->session->userdata('is_logged_in');
		$prv = $this->session->userdata('privilege');

		if(!isset($login) || $login!=true || $prv != 'Admin')
		{
			$this->session->sess_destroy();
			redirect('login');
		}	

		// set common properties
		$data['title'] = 'Update employee Information';
		$this->load->library('form_validation');
		// set validation properties
		
		$data['action'] = ('employee_list_form/update/'.$id);
		
		$this->_set_rules();
		
		// run validation
		if ($this->form_validation->run() === FALSE){
			
			$data['message'] = '';
			$data['employee'] = (array)$this->employee->get_by_id($id)->row();
			
			// set common properties

			$data['title'] = 'Update employee Information';
			

		} else {
			// save data
			$id = $this->input->post('username');
			$employee = array(
								'username' => $this->input->post('username'),
								'password' => md5($this->input->post('password')),
								'name' => ucfirst($this->input->post('name')),
								'gender' => $this->input->post('gender'),
							    'dob' => date('Y-m-d', strtotime($this->input->post('dob'))),
								'email' => $this->input->post('email'),
								'phone' => $this->input->post('phone'),
								'salary' => $this->input->post('salary'),
								'privilege' => $this->input->post('privilege')
		                     ); 

			$this->employee->update($id,$employee);
			$data['employee'] = (array)$this->employee->get_by_id($id)->row();
			// set user message
			$data['message'] = '<div class="success">update this employee information successfully</div>';
		}
		
		$data['link_back'] = anchor('employee_list_form/','Back to list of persons',array('class'=>'back'));
		
		// load view
		
			$this->load->view("template/header_ad");
			$this->load->view("pages/employeeUpdate",$data);
			$this->load->view("template/footer");
	}
	
	function delete($id){

		$login = $this->session->userdata('is_logged_in');
		$prv = $this->session->userdata('privilege');

		if(!isset($login) || $login!=true || $prv != 'Admin')
		{
			$this->session->sess_destroy();
			redirect('login');
		}	

		$prv = $this->session->userdata('privilege');
		if($prv != 'Admin') $this->index();

		// delete person
		$this->employee->delete($id);
		
		// redirect to person list page
		redirect('employee_list_form/index/','refresh');
	}
	
	function change() {

		$login = $this->session->userdata('is_logged_in');
		$prv = $this->session->userdata('privilege');

		if(!isset($login) || $login!=true || $prv != 'Admin')
		{
			$this->session->sess_destroy();
			redirect('login');
		}	
		
		$prev = $this->session->userdata('privilege');
		$emp = $this->session->userdata('username');

		$this->load->library('form_validation');
		// set validation properties
		
		$data['action'] = ('employee_list_form/change/');
		$data['title'] = 'Change Password ';

		$this->_set_rules_ch();
		
		// run validation
		if ($this->form_validation->run() === FALSE) {
			
			$data['message'] = '';
			$data['employee'] = (array)$this->employee->get_by_id($emp)->row();
			
			// set common properties

			$data['title'] = 'Change Password';
		} 
		else {
			// save data
			
			if($prev == 'Admin' || $prev == 'Accounts' || $prev == 'It') {
				$employee = array(
			  					  'password' => md5($this->input->post('check'))
					         );
			} 

			$this->employee->changepassword($emp,$employee);
			$data['employee'] = (array)$this->employee->get_by_id($emp)->row();
			// set user message
			$data['message'] = '<div class="success">Change Password successfully</div>';

			//redirect('','refresh'); here is a problem for browser refresh..... have to solve
		}
		    // load view
			if($prev == 'Admin') {
				$this->load->view("template/header_ad");
				$this->load->view('pages/changepassword_view',$data);
				$this->load->view("template/footer");
		    }
		    else if($prev == 'Accounts') {
				$this->load->view("template/header_ac");
				$this->load->view('pages/changepassword_view',$data);
				$this->load->view("template/footer");
		    }
		    else if($prev == 'It') {
				$this->load->view("template/header_it");
				$this->load->view('pages/changepassword_view',$data);
				$this->load->view("template/footer");
		    }
	}

	public function same_name()
    {
    	$this->load->model('employee');

    	if($this->employee->test_name())
    	{
    		$this->form_validation->set_message('same_name','Please enter a new username this name is already taken.');
    		return false;
    	}
    	else
    	{
    		return true;
    	}	
    }
		
	// validation rules
	function _set_rules(){
		
		$this->load->library('form_validation');
		//field name, error message, validation rules

		$this->form_validation->set_rules('username', 'Username', 'trim|required|callback_same_name');
		$this->form_validation->set_rules("password","Password","trim|required|matches[check]|max_length[30]");
		$this->form_validation->set_rules("check","Password Check","trim|required");
		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('gender','Gender','trim|required');
		$this->form_validation->set_rules('dob', 'Birthday', 'required|callback_valid_date');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('phone','Phone number','trim|required');
		$this->form_validation->set_rules('salary','Salary','trim|required');
		$this->form_validation->set_rules('privilege','Privilege','trim|required');
	}

	function _set_rules_ch() {
		
		$this->load->library("form_validation");
      
  		$this->form_validation->set_rules("prvpassword","Previous Password","trim|required|callback_pass_match");
	    $this->form_validation->set_rules("password","New Password","trim|required|matches[check]|max_length[30]");
	    $this->form_validation->set_rules("check","Re-enter Password","trim|required");
	}
	
	function pass_match(){
		$emp = $this->session->userdata('username');
		$res = $this->employee->get_by_id($emp)->row();

		if($res->password == md5($this->input->post('prvpassword'))) return true;
		else
		{
			$this->form_validation->set_message('pass_match','Previous Password did not match');
			return false;
		}
	}

	function valid_date($str)
	{
		if(!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $str))
		{
			$this->form_validation->set_message('valid_date', 'date format is not valid. dd-mm-yyyy');
			return false;
		}
		else
		{
			return true;
		}
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Change_password extends CI_Controller
{
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
    public function index()
   {
  	$login = $this->session->userdata('is_logged_in');

		if(!isset($login) || $login!=true)
		{
			$this->session->sess_destroy();
			redirect('login');
		}
		$this->load->view('user_view_page/user_page_header');
     $this->load->view('user_view_page/change_password_view');
      $this->load->view('user_view_page/user_page_footer');
	}
	function change()
	{
		$login = $this->session->userdata('is_logged_in');
		$emp = $this->session->userdata('username_personal');

		if(!isset($login) || $login!=true )
		{
			$this->session->sess_destroy();
			redirect('login');
		}	
		
	
		
		$this->load->library('form_validation');
		// set validation properties
		
		$data['action'] = ('change_password/change');
		$data['title'] = 'Change Password ';

		$this->_set_rules_ch();
		
		
		if ($this->form_validation->run() === FALSE) {
			
			$data['message'] = '';
			$data['employee'] = (array)$this->customer->get_by_id($emp)->row();
			
			// set common properties

			$data['title'] = 'Change Password';
		} 
		else {
			
			$this->load->model('customer');
			$this->customer->changepassword();
			$data['employee'] = (array)$this->customer->get_by_id($emp)->row();
			// set user message
			$data['message'] = '<div class="success"><button type="button" class="btn btn-default btn-lg">
               <span class="glyphicon glyphicon-saved"><?php echo $message; ?></span>  
                  Change Password Successfully</button></div>';

			
		}
		  
			$this->load->view('user_view_page/user_page_header');
            $this->load->view('user_view_page/change_password_view',$data);
            $this->load->view('user_view_page/user_page_footer');
		   
	}

		function _set_rules_ch() {
		
		$this->load->library("form_validation");
      
  		$this->form_validation->set_rules("prvpassword","Previous Password","trim|required");
	    $this->form_validation->set_rules("check","Re-enter Password","trim|required");
	}
	

}
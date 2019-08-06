<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us extends CI_Controller {

  
  public function index()
  {
  	$this->session->sess_destroy();
    $this->load->view('web_template/template_header');
     $this->load->view('web_template/template_contact_us');
      $this->load->view('web_template/template_footer');
  }
  
  }




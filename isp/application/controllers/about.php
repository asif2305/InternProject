<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

  function __construct()
	{
		parent::__construct();
		
		
	}
  public function our_company()
  {
    
    $this->load->view('web_template/template_header');
       $this->load->view('web_template/template_our_company');
      $this->load->view('web_template/template_footer');
  }
  function our_culture()
  {
    $this->load->view('web_template/template_header');
      $this->load->view('web_template/template_our_culture');
    $this->load->view('web_template/template_footer');
  }
 function our_brand()
 {
   $this->load->view('web_template/template_header');
      $this->load->view('web_template/template_our_brand');
    $this->load->view('web_template/template_footer');
 }
 function media_center()
 {
  $this->load->view('web_template/template_header');
      $this->load->view('web_template/template_media_center');
    $this->load->view('web_template/template_footer');
 }
 function enterprise()
 {
  $this->load->view('web_template/template_header');
      $this->load->view('web_template/template_enterprise');
    $this->load->view('web_template/template_footer');
 }
 function bank()
 {
  $this->load->view('web_template/template_header');
      $this->load->view('web_template/template_bank');
    $this->load->view('web_template/template_footer');
 }
}


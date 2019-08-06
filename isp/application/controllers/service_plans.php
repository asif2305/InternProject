<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Service_plans extends CI_Controller {

  function __construct()
	{
		parent::__construct();
		
		
	}
  public function postpaid_plans()
  {
    $this->load->model('Package_model');
    $data['row']=$this->Package_model->getall();
    $this->load->view('web_template/template_header');
    $this->load->view('web_template/template_postpaid_plans',$data);
    $this->load->view('web_template/template_footer');
  }
  public function prepaid_plans()
  {
    $this->load->view('web_template/template_header');
    $this->load->view('web_template/template_prepaid_plans');
    $this->load->view('web_template/template_footer');
  }
  public function corporate_solution()
  {
    $this->load->view('web_template/template_header');
    $this->load->view('web_template/template_corporate_solution');
    $this->load->view('web_template/template_footer');
  }
 public function device()
  {
    $this->load->view('web_template/template_header');
    $this->load->view('web_template/template_device');
    $this->load->view('web_template/template_footer');
  }
}
?>

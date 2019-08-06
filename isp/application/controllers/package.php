<?php 

class Package extends CI_Controller { 

  private $limit = 7;
  
  function __construct()  {
    parent::__construct();
    
    // load library
    $this->load->library(array('table','form_validation'));
    
    // load helper
    $this->load->helper(array('form', 'url'));
    
    // load model
    $this->load->model('package_model','',TRUE);
  }
  
  function index($offset = 0) {
    // offset
    
    $login = $this->session->userdata('is_logged_in');
    
    if(!isset($login) || $login!=true )
    {
      $this->session->sess_destroy();
      redirect('login');
    } 

    $uri_segment = 3;
    $offset = $this->uri->segment($uri_segment);
    
    // load data 
    $packages = $this->package_model->get_paged_list($this->limit, $offset)->result();
    
    // generate pagination
    $this->load->library('pagination');
    $config['base_url'] = site_url('package/index/');
    $config['total_rows'] = $this->package_model->count_all();
    $config['per_page'] = $this->limit;
    $config['uri_segment'] = $uri_segment;
    $this->pagination->initialize($config);
    $data['pagination'] = $this->pagination->create_links();
    
    // generate table data
    $this->load->library('table');
    $this->table->set_empty("&nbsp;");
    
    // load view
    $prev = $this->session->userdata('privilege');

    if($prev == 'Admin') {

      $this->table->set_heading('NO','NAME','BANDWIDTH','SPEED','PRICE','DESCRIPTION','ACTIONS');
        $i = 0 + $offset;
      foreach ($packages as $package){
        $this->table->add_row(++$i,
                               $package->name,
                               $package->bandwidth,
                               $package->speed,
                               $package->price,
                               $package->description,
           
         //anchor('package/view/'.$package->name,'view',array('class'=>'view')).' '.
          anchor('package/update/'.$package->no,'update',array('class'=>'update')).' '.
          anchor('package/delete/'.$package->no,'delete',array('class'=>'delete','onclick'=>"return confirm('Are you sure want to delete this Package?')"))
        );
      }
      $data['table'] = $this->table->generate();

      $this->load->view("template/header_ad");
      $this->load->view("pages/package_view",$data);
      $this->load->view("template/footer");
    }
    else
    {
      $this->table->set_heading('NO','NAME','BANDWIDTH','SPEED','PRICE','DESCRIPTION');
          $i = 0 + $offset;
        foreach ($packages as $package){
          $this->table->add_row(++$i,
                                 $package->name,
                                 $package->bandwidth,
                                 $package->speed,
                                 $package->price,
                                 $package->description
             
           //anchor('package/view/'.$package->name,'view',array('class'=>'view')).' '.
          );
        }
        $data['table'] = $this->table->generate();

        if (($prev == 'Accounts')) {
          $this->load->view("template/header_ac");
          $this->load->view("pages/package_view",$data);
          $this->load->view("template/footer");
        }
        else if (($prev == 'It')) {
          $this->load->view("template/header_it");
          $this->load->view("pages/package_view",$data);
          $this->load->view("template/footer");
        }
    }  

  }
  

  
  function addpackage(){

    $prev = $this->session->userdata('privilege');
    $login = $this->session->userdata('is_logged_in');
    
    if(!isset($login) || $login!=true || $prev!='Admin')
    {
      $this->session->sess_destroy();
      redirect('login');
    } 
    // set common properties

    $data['title'] = 'Create New Package';
    $data['action'] = site_url('package/addpackage');
    $data['link_back'] = anchor('package/index/','Back to list of packages',array('class'=>'back'));
    
    // set validation properties
    
    $this->_set_rules();
    
    // run validation
    if ($this->form_validation->run() === FALSE){
      
      
      $data['message'] = '';
      $data['package']['name']='';
      $data['package']['bandwidth']='';
      $data['package']['spped']='';
      $data['package']['price']='';
      $data['package']['description']='';
      
      $data['link_back'] = anchor('package/index/','Back to list of packages',array('class'=>'back'));
        
    } 
    else {
      // save data
      $package = array(
                       'name' => ucfirst($this->input->post('name')),
                       'bandwidth' => $this->input->post('bandwidth'),
                       'speed' => $this->input->post('speed'),
                       'price' => $this->input->post('price'),
                       'description' => $this->input->post('description')
                       ); 
      
      $id = $this->package_model->save($package);
      
      // set form input name="id"
      $this->validation->id = $id;
      
      // set user message
      $data['message'] = '<div class="success"> Add new Package successfully </div>';
            

    }
    
        $this->load->view("template/header_ad");
        $this->load->view("pages/package_create_view",$data);
        $this->load->view("template/footer");
  }
  
  function update($id){

    $prev = $this->session->userdata('privilege');
    $login = $this->session->userdata('is_logged_in');
    
    if(!isset($login) || $login!=true || $prev!='Admin')
    {
      $this->session->sess_destroy();
      redirect('login');
    } 
    
    // set common properties
    $data['title'] = 'Update Package Information';
    $this->load->library('form_validation');
    
    // set validation properties
  
    $data['action'] = ('package/update/'.$id);
    
    $this->_set_rules();
    
    // run validation
    if ($this->form_validation->run() === FALSE){
      
      $data['message'] = '';
      $data['package'] = (array)$this->package_model->get_by_id($id)->row();
      
      // set common properties

      $data['title'] = 'Update Package Information';
      

    } else {
      // save data
      $id = $this->input->post('no');
      if($prev == 'Admin') {
          $package = array(
                           'name' => ucfirst($this->input->post('name')),
                           'bandwidth' => $this->input->post('bandwidth'),
                           'speed' => $this->input->post('speed'),
                           'price' => $this->input->post('price'),
                           'description' => $this->input->post('description')
                           ); 
        }

      $this->package_model->update($id,$package);
      $data['package'] = (array)$this->package_model->get_by_id($id)->row();
      // set user message
      $data['message'] = '<div class="success">update this package information successfully</div>';
    }
    
    $data['link_back'] = anchor('package/index/','Back to list of packages',array('class'=>'back'));
 
       // load view
      
        $this->load->view("template/header_ad");
        $this->load->view("pages/package_update",$data);
        $this->load->view("template/footer");
     
      
  
  }
  
  function delete($id){

    $prev = $this->session->userdata('privilege');
    $login = $this->session->userdata('is_logged_in');
    
    if(!isset($login) || $login!=true || $prev!='Admin')
    {
      redirect('login');
    } 

    // delete person
    $this->package_model->delete($id);
    
    // redirect to person list page
    redirect('package/index/','refresh');
  }

  function _set_rules() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('name','Name','trim|required');
    $this->form_validation->set_rules('bandwidth','Bandwidth','trim|required');
    $this->form_validation->set_rules('speed','Speed','trim|required');
    $this->form_validation->set_rules('price','Price','trim|required');

  }

}
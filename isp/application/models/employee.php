<?php

class Employee extends CI_Model
{
	private $unique_key='username';
	private $table_name='employee';
	
	
	function __consturct(){
		parent::__construct();	
	}

   
	public function getAll()
	{
		$q = $this->db->get('employee');

		if($q->num_rows() > 0)
		{
			return $q->result();
		}

		
	}
	
	public function create_new_emp()
	{
		$new_emp_insert_data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'name' => ucfirst($this->input->post('name')),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'privilege' => $this->input->post('privilege')
		);

		$q = $this->db->insert('employee', $new_emp_insert_data);
		return $q;
	}

	public function valid_user()
	{
		$query = "select * from employee where username=? and password=?";

		$data = array(
			$this->input->post("uname"),
			md5($this->input->post("upass"))
		);

		$res = $this->db->query($query,$data);

		$info = array();

		if($res->num_rows() == 1) 
		{
			foreach ($res->result() as $row) 
			{
	    		$info = array(
	        	 'username' => $row->username,
	        	 'name' => $row->name,
	         	 'privilege' => $row->privilege,
	         	 'is_logged_in' => true
	    		);
			}

			return $info;
		}
	}
	public function changepassword($unique,$person) 
	{
		$this->db->where($this->unique_key,$unique);
		$this->db->update($this->table_name, $person);
    }

	
	function count_all(){
		return $this->db->count_all($this->table_name);
	}

	function list_all(){
		$this->db->order_by('gender','asc');
		return $this->db->get($table_name);
	}
	
	
	function get_paged_list($limit = 7, $offset = 0){
		$this->db->order_by('gender','asc');
		return $this->db->get($this->table_name, $limit, $offset);
	}
	
	function get_by_id($unique){
		$this->db->where($this->unique_key,$unique);
		return $this->db->get($this->table_name);
	}
	
	/*function get_by_name()
	{
		$name = $this->input->post('username');
		$this->db->where('username',$name);
		return $this->db->get('employee');
	}*/
	function save($employee){
		$this->db->insert($this->table_name, $employee);
		return $this->db->insert_id();
	}
	
	function update($unique,$person){
		$this->db->where($this->unique_key,$unique);
		$this->db->update($this->table_name, $person);
	}
	
	function delete($unique){
		$this->db->where('username', $unique);
		$this->db->delete($this->table_name);
	}

	public function test_name()
	{
		$name = $this->input->post('username');
		$this->db->where('username',$name);
		$res = $this->db->get('employee');

		if($res->num_rows() > 0) return true;
		return false;

	}

}

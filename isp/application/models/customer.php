<?php

class Customer extends CI_Model
{
	private $primary_key='cu_id';
	private $table_name='customer';
	
	
	function __consturct(){
		parent::__construct();	
	}

	function get_all()
	{
		$q = $this->db->get('customer');

		if($q->num_rows() > 0)
		{
			return $q;
		}	
	}

	function insert_customer()
	{
		$data = array(
				'cu_name' => $this->input->post('name'),
				'address' => $this->input->post('address'),
				'dob' => $this->input->post('dob'),
				'contact' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
				'bandwidth' => $this->input->post('bandwidth'),
				'ip' => $this->input->post('ip'),
				'mac' => $this->input->post('mac'),
				'package' => $this->input->post('package'),
				'status' => $this->input->post('status')
			);
		$this->db->insert('customer',$data);
	}

	function inv_gen($id)
	{
		$data = array('paid'=> 'Not yet Paid');
		$this->db->where('cu_id',$id);
		$this->db->update($this->table_name,$data);

	}

	function defaulter()
	{
		if((int)date('m') > 10)
		{
			$data = array('paid'=> 'Defaulter');
			$this->db->where('paid','Not yet Paid');
			$this->db->update($this->table_name,$data);
		}	
	}

	function paid($id)
	{
		$data = array('paid'=> 'Yes');
		$this->db->where('cu_id',$id);
		$this->db->update($this->table_name,$data);
	}

	function amount_add($id,$amount)
	{
		$res = $this->get_by_id($id)->row();
		$amount += $res->amount;
		$data =  array('amount' =>  $amount);
		$this->db->where('cu_id',$id);
		$this->db->update($this->table_name,$data);
	}

	function amount_cut($id,$amount)
	{
		$res = $this->get_by_id($id)->row();
		$amount = ((int) ($res->amount)-$amount);
		$data =  array('amount' =>  $amount);
		$this->db->where('cu_id',$id);
		$this->db->update($this->table_name,$data);
	}

	/*function chk_paid($id)
	{
		$res = $this->get_by_id($id)->row();
		$amount = $res->amount;
		$this->load->model('package');
		$tem = $this->package->get_by_name($res->package)->row();
		$prc = $tem->price;

		if($amount >= $prc) 
	}*/

	public function valid_user_customer()
	{
		$query = "select * from customer where cu_id=? and password=?";

		$data = array(
			$this->input->post("user_id"),
			md5($this->input->post("password"))
		);

		$res = $this->db->query($query,$data);

		$info = array();

		if($res->num_rows() == 1) 
		{
			foreach ($res->result() as $row) 
			{
	    		$info = array(
	        	 'username' => $row->cu_name,
	        	 'id' => $row->cu_id,
	         	 'is_logged_in' => true
	    		);
			}

			return $info;
		}
	}

	function list_all(){
		$this->db->order_by('cu_id','asc');
		return $this->db->get($table_name);
	}
	
	function count_all(){
		return $this->db->count_all($this->table_name);
	}
	
	function get_paged_list($limit = 10, $offset = 0){
		$this->db->order_by('cu_id','asc');
		return $this->db->get($this->table_name, $limit, $offset);
	}

	function count_active_all(){
		$this->db->where('status','active');
		return $this->db->get($this->table_name);
	}

	function get_active_paged_list($limit = 10, $offset = 0){
		$this->db->order_by('cu_id','asc');
		$this->db->where('status','active');
		return $this->db->get($this->table_name, $limit, $offset);
	}
	
	function get_by_id($id){
		$this->db->where($this->primary_key,$id);
		return $this->db->get($this->table_name);
	}
	
	/*function get_last_id(){
		$q = "select * from customer where cu_id = (SELECT MAX(cu_id)  FROM customer)";
		$res = $this->db->query($q);
		$ans = $res->row();
		return $ans->cu_id;
	}*/
	public function changepassword($id,$pass) 
	{
		$this->db->where('cu_id',$id);
		$data = array('password' => md5($pass));
		$this->db->update($this->table_name, $data);
    }

	function save($person){
		$this->db->insert($this->table_name, $person);
		return $this->db->insert_id();
	}
	
	function update($id,$person){
		$this->db->where($this->primary_key,$id);
		$this->db->update($this->table_name, $person);
	}
	
	function delete($id){
		$this->db->where('cu_id', $id);
		$this->db->delete($this->table_name);
	}
	
}
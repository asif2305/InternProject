<?php
class Package_model extends CI_Model
{	
	private $unique_key='name';
	private $unique = 'no';
	private $table_name='package';
	
	
	function __consturct(){
		parent::__construct();	
	}

	function getall()
	{
		$query = $this->db->get('package');
		return $query->result();
	}
	
	function count_all(){
		return $this->db->count_all($this->table_name);
	}

	function list_all(){
		$this->db->order_by('name','asc');
		return $this->db->get($table_name);
	}
	
	
	function get_paged_list($limit = 7, $offset = 0){
		$this->db->order_by('name','asc');
		return $this->db->get($this->table_name, $limit, $offset);
	}
	
	function get_by_id($unique){
		$this->db->where($this->unique,$unique);
		return $this->db->get($this->table_name);
	}

	function get_by_name($name){
		$this->db->where('name',$name);
		return $this->db->get($this->table_name);
	}
	
	function save($package){
		$this->db->insert($this->table_name, $package);
		return $this->db->insert_id();
	}
	
	function update($unique,$package){
		$this->db->where($this->unique,$unique);
		$this->db->update($this->table_name, $package);
	}
	
	function delete($id){
		$this->db->where('no', $id);
		$this->db->delete($this->table_name);
	}

}
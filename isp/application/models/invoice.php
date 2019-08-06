<?php

class Invoice extends CI_Model{

	function insert_data($id)
	{
		if((int)date('m')==1) 
		{
			$yr = int(date('Y'))-1;
			$mnth = 12;
		}
		else 
		{
			$mnth = (int)date('m')-1;
			$yr = (int)date('Y');
		}

		$inv = array('id' => (int)$id,
					 'issue_date' => date("Y-m-d"),
					 'month' => $mnth, 
					 'year' => $yr );
		$this->db->insert('invoice',$inv);
	}
	
	function chk_paid($id)
	{
		if((int)date('m')==1) 
		{
			$yr = int(date('Y'))-1;
			$mnth = 12;
		}
		else 
		{
			$mnth = (int)date('m')-1;
			$yr = (int)date('Y');
		}

		$this->db->where('month',$mnth);
		$this->db->where('year',$yr);
		$this->db->where('id',$id);

		$sv = $this->db->get('invoice');

		if($sv->num_rows() > 0) return true;
		else return false;
	}
}
<?php

class Sell extends CI_Model{

	function sell_sv($id,$amount)
	{
		$data = array('id' => (int)$id, 
					  'pay_date' => date('Y-m-d'),
					  'amount' => $amount
					  );
		$this->db->insert('sell',$data);
	}
 function get_by_id($id)
 {
 	  		$this->db->where('id',$id);
		return $this->db->get('sell');
	
 }
	function range_view()
	{
		$date = array(
						$this->input->post('fstdt'),
		        		$this->input->post('secdt')
		        	  );
		$table = 'sell';
		$q = "select * from $table where pay_date between ? and ?";

		$val = $this->db->query($q,$date);

		return $val;
	}

	function chk_paid($id)
	{
		$fst = $sec = date('Y-m-d');
		$fst = date("Y").'-'.date("m").'-'. 1;
		$sec = date("Y").'-'.date("m").'-'.date("t");

		$date = array($id,$fst,$sec);
		$table = "sell";
		$q = "select * from $table where id=? and pay_date between ? and ?";

		$val = $this->db->query($q,$date);

		if($val->num_rows() > 0) return true;
		else return false;
	}
}
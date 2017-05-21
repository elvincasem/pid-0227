<?php


class Dashboard_model extends CI_Model
{
	
	
	public function gettotalcustomers()
	{

			$result = $this->db->query("SELECT count(*) as totalcustomers FROM customer");
			$resultarray = $result->result_array();
			return $resultarray[0];
		
	}
	
	public function gettotalpickup()
	{

			$result = $this->db->query("SELECT count(*) as totalpickup FROM tickets where status='Pickup' AND ticket_status ='ACTIVE'");
			$resultarray = $result->result_array();
			return $resultarray[0];
		
	}
	
	public function getopenticket()
	{

			$result = $this->db->query("SELECT count(*) as totalopen FROM tickets where status='Open' AND ticket_status ='ACTIVE'");
			$resultarray = $result->result_array();
			return $resultarray[0];
		
	}
	public function getrmaticket()
	{

			$result = $this->db->query("SELECT count(*) as totalrma FROM tickets where status='RMA' AND ticket_status ='ACTIVE'");
			$resultarray = $result->result_array();
			return $resultarray[0];
		
	}
	public function getoverduecount()
	{
		$this->load->helper('date');
		$now = new DateTime();
		$now->setTimezone(new DateTimezone('Asia/Manila'));
		$now_timestamp = $now->format('Y-m-d');
		
		
			$result = $this->db->query("SELECT COUNT(*) as totaloverdue FROM tickets WHERE due_date < '$now_timestamp' AND STATUS ='Open' AND ticket_status ='ACTIVE'");
			$resultarray = $result->result_array();
			return $resultarray[0];
		
	}
	
	
	
	
}

?>
<?php


class Reports_model extends CI_Model
{

	public function getcategory()
	{
		$sql = $this->db->query("SELECT * FROM category");
		return $sql->result_array();
		
		
	}
	
	public function getagentlist()
	{
		$sql = $this->db->query("SELECT uid,username,name FROM users");
		return $sql->result_array();
		
		
	}
	
	public function getstartdate()
	{
		$sql = $this->db->query("SELECT DATE_FORMAT(time_stamp,'%Y-%m-%d') as startdate FROM tickets ORDER BY time_stamp ASC LIMIT 1");
		$getcount = $sql->result_array();
		
		//print_r($getcount);
		if($getcount==null){
			return "0000-00-00";
		}else{
			return $getcount[0]['startdate'];
		}
		
		
		
	}
	
	public function getenddate()
	{
		$sql = $this->db->query("SELECT DATE_FORMAT(time_stamp,'%Y-%m-%d') as enddate FROM tickets ORDER BY time_stamp DESC LIMIT 1");
		$getcount = $sql->result_array();
		if($getcount==null){
			return "0000-00-00";
		}else{
			return $getcount[0]['enddate'];
		}
		
		
		
		
	}
	
	
	
	public function getticketlist($filtercategory,$startdate,$enddate)
	{
		if($filtercategory=="All"){
			$sql = $this->db->query("SELECT * FROM tickets LEFT JOIN customer ON tickets.customerid = customer.customerid LEFT JOIN users ON tickets.assignedto_uid = users.uid where DATE_FORMAT(time_stamp,'%Y-%m-%d') between ".$this->db->escape($startdate)." AND ".$this->db->escape($enddate)."");
			
			
		}else{
			$sql = $this->db->query("SELECT * FROM tickets LEFT JOIN customer ON tickets.customerid = customer.customerid LEFT JOIN users ON tickets.assignedto_uid = users.uid WHERE categoryid=".$this->db->escape($filtercategory)." AND DATE_FORMAT(time_stamp,'%Y-%m-%d') between ".$this->db->escape($startdate)." AND ".$this->db->escape($enddate)."");
		}
		
		return $sql->result_array();
		
		
	}
	public function getticketlist_agent($agent,$startdate,$enddate)
	{
		if($agent=="All"){
			$sql = $this->db->query("SELECT * FROM tickets LEFT JOIN customer ON tickets.customerid = customer.customerid LEFT JOIN users ON tickets.assignedto_uid = users.uid where DATE_FORMAT(time_stamp,'%Y-%m-%d') between ".$this->db->escape($startdate)." AND ".$this->db->escape($enddate)."");
			
			
		}else{
			$sql = $this->db->query("SELECT * FROM tickets LEFT JOIN customer ON tickets.customerid = customer.customerid LEFT JOIN users ON tickets.assignedto_uid = users.uid WHERE assignedto_uid=".$this->db->escape($agent)." AND DATE_FORMAT(time_stamp,'%Y-%m-%d') between ".$this->db->escape($startdate)." AND ".$this->db->escape($enddate)."");
			//echo "SELECT * FROM tickets LEFT JOIN customer ON tickets.customerid = customer.customerid LEFT JOIN users ON tickets.assignedto_uid = users.uid WHERE assignedto_uid=".$this->db->escape($agent)." AND DATE_FORMAT(time_stamp,'%Y-%m-%d') between ".$this->db->escape($startdate)." AND ".$this->db->escape($enddate)."";
		}
		
		return $sql->result_array();
		
		
	}
	
	
	/*public function getyearrecord()
	{
		$sql = $this->db->query("SELECT YEAR(requisition_date) AS reqyear FROM requisition_details GROUP BY reqyear");
		return $sql->result_array();
		
		
	}
	*/
	
	public function yearlist()
	{
		$sql = $this->db->query("SELECT DISTINCT(YEAR(time_stamp)) as ticket_year FROM tickets");
		return $sql->result_array();
		
		
	}
	public function monthlist()
	{
		$sql = $this->db->query("SELECT  MONTH(atime_stamp) AS ticket_month, atime_stamp FROM remarks_agent GROUP BY ticket_month");
		return $sql->result_array();
		
		
	}
	
	public function smscount_month($smsyear,$smsmonth)
	{
		$sql = $this->db->query("SELECT MONTH(atime_stamp) AS monthly,YEAR(atime_stamp) AS yearly, COUNT(n_sms) AS smssent, atime_stamp FROM remarks_agent WHERE n_sms=1 AND YEAR(atime_stamp)=".$this->db->escape($smsyear)." AND MONTH(atime_stamp)=".$this->db->escape($smsmonth)."");
		return $sql->result_array();
		
		
	}
	public function smscount_yearly($smsyear)
	{
		$sql = $this->db->query("SELECT MONTH(atime_stamp) AS monthly,YEAR(atime_stamp) AS yearly, COUNT(n_sms) AS smssent, atime_stamp FROM remarks_agent WHERE n_sms=1 AND YEAR(atime_stamp)=".$this->db->escape($smsyear)." GROUP BY monthly");
		return $sql->result_array();
		
		
	}
	
	
}

?>
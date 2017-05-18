<?php


class Customers_model extends CI_Model
{
	
	public function getcustomers()
	{
		$sql = $this->db->query("SELECT *,(SELECT COUNT(*) FROM tickets WHERE customer.customerid = tickets.customerid) AS ticketcount FROM customer ");
		return $sql->result_array();
		
		
	}
	
	public function saveemployee($empno,$lname,$fname,$mname,$extension,$designation,$ccompany)
	{
		
		$sql = "INSERT INTO employee (empNo,lname,fname,mname,ename,designation) VALUES (".$this->db->escape($empno).",".$this->db->escape($lname).",".$this->db->escape($fname).",".$this->db->escape($mname).",".$this->db->escape($extension).",".$this->db->escape($designation).")";
		$this->db->query($sql);
				
		
	}
	
	public function checkemail($cemail)
	{
		$sql = $this->db->query("SELECT count(*) as numberofemail FROM customer where cemail ='$cemail'");
		$emailcount = $sql->result_array();
		return $emailcount[0]['numberofemail'];
		
		
	}
	
	public function savecustomer($cemail,$clname,$cfname,$cmname,$caddress,$cmobileno,$cotherno,$cpassword,$ccompany)
	{
		
		$sql = "INSERT INTO customer (cemail,clname,cfname,cmname,caddress,cmobileno,cotherno,cpassword,ccompany) VALUES (".$this->db->escape($cemail).",".$this->db->escape($clname).",".$this->db->escape($cfname).",".$this->db->escape($cmname).",".$this->db->escape($caddress).",".$this->db->escape($cmobileno).",".$this->db->escape($cotherno).",".$this->db->escape($cpassword).",".$this->db->escape($ccompany).")";
		$this->db->query($sql);
				
		
	}
	
	public function getcustomerdetails($customerid)
	{
		//echo $customerid;
		$sql = $this->db->query("SELECT * FROM customer where customerid=$customerid");
		$result = $sql->result_array();
		return $result[0];
		
		
	}
	public function getcustomertickets($customerid)
	{
		//echo $customerid;
		$sql = $this->db->query("SELECT * FROM tickets where customerid=$customerid");
		$result = $sql->result_array();
		return $result;
		
		
	}
	
	public function updatecustomer($customerid,$cemail,$clname,$cfname,$cmname,$caddress,$cmobileno,$cotherno,$cpassword,$ccompany)
	{
		
		$sql = "update customer set cemail=".$this->db->escape($cemail).",clname=".$this->db->escape($clname).",cfname=".$this->db->escape($cfname).",cmname=".$this->db->escape($cmname).",caddress=".$this->db->escape($caddress).",cmobileno=".$this->db->escape($cmobileno).",cotherno=".$this->db->escape($cotherno).",cpassword=".$this->db->escape($cpassword).",ccompany=".$this->db->escape($ccompany)." where customerid=".$this->db->escape($customerid)."";
		$this->db->query($sql);
				
		
	}
	public function updatecustomerdeviceid($deviceid,$login_email)
	{
		
		$sql = "update customer set deviceid=".$this->db->escape($deviceid)." where cemail=".$this->db->escape($login_email)."";
		$this->db->query($sql);
		
		$sql2 = $this->db->query("SELECT * FROM customer WHERE cemail=".$this->db->escape($login_email)."");
		$customer_profile = $sql2->result_array();
		return $customer_profile[0];
		//return $customer_profile;
				
		
	}
	
	public function checkcustomer($login_email,$login_password)
	{
		//echo $customerid;
		$sql = $this->db->query("SELECT count(*) as customercount from customer WHERE cemail=".$this->db->escape($login_email)." AND cpassword=".$this->db->escape($login_password)."");
		$result = $sql->result_array();
		return $result[0]['customercount'];
		
		
	}
	
	public function getcustomerticket_mobile($useremail)
	{
		//echo $customerid;
		$sql = $this->db->query("SELECT * FROM tickets LEFT JOIN customer ON tickets.customerid = customer.customerid WHERE customer.cemail=".$this->db->escape($useremail)."");
		$result = $sql->result_array();
		return $result;
		
		
	}
	
	public function getticketdetailssingle_mobile($current_ticket)
	{
		$sql = $this->db->query("SELECT * FROM tickets WHERE ticketid=".$this->db->escape($current_ticket)."");
		$result = $sql->result_array();
		return $result[0];
		
	}
	
	public function getticketlog_mobile($current_ticket)
	{
		//echo $customerid;
		$sql = $this->db->query("SELECT * FROM 
((SELECT 'Customer' AS userreplied,CONCAT(customer.cfname,' ',customer.clname) AS user_name, cremarksid AS remarksid, cticketid AS ticketid,cremarks_info AS remarks_info, ctime_stamp AS time_stamp, creplytype AS replytype, '0' AS n_email,'0' AS n_sms,'0' AS n_mobile  FROM remarks_customer 
LEFT JOIN customer ON remarks_customer.customerid = customer.customerid) 
UNION ALL 
(SELECT 'Agent' AS userreplied,users.name AS user_name, aremarksid AS remarksid, aticketid AS ticketid,aremarks_info AS remarks_info, atime_stamp AS time_stamp, replytype AS replytype,n_email,n_sms,n_mobile FROM remarks_agent 
LEFT JOIN users ON remarks_agent.uid= users.uid) 
UNION ALL 
(SELECT 'System' AS userreplied,users.name AS user_name, tlogid AS remarksid, ticketid AS ticketid,remarks AS remarks_info, time_stamp AS time_stamp,'TEXT' AS replytype, '0' AS n_email,'0' AS n_sms,'0' AS n_mobile FROM tickets_log LEFT JOIN users 
ON tickets_log.updatedby = users.uid)) ticketlog WHERE ticketlog.ticketid = ".$this->db->escape($current_ticket)." ORDER BY time_stamp ASC ");
		$result = $sql->result_array();
		return $result;
		
		
	}
	
}

?>
<?php


class Ticket_model extends CI_Model
{
	
	
	public function savecustomer($cemail,$clname,$cfname,$cmname,$caddress,$cmobileno,$cotherno,$cpassword)
	{
		
		$sql = "INSERT INTO customer (cemail,clname,cfname,cmname,caddress,cmobileno,cotherno,cpassword) VALUES (".$this->db->escape($cemail).",".$this->db->escape($clname).",".$this->db->escape($cfname).",".$this->db->escape($cmname).",".$this->db->escape($caddress).",".$this->db->escape($cmobileno).",".$this->db->escape($cotherno).",".$this->db->escape($cpassword).")";
		$this->db->query($sql);
				
		
	}
	
	public function saveticket($addedbyuid,$customerid,$categoryid,$status,$departmentid,$priority,$duedate,$assignedto_uid,$title,$description)
	{
		
		$sql = "INSERT INTO tickets (categoryid,status,priority,customerid,assignedto_uid,title,description,departmentid,addedbyuid) VALUES (".$this->db->escape($categoryid).",".$this->db->escape($status).",".$this->db->escape($priority).",".$this->db->escape($customerid).",".$this->db->escape($assignedto_uid).",".$this->db->escape($title).",".$this->db->escape($description).",".$this->db->escape($departmentid).",".$this->db->escape($addedbyuid).")";
		$this->db->query($sql);
		
		$sqlselect = $this->db->query("SELECT MAX(ticketid) AS lastid FROM tickets");
		$lastidinserted = $sqlselect->result_array();
		//echo json_encode($lastidinserted[0]);
		$currentid = $lastidinserted[0]['lastid'];
		echo $currentid;
				
		
	}
	
	public function checkemail($cemail)
	{
		$sql = $this->db->query("SELECT count(*) as numberofemail FROM customer where cemail ='$cemail'");
		$emailcount = $sql->result_array();
		return $emailcount[0]['numberofemail'];
		
		
	}
	
	public function getticketlist()
	{
		$sql = $this->db->query("SELECT * FROM tickets LEFT JOIN customer ON tickets.customerid = customer.customerid LEFT JOIN users ON tickets.assignedto_uid = users.uid");
		return $sql->result_array();
		
		
	}
	
	public function savecategory($categoryname)
	{
		
		$sql = "INSERT INTO category (categoryvalue) VALUES (".$this->db->escape($categoryname).")";
		$this->db->query($sql);
				
		
	}
	
	public function getagent()
	{
		$sql = $this->db->query("SELECT * FROM users");
		return $sql->result_array();
		
		
	}
	public function getdepartment()
	{
		$sql = $this->db->query("SELECT * FROM department");
		return $sql->result_array();
		
		
	}
	public function getcategory()
	{
		$sql = $this->db->query("SELECT * FROM category");
		return $sql->result_array();
		
		
	}
	public function getcustomer()
	{
		$sql = $this->db->query("SELECT * FROM customer");
		return $sql->result_array();
		
		
	}
	
	
}

?>
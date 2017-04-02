<?php


class Ticket_model extends CI_Model
{
	
	
	public function savecustomer($cemail,$clname,$cfname,$cmname,$caddress,$cmobileno,$cotherno,$cpassword)
	{
		
		$sql = "INSERT INTO customer (cemail,clname,cfname,cmname,caddress,cmobileno,cotherno,cpassword) VALUES (".$this->db->escape($cemail).",".$this->db->escape($clname).",".$this->db->escape($cfname).",".$this->db->escape($cmname).",".$this->db->escape($caddress).",".$this->db->escape($cmobileno).",".$this->db->escape($cotherno).",".$this->db->escape($cpassword).")";
		$this->db->query($sql);
				
		
	}
	
	public function saveticket($addedbyuid,$customerid,$categoryid,$status,$departmentid,$priority,$duedate,$assignedto_uid,$problem,$description,$history,$serialno,$special_instruction)
	{
		
		$sql = "INSERT INTO tickets (categoryid,status,priority,customerid,assignedto_uid,problem,description,departmentid,history,special_instruction,serialno,addedbyuid,due_date) VALUES (".$this->db->escape($categoryid).",".$this->db->escape($status).",".$this->db->escape($priority).",".$this->db->escape($customerid).",".$this->db->escape($assignedto_uid).",".$this->db->escape($problem).",".$this->db->escape($description).",".$this->db->escape($departmentid).",".$this->db->escape($history).",".$this->db->escape($special_instruction).",".$this->db->escape($serialno).",".$this->db->escape($addedbyuid).",".$this->db->escape($duedate).")";
		$this->db->query($sql);
		
		$sqlselect = $this->db->query("SELECT MAX(ticketid) AS lastid FROM tickets");
		$lastidinserted = $sqlselect->result_array();
		//echo json_encode($lastidinserted[0]);
		$currentid = $lastidinserted[0]['lastid'];
		echo $currentid;
				
		
	}
	
	public function getticketdetails($id)
	{
		$sql = $this->db->query("SELECT *,(SELECT NAME AS uname FROM tickets LEFT JOIN users ON tickets.addedbyuid = users.uid WHERE tickets.ticketid=".$this->db->escape($id).") AS agentname FROM tickets LEFT JOIN customer ON tickets.customerid = customer.customerid LEFT JOIN users ON tickets.assignedto_uid = users.uid LEFT JOIN department ON tickets.departmentid = department.departmentid WHERE ticketid=".$this->db->escape($id)."");
		
		//echo "SELECT *,(SELECT NAME AS uname FROM tickets LEFT JOIN users ON tickets.addedbyuid = users.uid WHERE tickets.ticketid=".$this->db->escape($id).") AS agentname FROM tickets LEFT JOIN customer ON tickets.customerid = customer.customerid LEFT JOIN users ON tickets.assignedto_uid = users.uid LEFT JOIN department ON tickets.departmentid = department.departmentid WHERE ticketid=".$this->db->escape($id)."";
		
		$ticketd = $sql->result_array();
		if($ticketd == null){
			return "error";
		}else{
			return $ticketd[0];
		}
		
		
		
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
	
	public function getticketliststatus($status)
	{
		$sql = $this->db->query("SELECT * FROM tickets LEFT JOIN customer ON tickets.customerid = customer.customerid LEFT JOIN users ON tickets.assignedto_uid = users.uid where status=".$this->db->escape($status)."");
		return $sql->result_array();
		
		
	}
	
	public function getticketlog($id)
	{
		//$sql = $this->db->query("SELECT * FROM ((SELECT 'Customer' AS userreplied,CONCAT(customer.cfname,' ',customer.clname) AS user_name, cremarksid AS remarksid, cticketid AS ticketid,cremarks_info AS remarks_info, ctime_stamp AS time_stamp FROM remarks_customer LEFT JOIN customer ON remarks_customer.customerid = customer.customerid) UNION ALL (SELECT 'Agent' AS userreplied,users.name AS user_name, aremarksid AS remarksid, aticketid AS ticketid,aremarks_info AS remarks_info, atime_stamp AS time_stamp FROM remarks_agent LEFT JOIN users ON remarks_agent.uid= users.uid)) ticketlog WHERE ticketlog.ticketid = ".$this->db->escape($id)." ORDER BY time_stamp ASC ");
$sql = $this->db->query("SELECT * FROM 
((SELECT 'Customer' AS userreplied,CONCAT(customer.cfname,' ',customer.clname) AS user_name, cremarksid AS remarksid, cticketid AS ticketid,cremarks_info AS remarks_info, ctime_stamp AS time_stamp FROM remarks_customer LEFT JOIN customer ON remarks_customer.customerid = customer.customerid) UNION ALL (SELECT 'Agent' AS userreplied,users.name AS user_name, aremarksid AS remarksid, aticketid AS ticketid,aremarks_info AS remarks_info, atime_stamp AS time_stamp FROM remarks_agent LEFT JOIN users ON remarks_agent.uid= users.uid) UNION ALL (SELECT 'System' AS userreplied,users.name AS user_name, tlogid AS remarksid, ticketid AS ticketid,remarks AS remarks_info, time_stamp AS time_stamp FROM tickets_log LEFT JOIN users ON tickets_log.updatedby = users.uid)) ticketlog WHERE ticketlog.ticketid = ".$this->db->escape($id)." ORDER BY time_stamp ASC ");
//echo "SELECT * FROM ((SELECT 'Customer' AS userreplied,CONCAT(customer.cfname,' ',customer.clname) AS user_name, cremarksid AS remarksid, cticketid AS ticketid,cremarks_info AS remarks_info, ctime_stamp AS time_stamp FROM remarks_customer LEFT JOIN customer ON remarks_customer.customerid = customer.customerid) UNION ALL (SELECT 'Agent' AS userreplied,users.name AS user_name, aremarksid AS remarksid, aticketid AS ticketid,aremarks_info AS remarks_info, atime_stamp AS time_stamp FROM remarks_agent LEFT JOIN users ON remarks_agent.uid= users.uid) UNION ALL (SELECT 'System' AS userreplied,users.name AS user_name, tlogid AS remarksid, ticketid AS ticketid,remarks AS remarks_info, time_stamp AS time_stamp FROM tickets_log LEFT JOIN users ON tickets_log.updatedby = users.uid)) ticketlog WHERE ticketlog.ticketid = ".$this->db->escape($id)." ORDER BY time_stamp ASC ";



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
	
	
	
	public function savereply($ticketid,$ticket_reply,$uid)
	{
		$sql = "INSERT INTO remarks_agent (aticketid,aremarks_info,uid) VALUES (".$this->db->escape($ticketid).",".$this->db->escape($ticket_reply).",".$this->db->escape($uid).")";
		$this->db->query($sql);
		
					
		
	}
	
	public function gettotaltickets()
	{
		$sql = $this->db->query("SELECT count(*) as totalticket FROM tickets");
		$getcount = $sql->result_array();
		return $getcount[0]['totalticket'];
		
		
	}
	public function getpickuptickets()
	{
		$sql = $this->db->query("SELECT count(*) as totalticket FROM tickets where status='Pickup'");
		$getcount = $sql->result_array();
		return $getcount[0]['totalticket'];
		
		
	}
	public function getrmatickets()
	{
		$sql = $this->db->query("SELECT count(*) as totalticket FROM tickets where status='RMA'");
		$getcount = $sql->result_array();
		return $getcount[0]['totalticket'];
		
		
	}
	public function getopentickets()
	{
		$sql = $this->db->query("SELECT count(*) as totalticket FROM tickets where status='Open'");
		$getcount = $sql->result_array();
		return $getcount[0]['totalticket'];
		
		
	}
	public function getclosedtickets()
	{
		$sql = $this->db->query("SELECT count(*) as totalticket FROM tickets where status='Closed'");
		$getcount = $sql->result_array();
		return $getcount[0]['totalticket'];
		
		
	}
	
	public function getcategorytickets()
	{
		$sql = $this->db->query("SELECT COUNT(*) as totalnum,categoryvalue FROM tickets LEFT JOIN category ON tickets.categoryid = category.categoryid GROUP BY category.categoryid");
		return $sql->result_array();
		
		
	}
	
	public function updateticket($ticketid,$status)
	{
				
		$sql = "update tickets set status=".$this->db->escape($status)." where ticketid=".$this->db->escape($ticketid)."";

		$this->db->query($sql);

	}
	
	public function updatedescription($ticketid,$problem,$ticketdescription,$serialno,$history,$special_instruction)
	{
				
		$sql = "update tickets set problem=".$this->db->escape($problem).",description=".$this->db->escape($ticketdescription).",serialno=".$this->db->escape($serialno).",history=".$this->db->escape($history).",special_instruction=".$this->db->escape($special_instruction)." where ticketid=".$this->db->escape($ticketid)."";
		//echo $sql;
		$this->db->query($sql);

	}
	
	public function logticket($ticketid,$status,$remarks_log,$uid)
	{
		
		$sql = "INSERT INTO tickets_log (ticketid,status,remarks,updatedby) VALUES (".$this->db->escape($ticketid).",".$this->db->escape($status).",".$this->db->escape($remarks_log).",".$this->db->escape($uid).")";
		$this->db->query($sql);
		
					
		
	}
	
}

?>
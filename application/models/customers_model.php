<?php


class Customers_model extends CI_Model
{
	
	public function getcustomers()
	{
		$sql = $this->db->query("SELECT * FROM customer");
		return $sql->result_array();
		
		
	}
	
	public function saveemployee($empno,$lname,$fname,$mname,$extension,$designation)
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
	
	public function savecustomer($cemail,$clname,$cfname,$cmname,$caddress,$cmobileno,$cotherno,$cpassword)
	{
		
		$sql = "INSERT INTO customer (cemail,clname,cfname,cmname,caddress,cmobileno,cotherno,cpassword) VALUES (".$this->db->escape($cemail).",".$this->db->escape($clname).",".$this->db->escape($cfname).",".$this->db->escape($cmname).",".$this->db->escape($caddress).",".$this->db->escape($cmobileno).",".$this->db->escape($cotherno).",".$this->db->escape($cpassword).")";
		$this->db->query($sql);
				
		
	}
	
	public function getcustomerdetails($customerid)
	{
		//echo $customerid;
		$sql = $this->db->query("SELECT * FROM customer where customerid=$customerid");
		$result = $sql->result_array();
		return $result[0];
		
		
	}
	
	public function updatecustomer($customerid,$cemail,$clname,$cfname,$cmname,$caddress,$cmobileno,$cotherno,$cpassword)
	{
		
		$sql = "update customer set cemail=".$this->db->escape($cemail).",clname=".$this->db->escape($clname).",cfname=".$this->db->escape($cfname).",cmname=".$this->db->escape($cmname).",caddress=".$this->db->escape($caddress).",cmobileno=".$this->db->escape($cmobileno).",cotherno=".$this->db->escape($cotherno).",cpassword=".$this->db->escape($cpassword)." where customerid=".$this->db->escape($customerid)."";
		$this->db->query($sql);
				
		
	}
	public function updatecustomerdeviceid($deviceid,$login_email)
	{
		
		$sql = "update customer set deviceid=".$this->db->escape($deviceid)." where cemail=".$this->db->escape($login_email)."";
		$this->db->query($sql);
				
		
	}
	
}

?>
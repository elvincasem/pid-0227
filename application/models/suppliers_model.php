<?php


class Suppliers_model extends CI_Model
{
	
	public function getsupplierlist()
	{
		$sql = $this->db->query("SELECT * FROM suppliers");
		return $sql->result_array();
		
		
	}
	
	public function savesupplier($suppliername,$address,$contactno,$products,$email,$tin)
	{
		
		$sql = "INSERT INTO suppliers (supName,address,contactNo,TIN,products,email) VALUES (".$this->db->escape($suppliername).",".$this->db->escape($address).",".$this->db->escape($contactno).",".$this->db->escape($products).",".$this->db->escape($email).",".$this->db->escape($tin).")";
		$this->db->query($sql);
				
		
	}
	
	
}

?>
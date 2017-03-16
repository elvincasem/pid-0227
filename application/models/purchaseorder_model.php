<?php


class Purchaseorder_model extends CI_Model
{
	
	public function get()
	{
		$users = $this->db->query("SELECT * from purchase_po");
		return $users->result_array();
		
		
	}
	
	
	public function getpomaindetails($id)
	{
		$sql = $this->db->query("SELECT * FROM purchase_po LEFT JOIN suppliers ON purchase_po.supplierid = suppliers.supplierID where poid='$id'");
		$pomain = $sql->result_array();
		return $pomain[0];
	}
	
	public function getpoitems($poid)
	{
		$sql = $this->db->query("SELECT * FROM purchase_po_items where poid='$poid'");
		return $sql->result_array();
		
	}
	
	public function updateunitprice($poitemsid,$unitprice)
	{
				
		$sql = "update purchase_po_items set unitprice=".$this->db->escape($unitprice)." where poitemsid=".$this->db->escape($poitemsid)."";
		$this->db->query($sql);

		
	}
	
	public function updatewords($poid,$amountinwords)
	{
				
		$sql = "update purchase_po set amountinwords=".$this->db->escape($amountinwords)." where poid=".$this->db->escape($poid)."";
		$this->db->query($sql);

		
	}
	
	
	
	
	
	
	
	
}

?>
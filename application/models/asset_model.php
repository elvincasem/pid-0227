<?php


class Asset_model extends CI_Model
{
	
	public function getassetlist()
	{
		$sql = $this->db->query("SELECT * FROM assets");
		return $sql->result_array();
		
		
	}

	
	public function addasset($particulars,$article,$classification)
	{
		
		$sql = "INSERT INTO assets (asset_article,asset_particulars,asset_classification) VALUES (".$this->db->escape($article).",".$this->db->escape($particulars).",".$this->db->escape($classification).")";
		$this->db->query($sql);
		
		
	}
	
		
	public function getassetdetails($id)
	{
		$sql = $this->db->query("SELECT * from assets where assetid='$id'");
		$asset_details = $sql->result_array();
		return $asset_details[0];
	}
	
	public function getequipment($id)
	{
		
		$list = $this->db->query("SELECT * from equipments left join suppliers ON equipments.supplierid = suppliers.supplierID where assetid='$id'");
		return $list->result_array();
	}
		
		
	public function getallequipment()
	{
		$sql = $this->db->query("SELECT * FROM equipments");
		return $sql->result_array();
		
		
	}
	
	public function getsingleequipment($equipno)
	{
		$sql = $this->db->query("SELECT * from equipments left join equipments_details on equipments.equipNo = equipments_details.equipNo where equipments.equipNo='$equipno'");
		$equipment_details = $sql->result_array();
		return $equipment_details[0];
	}
	
}

?>
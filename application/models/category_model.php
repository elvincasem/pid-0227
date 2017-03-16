<?php


class Category_model extends CI_Model
{
	
	public function getcategory()
	{
		$sql = $this->db->query("SELECT * FROM category");
		return $sql->result_array();
		
		
	}
	
	public function savecategory($categoryname)
	{
		
		$sql = "INSERT INTO category (categoryvalue) VALUES (".$this->db->escape($categoryname).")";
		$this->db->query($sql);
				
		
	}
	
	
}

?>
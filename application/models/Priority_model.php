<?php


class Priority_model extends CI_Model
{
	
	public function getpriority()
	{
		$sql = $this->db->query("SELECT * FROM priority");
		return $sql->result_array();
		
		
	}
	
	public function savepriority($priorityname)
	{
		
		$sql = "INSERT INTO priority (priorityvalue) VALUES (".$this->db->escape($priorityname).")";
		$this->db->query($sql);
				
		
	}
	
	
}

?>
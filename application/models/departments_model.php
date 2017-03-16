<?php


class Departments_model extends CI_Model
{
	
	public function getdeptlist()
	{
		$sql = $this->db->query("SELECT * FROM department");
		return $sql->result_array();
		
		
	}
	
	public function saveemployee($departmentname)
	{
		
		$sql = "INSERT INTO department (departmentvalue) VALUES (".$this->db->escape($departmentname).")";
		$this->db->query($sql);
				
		
	}
	
	
}

?>
<?php


class Requisition_model extends CI_Model
{
	
	public function getrequisitionlist()
	{
		$sql = $this->db->query("SELECT * FROM requisition_details LEFT JOIN employee ON requisition_details.userID = employee.eid");
		return $sql->result_array();
		
		
	}
	
	
	
	
}

?>
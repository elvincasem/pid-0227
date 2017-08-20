<?php


class Template_model extends CI_Model
{
	
	public function gettemplatelist()
	{
		$sql = $this->db->query("SELECT * FROM template");
		return $sql->result_array();
		
		
	}
	
	public function savetemplate($templatedescription,$templatefield)
	{
		
		$sql = "INSERT INTO template (templatedescription,templatefield) VALUES (".$this->db->escape($templatedescription).",".$this->db->escape($templatefield).")";
		$this->db->query($sql);
				
		
	}
	

	
	
}

?>
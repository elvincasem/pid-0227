<?php

class Priority extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//model module
		$this->load->model('priority_model');
		$this->load->helper('date');
		//view module
		 $this->data = array(
            'title' => 'Settings',
			'ticketsclass' => '',
			'ticketsaddclass' => '',
			'ticketlistclass' => '',
			'customersclass' => '',
			'reportsclass' => '',
			'settingsclass' => 'active',
			'usersclass' => '',
			'userssubclass' => '',
			'departmentsclass' => '',
			'templateclass' => '',
			'categoryclass' => '',
			'priorityclass' => 'active',
			'subnavtitle' => 'Priority',
			'typeahead' => '1',
			
			);
		//javascript module
		$this->js = array(
            'jsfile' => 'settings_priority.js',
			'datatablescript' => null
			);
	}
	
	public function index()
	{
		$data = $this->data;
		$js = $this->js;

		
		$data['prioritylist'] = $this->priority_model->getpriority();

		$this->load->view('inc/header_view');
		$this->load->view('settings/priority_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	

	
	public function savepriority(){
		$priorityname = $this->input->post('priorityname');
		if($priorityname!=null){
			$this->priority_model->savepriority($priorityname);
		}
		
	}
	
	public function deletepriority(){
		
		$priorityid = $this->input->post('priorityid');
		if($priorityid!=null){
			$this->db->delete('priority', array('priorityid' => $priorityid));
		}
		
		
		
	}
	

}
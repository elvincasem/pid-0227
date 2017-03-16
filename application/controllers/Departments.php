<?php

class Departments extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//model module
		$this->load->model('departments_model');
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
			'departmentsclass' => 'active',
			'categoryclass' => '',
			'subnavtitle' => 'Departments',
			'typeahead' => '1',
			
			);
		//javascript module
		$this->js = array(
            'jsfile' => 'settings_department.js'
			);
	}
	
	public function index()
	{
		$data = $this->data;
		$js = $this->js;

		
		$data['departments'] = $this->departments_model->getdeptlist();

		$this->load->view('inc/header_view');
		$this->load->view('settings/departments_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	

	
	public function savedepartment(){
		$departmentname = $this->input->post('departmentname');
		if($departmentname!=null){
			$this->departments_model->saveemployee($departmentname);
		}
		
	}
	
	public function deletedepartment(){
		
		$departmentid = $this->input->post('did');
		if($departmentid!=null){
			$this->db->delete('department', array('departmentid' => $departmentid));
		}
		
		
		
	}
	

}
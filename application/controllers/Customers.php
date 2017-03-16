<?php

class Customers extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//model module
		$this->load->model('customers_model');
		$this->load->helper('date');
		//view module
		 $this->data = array(
            'title' => 'Customers',
			'ticketsclass' => 'active',
			'ticketsaddclass' => '',
			'ticketlistclass' => '',
			'customersclass' => 'active',
			'reportsclass' => '',
			'settingsclass' => '',
			'usersclass' => '',
			'userssubclass' => '',
			'departmentsclass' => '',
			'categoryclass' => '',
			'subnavtitle' => 'Customer List',
			'typeahead' => '1',
			
			);
		//javascript module
		$this->js = array(
            'jsfile' => 'settings_employees.js'
			);
	}
	
	public function index()
	{
		$data = $this->data;
		$js = $this->js;

		
		$data['customerslist'] = $this->customers_model->getcustomers();

		$this->load->view('inc/header_view');
		$this->load->view('ticket/customers_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	

	
	public function saveemployee(){
		$empno = $this->input->post('empno');
		$lname = $this->input->post('lname');
		$fname = $this->input->post('fname');
		$mname = $this->input->post('mname');
		$extension = $this->input->post('extension');
		$designation = $this->input->post('designation');
		
		$this->employees_model->saveemployee($empno,$lname,$fname,$mname,$extension,$designation);
	}
	
	public function deleteemployee(){
		$eid = $this->input->post('eid');
		$this->db->delete('employee', array('eid' => $eid));
		
		
	}
	

}
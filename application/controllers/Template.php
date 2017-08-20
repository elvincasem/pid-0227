<?php

class Template extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//model module
		$this->load->model('template_model');
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
			'templateclass' => 'active',
			'categoryclass' => '',
			'priorityclass' => '',
			'subnavtitle' => 'Template',
			'typeahead' => '1',
			
			);
		//javascript module
		$this->js = array(
            'jsfile' => 'settings_template.js',
			'datatablescript' => null
			);
	}
	
	public function index()
	{
		$data = $this->data;
		$js = $this->js;

		
		$data['templates'] = $this->template_model->gettemplatelist();

		$this->load->view('inc/header_view');
		$this->load->view('settings/template_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	

	
	public function savetemplate(){
		$templatedescription = $this->input->post('templatedescription');
		$templatefield = $this->input->post('templatefield');
		if($templatedescription!=null){
			$this->template_model->savetemplate($templatedescription,$templatefield);
		}
		
	}
	
	public function deletedepartment(){
		
		$templateid = $this->input->post('templateid');
		if($templateid!=null){
			$this->db->delete('template', array('templateid' => $templateid));
		}
		
		
		
	}
	

}
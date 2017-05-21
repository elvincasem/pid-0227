<?php

class Category extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//model module
		$this->load->model('category_model');
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
			'categoryclass' => 'active',
			'priorityclass' => '',
			'subnavtitle' => 'Category',
			'typeahead' => '1',
			
			);
		//javascript module
		$this->js = array(
            'jsfile' => 'settings_category.js',
			'datatablescript' => null
			);
	}
	
	public function index()
	{
		$data = $this->data;
		$js = $this->js;

		
		$data['categorylist'] = $this->category_model->getcategory();

		$this->load->view('inc/header_view');
		$this->load->view('settings/category_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	

	
	public function savecategory(){
		$categoryname = $this->input->post('categoryname');
		if($categoryname!=null){
			$this->category_model->savecategory($categoryname);
		}
		
	}
	
	public function deletecategory(){
		
		$categoryid = $this->input->post('categoryid');
		if($categoryid!=null){
			$this->db->delete('category', array('categoryid' => $categoryid));
		}
		
		
		
	}
	

}
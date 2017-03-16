<?php

class Home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
		  $this->data = array(
            'title' => 'Dashboard',
			'ticketsclass' => '',
			'ticketsaddclass' => '',
			'ticketlistclass' => '',
			'customersclass' => '',
			
			'reportsclass' => '',
			
			'settingsclass' => '',
			'usersclass' => '',
			'userssubclass' => '',
			'departmentsclass' => '',
			'categoryclass' => '',
			'subnavtitle' => 'Dashboard'
			);
			
			$this->js = array(
            'jsfile' => null,
			'typeahead' => '0'
			);
	}
	
	public function index()
	{
		/*$this->load->helper('url');
		$data['title'] = "Welcome";
		$data['heiclass'] = "";
		$data['heilist'] = "";
		$data['programlist'] = "";
		$data['deanslist'] = "";
		$data['contacts'] = "";
		$data['accounts'] = "";
		$data['programapplication'] = "";
		$data['permits'] = "";*/
		$js = $this->js;
		$data = $this->data;
		$data['customerscount'] = $this->dashboard_model->gettotalcustomers();
		$data['openticket'] = $this->dashboard_model->getopenticket();
		$data['rmaticket'] = $this->dashboard_model->getrmaticket();
		
		$this->load->view('inc/header_view');
		
		$this->load->view('home/home_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	

	
	
}
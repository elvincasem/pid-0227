<?php

class Home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
		$this->load->model('ticket_model');
		$this->load->helper('date');
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
			'templateclass' => '',
			'categoryclass' => '',
			'subnavtitle' => 'Dashboard'
			);
			
			$this->js = array(
            'jsfile' => null,
			'typeahead' => '0',
			'datatablescript' => null
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
		//echo date('Asia/Manila');
		$js = $this->js;
		$data = $this->data;
		$data['customerscount'] = $this->dashboard_model->gettotalcustomers();
		$data['openticket'] = $this->dashboard_model->getopenticket();
		$data['rmaticket'] = $this->dashboard_model->getrmaticket();
		$data['orverdueticketcount'] = $this->dashboard_model->getoverduecount();
		

		$startdate = $this->ticket_model->getstartdate();
		$enddate = $this->ticket_model->getenddate();
		
		$data['opentickets'] = $this->ticket_model->getticketliststatus("Open","All",$startdate,$enddate);
		$data['rmatickets'] = $this->ticket_model->getticketliststatus("RMA","All",$startdate,$enddate);
		$data['pickuptickets'] = $this->ticket_model->getticketliststatus("Pickup","All",$startdate,$enddate);
		
		$data['overduetickets'] = $this->ticket_model->getoverdueticketlist("All");
		
		
		$this->load->view('inc/header_view');
		
		$this->load->view('home/home_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	

	
	
}
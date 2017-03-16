<?php

class Ticket extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//model module
		//$this->load->model('ticket_model');
		$this->load->model('ticket_model');
		$this->load->helper('date');
		$this->session;
		//view module
		 $this->data = array(
			'title' => 'Ticket',
			'ticketsclass' => 'active',
			'ticketsaddclass' => '',
			'ticketlistclass' => '',
			'customersclass' => '',
			'reportsclass' => '',
			'settingsclass' => '',
			'usersclass' => '',
			'userssubclass' => '',
			'departmentsclass' => '',
			'categoryclass' => '',
			'subnavtitle' => 'Ticket'
			
			);
		//javascript module
		$this->js = array(
            'jsfile' => 'ticket.js'
			);
	}
	
	public function index()
	{
		$data = $this->data;
		$js = $this->js;
		
		$data['ticketlistclass'] = 'active';
		//$data['itemslist'] = $this->items_model->getitemslist();
		//$data['unitlist'] = $this->items_model->getunitlist();
		//$data['supplierlist'] = $this->items_model->getsupplierlist();
		$data['tickets'] = $this->ticket_model->getticketlist();
		
		$this->load->view('inc/header_view');
		$this->load->view('ticket/ticket_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	public function add()
	{
		$data = $this->data;
		$js = $this->js;

		$data['ticketsaddclass'] = 'active';
		///$data['itemslist'] = $this->items_model->getitemslist();
		//$data['unitlist'] = $this->items_model->getunitlist();
		//$data['supplierlist'] = $this->items_model->getsupplierlist();
		$data['customers'] = $this->ticket_model->getcustomer();
		$data['category'] = $this->ticket_model->getcategory();
		$data['departments'] = $this->ticket_model->getdepartment();
		$data['agentlist'] = $this->ticket_model->getagent();
		
		$this->load->view('inc/header_view');
		$this->load->view('ticket/ticketadd_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	
	public function details($id)
	{
		$data = $this->data;
		$js = $this->js;
		
		$data['itemno'] = $id;
		$data['itemsdetails'] = $this->items_model->getitemdetails($id);
		
		
		$data['stockcard'] = $this->items_model->stockcard($id);
		$data['deliverydetails'] = $this->items_model->deliverydetails($id);
		$data['requisitiondetails'] = $this->items_model->requisitiondetails($id);
		
		$data['subnavtitle'] =$data['itemsdetails']['description'];
		$this->load->view('inc/header_view');
		$this->load->view('supplymanagement/itemsdetails_view',$data);
		$this->load->view('inc/footer_view',$js);
	}
	
	public function savecustomer(){
		$cemail = $this->input->post('cemail');
		$clname = $this->input->post('clname');
		$cfname = $this->input->post('cfname');
		$cmname = $this->input->post('cmname');
		$caddress = $this->input->post('caddress');
		$cmobileno = $this->input->post('cmobileno');
		$cotherno = $this->input->post('cotherno');
		$cpassword = $this->input->post('cpassword');
		
		$this->ticket_model->savecustomer($cemail,$clname,$cfname,$cmname,$caddress,$cmobileno,$cotherno,$cpassword);
	}
	
	public function saveticket(){
		$addedbyuid = $this->session->userdata('uid');
		$customerid = $this->input->post('customerid');
		$categoryid = $this->input->post('categoryid');
		$status = $this->input->post('status');
		$departmentid = $this->input->post('departmentid');
		$priority = $this->input->post('priority');
		$duedate = $this->input->post('duedate');
		$assignedto_uid = $this->input->post('assignedto_uid');
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		
		$this->ticket_model->saveticket($addedbyuid,$customerid,$categoryid,$status,$departmentid,$priority,$duedate,$assignedto_uid,$title,$description);
	}
	
	public function checkduplicatecustomer(){
		$cemail = $this->input->post('cemail');
		echo $this->ticket_model->checkemail($cemail);
		
	}
	
	
	
	

}
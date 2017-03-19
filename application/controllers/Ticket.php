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
			'subnavtitle' => 'Ticket #:'
			
			);
		//javascript module
		$this->js = array(
            'jsfile' => 'ticket.js'
			);
			
		$this->session;
	}
	
	public function index()
	{
		$data = $this->data;
		$js = $this->js;
		
		$data['subnavtitle'] ="Ticket List: All";

		$data['ticketlistclass'] = 'active';
		$data['allclass'] ="active";
		$data['pickupclass'] ="";
		$data['openclass'] ="";
		$data['rmaclass'] ="";
		$data['closedclass'] ="";
		//get all tickets
		$data['tickets'] = $this->ticket_model->getticketlist();
				
		$data['totaltickets'] = $this->ticket_model->gettotaltickets();
		$data['pickuptickets'] = $this->ticket_model->getpickuptickets();
		$data['rmatickets'] = $this->ticket_model->getrmatickets();
		$data['opentickets'] = $this->ticket_model->getopentickets();
		$data['closedtickets'] = $this->ticket_model->getclosedtickets();
		
		$data['categorytickets'] = $this->ticket_model->getcategorytickets();
		$this->load->view('inc/header_view');
		$this->load->view('ticket/ticket_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	public function closed()
	{
		$data = $this->data;
		$js = $this->js;
		
		$data['subnavtitle'] ="Ticket List: RMA";
		$data['ticketlistclass'] = 'active';
		$data['allclass'] ="";
		$data['pickupclass'] ="";
		$data['openclass'] ="";
		$data['rmaclass'] ="";
		$data['closedclass'] ="active";
		$data['tickets'] = $this->ticket_model->getticketliststatus("Closed");
				
				
		$data['totaltickets'] = $this->ticket_model->gettotaltickets();
		$data['pickuptickets'] = $this->ticket_model->getpickuptickets();
		$data['rmatickets'] = $this->ticket_model->getrmatickets();
		$data['opentickets'] = $this->ticket_model->getopentickets();
		$data['closedtickets'] = $this->ticket_model->getclosedtickets();
		
		
		$data['categorytickets'] = $this->ticket_model->getcategorytickets();
		$this->load->view('inc/header_view');
		$this->load->view('ticket/ticket_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	public function open()
	{
		$data = $this->data;
		$js = $this->js;
		
		$data['subnavtitle'] ="Ticket List: RMA";
		$data['ticketlistclass'] = 'active';
		$data['allclass'] ="";
		$data['pickupclass'] ="";
		$data['openclass'] ="active";
		$data['rmaclass'] ="";
		$data['closedclass'] ="";
		$data['tickets'] = $this->ticket_model->getticketliststatus("Open");
				
				
		$data['totaltickets'] = $this->ticket_model->gettotaltickets();
		$data['pickuptickets'] = $this->ticket_model->getpickuptickets();
		$data['rmatickets'] = $this->ticket_model->getrmatickets();
		$data['opentickets'] = $this->ticket_model->getopentickets();
		$data['closedtickets'] = $this->ticket_model->getclosedtickets();
		
		
		$data['categorytickets'] = $this->ticket_model->getcategorytickets();
		$this->load->view('inc/header_view');
		$this->load->view('ticket/ticket_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	public function pickup()
	{
		$data = $this->data;
		$js = $this->js;
		
		$data['subnavtitle'] ="Ticket List: RMA";
		$data['ticketlistclass'] = 'active';
		$data['allclass'] ="";
		$data['pickupclass'] ="active";
		$data['openclass'] ="";
		$data['rmaclass'] ="";
		$data['closedclass'] ="";
		$data['tickets'] = $this->ticket_model->getticketliststatus("Pickup");
				
				
		$data['totaltickets'] = $this->ticket_model->gettotaltickets();
		$data['pickuptickets'] = $this->ticket_model->getpickuptickets();
		$data['rmatickets'] = $this->ticket_model->getrmatickets();
		$data['opentickets'] = $this->ticket_model->getopentickets();
		$data['closedtickets'] = $this->ticket_model->getclosedtickets();
		
		
		$data['categorytickets'] = $this->ticket_model->getcategorytickets();
		$this->load->view('inc/header_view');
		$this->load->view('ticket/ticket_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	public function rma()
	{
		$data = $this->data;
		$js = $this->js;
		
		$data['subnavtitle'] ="Ticket List: RMA";
		$data['ticketlistclass'] = 'active';
		$data['allclass'] ="";
		$data['pickupclass'] ="";
		$data['openclass'] ="";
		$data['rmaclass'] ="active";
		$data['closedclass'] ="";
		$data['tickets'] = $this->ticket_model->getticketliststatus("RMA");
				
				
		$data['totaltickets'] = $this->ticket_model->gettotaltickets();
		$data['pickuptickets'] = $this->ticket_model->getpickuptickets();
		$data['rmatickets'] = $this->ticket_model->getrmatickets();
		$data['opentickets'] = $this->ticket_model->getopentickets();
		$data['closedtickets'] = $this->ticket_model->getclosedtickets();
		
		
		$data['categorytickets'] = $this->ticket_model->getcategorytickets();
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
		
		$data['ticketid'] = $id;
		$data['ticketdetails'] = $this->ticket_model->getticketdetails($id);
		
		if($data['ticketdetails']=="error"){
			show_404();
		}else{
			//do nothing
		}
		
		$data['customers'] = $this->ticket_model->getcustomer();
		$data['category'] = $this->ticket_model->getcategory();
		$data['departments'] = $this->ticket_model->getdepartment();
		$data['agentlist'] = $this->ticket_model->getagent();
		$data['ticketlog'] = $this->ticket_model->getticketlog($id);
		
		
		
		$data['subnavtitle'] ="Ticket #: $id";
		$this->load->view('inc/header_view');
		$this->load->view('ticket/ticketdetails_view',$data);
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
	
	public function savereply(){
		$ticketid = $this->input->post('ticketid');
		$ticket_reply = $this->input->post('ticket_reply');
		$uid = $this->session->userdata('uid');
		
		$this->ticket_model->savereply($ticketid,$ticket_reply,$uid);
	}
	
	
	
	

}
<?php

class Ticket extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//model module
		//$this->load->model('ticket_model');
		$this->load->model('ticket_model');
		$this->load->library('phpmailer');
		$timezonedb = "SET time_zone = 'Asia/Manila'";
		$this->db->query($timezonedb);
		
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
		
		//print_r($data['ticketdetails']);
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
		$problem = $this->input->post('problem');
		$description = $this->input->post('description');
		$history = $this->input->post('history');
		$serialno = $this->input->post('serialno');
		$special_instruction = $this->input->post('special_instruction');
		
		
		$this->ticket_model->saveticket($addedbyuid,$customerid,$categoryid,$status,$departmentid,$priority,$duedate,$assignedto_uid,$problem,$description,$history,$serialno,$special_instruction);
	}
	
	public function checkduplicatecustomer(){
		$cemail = $this->input->post('cemail');
		echo $this->ticket_model->checkemail($cemail);
		
	}
	
	public function savereply(){
		$ticketid = $this->input->post('ticketid');
		$ticket_reply = $this->input->post('ticket_reply');
		$sms = $this->input->post('sms');
		$emailclient = $this->input->post('emailclient');
		$cemail = $this->input->post('cemail');
		$cmobileno = $this->input->post('cmobileno');
		$uid = $this->session->userdata('uid');
		
		//save reply to database
		$this->ticket_model->savereply($ticketid,$ticket_reply,$uid);
		
		//notify via sms
		if($sms == "yes"){
			$sms_to = 
			$this->send_sms($cmobileno,$ticketid,$ticket_reply);
		}
		
		if($emailclient =="yes"){
			$email = $cemail;
			$subject = "Ticket #:".$ticketid." Update";
			$body = "Ticket Details :".$ticket_reply;
			$this->send_email($email,$subject,$body);
		}
	}
	
	public function updateticket(){
		
		$ticketid = $this->input->post('ticketid');
		$formstatus = $this->input->post('status');
		$ticketdetails = $this->ticket_model->getticketdetails($ticketid);
		//print_r($ticketdetails);
		$uid = $this->session->userdata('uid');
		
		if($ticketdetails['status']!=$formstatus){
			//update with log
			$remarks_log = "Changed Status from ".$ticketdetails['status']." to " .$formstatus;
			$this->ticket_model->updateticket($ticketid,$formstatus);
			$this->ticket_model->logticket($ticketid,$formstatus,$remarks_log,$uid);
		}else{
			//do nothing
		}
		
		
		
	}
	
	public function updatedescription(){
		
		$ticketid = $this->input->post('ticketid');
		$problem = $this->input->post('problem');
		$ticketdescription = $this->input->post('ticketdescription');
		$serialno = $this->input->post('serialno');
		$history = $this->input->post('history');
		$special_instruction = $this->input->post('special_instruction');
		
		
		$ticketdetails = $this->ticket_model->getticketdetails($ticketid);
		//print_r($ticketdetails);
		$uid = $this->session->userdata('uid');
		
		$this->ticket_model->updatedescription($ticketid,$problem,$ticketdescription,$serialno,$history,$special_instruction);
		
		$formstatus = $ticketdetails['status'];
		
		if($ticketdetails['problem']!=$problem){
			//update with log
			$remarks_log = "Changed Problem from ".$ticketdetails['problem']." to " .$problem;
			
			$this->ticket_model->logticket($ticketid,$formstatus,$remarks_log,$uid);
		}
		if($ticketdetails['description']!=$ticketdescription){
			$remarks_log = "Changed Description from ".$ticketdetails['description']." to " .$ticketdescription;
			$this->ticket_model->logticket($ticketid,$formstatus,$remarks_log,$uid);
		}
		if($ticketdetails['serialno']!=$serialno){
			$remarks_log = "Changed serial no. from ".$ticketdetails['serialno']." to " .$serialno;
			$this->ticket_model->logticket($ticketid,$formstatus,$remarks_log,$uid);
		}
		if($ticketdetails['history']!=$history){
			$remarks_log = "Changed history from ".$ticketdetails['history']." to " .$history;
			$this->ticket_model->logticket($ticketid,$formstatus,$remarks_log,$uid);
		}
		if($ticketdetails['special_instruction']!=$special_instruction){
			$remarks_log = "Changed History from ".$ticketdetails['special_instruction']." to " .$special_instruction;
			$this->ticket_model->logticket($ticketid,$formstatus,$remarks_log,$uid);
		}
		
		
		
	}
	
	public function send_sms($sms_to,$ticketid,$ticket_reply){
		
			$sms_from = "INFO";
			//$sms_to = "09468147457";
			$user = "APINTJ0GF12MD";
			$pass = "APINTJ0GF12MDNTJ0G";
			$sms_msg = "Ticket id #:".$ticketid."\n".$ticket_reply;
			 $query_string = "api.aspx?apiusername=".$user."&apipassword=".$pass;
			$query_string .= "&senderid=".rawurlencode($sms_from)."&mobileno=".rawurlencode($sms_to);
			$query_string .= "&message=".rawurlencode(stripslashes($sms_msg));        
			$url = "http://gateway.onewaysms.ph:10001/".$query_string;
			//echo $url;   
			//file($url);    
			
			// create a new cURL resource

                        
			$fd = @implode ('', file ($url));    
			//print_r($ch);
                        
                        
                        //echo $url;
                        if ($fd)  
                        {           
                        print_r($fd);            
				    if ($fd > 0) {
					Print("MT ID : " . $fd);
					$ok = "success";
				    }        
				    else {
					print("Please refer to API on Error : " . $fd);
					$ok = "fail";
				    }
                        }           
                        else      
                        {                       
                                    // no contact with gateway                      
                                    $ok = "fail";       
                        }          
                        return $ok; 
	}	
	
	public function send_email($email,$subject,$body){

 
      //$subject = '';
      $name = 'Helpdesk System';
      //$email = 'elvin.casem@gmail.com';
      //$body = "This is body text for test email to combine CodeIgniter and PHPmailer";
      $this->phpmailer->AddAddress($email);
      $this->phpmailer->IsMail();
      $this->phpmailer->From = 'info@helpdesk.evenlyten.com';
      $this->phpmailer->FromName = 'Helpdesk Admin';
      $this->phpmailer->IsHTML(true);
      $this->phpmailer->Subject = $subject;
      $this->phpmailer->Body = $body;
      $this->phpmailer->Send();
 
  
	}
	
	
	

}
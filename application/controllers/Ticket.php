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
		$this->load->helper('form');
		$this->load->helper('url');
		
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
			'templateclass' => '',
			'categoryclass' => '',
			'priorityclass' => '',
			'subnavtitle' => 'Ticket #:'
			
			);
		//javascript module
		$this->js = array(
            'jsfile' => 'ticket.js',
            'datatablescript' => null
			);
			/*'datatablescript' => '<script>$(document).ready(function() {$("#datatable-ticket").DataTable({"order":[[0,"desc"]]} );} );</script>'*/
			
		//$this->js = null;
			
			
		$this->session;
	}
	
	public function index()
	{
		
		$data = $this->data;
		$js = $this->js;
		
		$data['filter_category'] = $this->input->post('filter_category');
		if($data['filter_category']==""){
			$data['filter_category']="All";
		}
		
		$startdate = $this->input->post('startdate');
		$enddate = $this->input->post('enddate');
		if($startdate=="" || $enddate==""){
			$data['startdate'] = $this->ticket_model->getstartdate();
			$startdate = $this->ticket_model->getstartdate();
			$data['enddate'] = $this->ticket_model->getenddate();
			$enddate = $this->ticket_model->getenddate();
		}else{
			$data['startdate'] = $startdate;
			$data['enddate'] = $enddate;
		}
		
		//get all tickets
		$data['tickets'] = $this->ticket_model->getticketlist($data['filter_category'],$startdate,$enddate);
		
		
		//echo $filter_category;
		$data['subnavtitle'] ="Ticket List: All, Category:".$data['filter_category']."";

		$data['ticketlistclass'] = 'active';
		$data['allclass'] ="active";
		$data['pickupclass'] ="";
		$data['openclass'] ="";
		$data['rmaclass'] ="";
		$data['closedclass'] ="";
		$data['overdueclass'] ="";
		
		
		
		
		//getcount
		$data['category'] = $this->ticket_model->getcategory();
		
		$data['totaltickets'] = $this->ticket_model->gettotaltickets();
		$data['pickuptickets'] = $this->ticket_model->getpickuptickets();
		$data['rmatickets'] = $this->ticket_model->getrmatickets();
		$data['opentickets'] = $this->ticket_model->getopentickets();
		$data['closedtickets'] = $this->ticket_model->getclosedtickets();
		$data['orverdueticketcount'] = $this->ticket_model->getoverduecount();
		
		$data['categorytickets'] = $this->ticket_model->getcategorytickets();
		
		
		
		
		
		$this->load->view('inc/header_view');
		$this->load->view('ticket/ticket_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	
	public function overdue()
	{
		$data = $this->data;
		$js = $this->js;
		
		$data['filter_category'] = $this->input->post('filter_category');
		if($data['filter_category']==""){
			$data['filter_category']="All";
		}
		
		
		
		
		$data['subnavtitle'] ="Ticket List: Overdue, Category:".$data['filter_category']."";
		$data['ticketlistclass'] = 'active';
		$data['allclass'] ="";
		$data['pickupclass'] ="";
		$data['openclass'] ="";
		$data['rmaclass'] ="";
		$data['closedclass'] ="";
		$data['overdueclass'] ="active";
		
		$data['tickets'] = $this->ticket_model->getoverdueticketlist($data['filter_category']);
		
		//$data['tickets'] = $this->ticket_model->getticketliststatus("Closed",$data['filter_category'],$startdate,$enddate);
				
		//get count		
		$data['totaltickets'] = $this->ticket_model->gettotaltickets();
		$data['pickuptickets'] = $this->ticket_model->getpickuptickets();
		$data['rmatickets'] = $this->ticket_model->getrmatickets();
		$data['opentickets'] = $this->ticket_model->getopentickets();
		$data['closedtickets'] = $this->ticket_model->getclosedtickets();
		$data['orverdueticketcount'] = $this->ticket_model->getoverduecount();
		
		$data['category'] = $this->ticket_model->getcategory();
		$data['categorytickets'] = $this->ticket_model->getcategorytickets();
		
		$data['startdate'] = $this->ticket_model->getstartdate();
		$data['enddate'] = $this->ticket_model->getenddate();
		
		$this->load->view('inc/header_view');
		$this->load->view('ticket/ticket_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
		
	public function closed()
	{
		$data = $this->data;
		$js = $this->js;
		
		$data['filter_category'] = $this->input->post('filter_category');
		if($data['filter_category']==""){
			$data['filter_category']="All";
		}
		
		//date filter
		$startdate = $this->input->post('startdate');
		$enddate = $this->input->post('enddate');
		if($startdate=="" || $enddate==""){
			$data['startdate'] = $this->ticket_model->getstartdate();
			$startdate = $this->ticket_model->getstartdate();
			$data['enddate'] = $this->ticket_model->getenddate();
			$enddate = $this->ticket_model->getenddate();
		}else{
			$data['startdate'] = $startdate;
			$data['enddate'] = $enddate;
		}
		
		
		$data['subnavtitle'] ="Ticket List: Closed, Category:".$data['filter_category']."";
		$data['ticketlistclass'] = 'active';
		$data['allclass'] ="";
		$data['pickupclass'] ="";
		$data['openclass'] ="";
		$data['rmaclass'] ="";
		$data['closedclass'] ="active";
		$data['overdueclass'] ="";
		$data['tickets'] = $this->ticket_model->getticketliststatus("Closed",$data['filter_category'],$startdate,$enddate);
				
		//get count		
		$data['totaltickets'] = $this->ticket_model->gettotaltickets();
		$data['pickuptickets'] = $this->ticket_model->getpickuptickets();
		$data['rmatickets'] = $this->ticket_model->getrmatickets();
		$data['opentickets'] = $this->ticket_model->getopentickets();
		$data['closedtickets'] = $this->ticket_model->getclosedtickets();
		$data['orverdueticketcount'] = $this->ticket_model->getoverduecount();
		
		$data['category'] = $this->ticket_model->getcategory();
		$data['categorytickets'] = $this->ticket_model->getcategorytickets();
		
		$data['startdate'] = $this->ticket_model->getstartdate();
		$data['enddate'] = $this->ticket_model->getenddate();
		
		$this->load->view('inc/header_view');
		$this->load->view('ticket/ticket_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	public function open()
	{
		$data = $this->data;
		$js = $this->js;
		
		//category filter
		$data['filter_category'] = $this->input->post('filter_category');
		if($data['filter_category']==""){
			$data['filter_category']="All";
		}
		//date filter
		$startdate = $this->input->post('startdate');
		$enddate = $this->input->post('enddate');
		if($startdate=="" || $enddate==""){
			$data['startdate'] = $this->ticket_model->getstartdate();
			$startdate = $this->ticket_model->getstartdate();
			$data['enddate'] = $this->ticket_model->getenddate();
			$enddate = $this->ticket_model->getenddate();
		}else{
			$data['startdate'] = $startdate;
			$data['enddate'] = $enddate;
		}
		//query tickets
		$data['tickets'] = $this->ticket_model->getticketliststatus("Open",$data['filter_category'],$startdate,$enddate);
		
		$data['subnavtitle'] ="Ticket List: Open, Category:".$data['filter_category']."";
		$data['ticketlistclass'] = 'active';
		$data['allclass'] ="";
		$data['pickupclass'] ="";
		$data['openclass'] ="active";
		$data['rmaclass'] ="";
		$data['closedclass'] ="";
		$data['overdueclass'] ="";
		
				
		//get count		
		$data['totaltickets'] = $this->ticket_model->gettotaltickets();
		$data['pickuptickets'] = $this->ticket_model->getpickuptickets();
		$data['rmatickets'] = $this->ticket_model->getrmatickets();
		$data['opentickets'] = $this->ticket_model->getopentickets();
		$data['closedtickets'] = $this->ticket_model->getclosedtickets();
		$data['orverdueticketcount'] = $this->ticket_model->getoverduecount();
		
		$data['category'] = $this->ticket_model->getcategory();
		$data['categorytickets'] = $this->ticket_model->getcategorytickets();
		
		$data['startdate'] = $this->ticket_model->getstartdate();
		$data['enddate'] = $this->ticket_model->getenddate();
		
		$this->load->view('inc/header_view');
		$this->load->view('ticket/ticket_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	public function pickup()
	{
		$data = $this->data;
		$js = $this->js;
		
		$data['filter_category'] = $this->input->post('filter_category');
		
		if($data['filter_category']==""){
			$data['filter_category']="All";
		}
		
		$startdate = $this->input->post('startdate');
		$enddate = $this->input->post('enddate');
		if($startdate=="" || $enddate==""){
			$data['startdate'] = $this->ticket_model->getstartdate();
			$startdate = $this->ticket_model->getstartdate();
			$data['enddate'] = $this->ticket_model->getenddate();
			$enddate = $this->ticket_model->getenddate();
		}else{
			$data['startdate'] = $startdate;
			$data['enddate'] = $enddate;
		}
		$data['tickets'] = $this->ticket_model->getticketliststatus("Pickup",$data['filter_category'],$startdate,$enddate);
		
		$data['subnavtitle'] ="Ticket List: Pickup, Category:".$data['filter_category']."";
		$data['ticketlistclass'] = 'active';
		$data['allclass'] ="";
		$data['pickupclass'] ="active";
		$data['openclass'] ="";
		$data['rmaclass'] ="";
		$data['closedclass'] ="";
		$data['overdueclass'] ="";
		
				
		//get count		
		$data['totaltickets'] = $this->ticket_model->gettotaltickets();
		$data['pickuptickets'] = $this->ticket_model->getpickuptickets();
		$data['rmatickets'] = $this->ticket_model->getrmatickets();
		$data['opentickets'] = $this->ticket_model->getopentickets();
		$data['closedtickets'] = $this->ticket_model->getclosedtickets();
		$data['orverdueticketcount'] = $this->ticket_model->getoverduecount();
		
		$data['category'] = $this->ticket_model->getcategory();
		$data['categorytickets'] = $this->ticket_model->getcategorytickets();
		
		
		
		$this->load->view('inc/header_view');
		$this->load->view('ticket/ticket_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	public function rma()
	{
		$data = $this->data;
		$js = $this->js;
		
		//category filter
		$data['filter_category'] = $this->input->post('filter_category');
		if($data['filter_category']==""){
			$data['filter_category']="All";
		}
		
		//date filter
		$startdate = $this->input->post('startdate');
		$enddate = $this->input->post('enddate');
		if($startdate=="" || $enddate==""){
			$data['startdate'] = $this->ticket_model->getstartdate();
			$startdate = $this->ticket_model->getstartdate();
			$data['enddate'] = $this->ticket_model->getenddate();
			$enddate = $this->ticket_model->getenddate();
		}else{
			$data['startdate'] = $startdate;
			$data['enddate'] = $enddate;
		}
		
		//query ticket
		$data['tickets'] = $this->ticket_model->getticketliststatus("RMA",$data['filter_category'],$startdate,$enddate);
		
		
		$data['subnavtitle'] ="Ticket List: RMA, Category:".$data['filter_category']."";
		$data['ticketlistclass'] = 'active';
		$data['allclass'] ="";
		$data['pickupclass'] ="";
		$data['openclass'] ="";
		$data['rmaclass'] ="active";
		$data['closedclass'] ="";
		$data['overdueclass'] ="";
		
				
		//get count		
		$data['totaltickets'] = $this->ticket_model->gettotaltickets();
		$data['pickuptickets'] = $this->ticket_model->getpickuptickets();
		$data['rmatickets'] = $this->ticket_model->getrmatickets();
		$data['opentickets'] = $this->ticket_model->getopentickets();
		$data['closedtickets'] = $this->ticket_model->getclosedtickets();
		$data['orverdueticketcount'] = $this->ticket_model->getoverduecount();
		
		
		$data['categorytickets'] = $this->ticket_model->getcategorytickets();
		
		$data['category'] = $this->ticket_model->getcategory();
		
		$data['startdate'] = $this->ticket_model->getstartdate();
		$data['enddate'] = $this->ticket_model->getenddate();
		
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
		$data['template_problem'] = $this->ticket_model->gettemplatelist_specific("Problem");
		$data['template_history'] = $this->ticket_model->gettemplatelist_specific("History");
		$data['template_unitdescription'] = $this->ticket_model->gettemplatelist_specific("Unit Description");
		
		$data['priority'] = $this->ticket_model->getpriority();

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
		$data['priority'] = $this->ticket_model->getpriority();
		$data['category'] = $this->ticket_model->getcategory();
		$data['departments'] = $this->ticket_model->getdepartment();
		$data['agentlist'] = $this->ticket_model->getagent();
		$data['ticketlog'] = $this->ticket_model->getticketlog($id);
		
		$base = base_url();
		$fileurl = $base."uploads/".$id.".jpg";
		 $ch = curl_init($fileurl);    
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if($code == 404){
            $data['status'] = "no";
			$data['fileurl'] = "";
        }else{
            $data['status'] = "yes";
			$data['fileurl'] = $fileurl;
        }
        curl_close($ch);
		
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
		$mobileapp = $this->input->post('mobileappnotif');
		$deviceid = $this->input->post('deviceid');
		$cemail = $this->input->post('cemail');
		$cmobileno = $this->input->post('cmobileno');
		$uid = $this->session->userdata('uid');
		
		
		
		
		
		
		//echo $cmobileno;
		//save reply to database
		$this->ticket_model->savereply($ticketid,$ticket_reply,$uid,$sms,$emailclient,$mobileapp);
		
		//notify via sms
		if($sms == "yes"){
			$sms_to = $this->send_sms($cmobileno,$ticketid,$ticket_reply);
		}
		
		if($emailclient =="yes"){
			$email = $cemail;
			$subject = "Ticket #:".$ticketid." Update";
			$body = "Ticket Details :".$ticket_reply;
			$this->send_email($email,$subject,$body);
		}
		
		if($mobileapp =="yes"){
			//$device_id = $deviceid;
			//$subject = "Ticket #:".$ticketid." Update";
			//$body = "Ticket Details :".$ticket_reply;
			$this->send_pushnotif($deviceid,$ticketid,$ticket_reply);
			//echo $pushnotif;
		}
		
		
		
	}
	
	public function updateticket(){
		
		$ticketid = $this->input->post('ticketid');
		$formstatus = $this->input->post('status');
		$priority = $this->input->post('priority');
		$assignedto_uid = $this->input->post('assignedto_uid');
		$departmentid = $this->input->post('departmentid');
		$categoryid = $this->input->post('categoryid');
		

		$ticketdetails = $this->ticket_model->getticketdetails($ticketid);
		//print_r($ticketdetails);
		$uid = $this->session->userdata('uid');
		//update status 
		if($ticketdetails['status']!=$formstatus){
			//update with log
			$remarks_log = "Changed Status from ".$ticketdetails['status']." to " .$formstatus;
			$this->ticket_model->updateticket($ticketid,$formstatus);
			$this->ticket_model->logticket($ticketid,$formstatus,$remarks_log,$uid);
		}else{
			//do nothing
		}
		
		//update agent
		if($ticketdetails['assignedto_uid']!=$assignedto_uid){
			//update with log
			$remarks_log = "Changed Agent from ".$ticketdetails['agentname']." to Agent ID: " .$assignedto_uid;
			$this->ticket_model->updateticket_agent($ticketid,$assignedto_uid);
			$this->ticket_model->logticket($ticketid,$formstatus,$remarks_log,$uid);
		}else{
			//do nothing
		}
		
			//update priority
		if($ticketdetails['priority']!=$priority){
			//update with log
			$remarks_log = "Changed Priority from ".$ticketdetails['priority']." to " .$priority;
			$this->ticket_model->updateticket_priority($ticketid,$priority);
			$this->ticket_model->logticket($ticketid,$formstatus,$remarks_log,$uid);
		}else{
			//do nothing
		}
		
			//update department
		if($ticketdetails['departmentid']!=$departmentid){
			//update with log
			$remarks_log = "Changed Department from ".$ticketdetails['departmentid']." to " .$departmentid;
			$this->ticket_model->updateticket_department($ticketid,$departmentid);
			$this->ticket_model->logticket($ticketid,$formstatus,$remarks_log,$uid);
		}else{
			//do nothing
		}
		
			//update department
		if($ticketdetails['categoryid']!=$categoryid){
			//update with log
			$remarks_log = "Changed Department from ".$ticketdetails['categoryid']." to " .$categoryid;
			$this->ticket_model->updateticket_category($ticketid,$categoryid);
			$this->ticket_model->logticket($ticketid,$formstatus,$remarks_log,$uid);
		}else{
			//do nothing
		}
		
		//update due date by admin
		if($this->session->userdata('usertype')=='21232f297a57a5a743894a0e4a801fc3'){
			$duedate = $this->input->post('duedate');
			$this->ticket_model->updateticket_due($ticketid,$duedate);
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
	
	
	public function archiveticket()
	{
		$ticketid = $this->input->post('ticketid');
		$this->ticket_model->archiveticket($ticketid);
	}
	
	
	public function send_sms($sms_to,$ticketid,$ticket_reply){
		
			$sms_from = "PC4Me";
			//$sms_to = "09468147457";
			$user = "API6IQVAC8N9H";
			$pass = "API6IQVAC8N9HTTKG2";
			$sms_msg = "Ticket id #:".$ticketid."\n".$ticket_reply;
			 $query_string = "?apiusername=".$user."&apipassword=".$pass;
			$query_string .= "&senderid=".rawurlencode($sms_from)."&mobileno=".rawurlencode($sms_to);
			 $query_string .= "&message=".rawurlencode(stripslashes($sms_msg)) . "&languagetype=1";        
			$url = "http://gateway80.onewaysms.ph/api2.aspx".$query_string;
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
	
	
	public function send_pushnotif($deviceid,$ticketid,$ticket_reply){

	$notif_message = "Ticket #$ticketid: $ticket_reply";
     $content = array(
			"en" => $notif_message
			);
		
		$fields = array(
			'app_id' => "4786ef01-ffed-4040-ab42-2ce64113ce95",
			'include_player_ids' => array($deviceid),
			'data' => array("foo" => "bar"),
			'contents' => $content
		);
		
		$fields = json_encode($fields);
    	print("\nJSON sent:\n");
    	print($fields);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
												   'Authorization: Basic NGEwMGZmMjItY2NkNy0xMWUzLTk5ZDUtMDAwYzI5NDBlNjJj'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);
		
		return $response;
 
  
	}
	
	
	
	public function do_upload() { 
		 $ticketfileid = $this->input->post('ticketfileid');
		 $time_stamp = now();
		 //$newfilename = $fileid."jpg";
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'wmv|flv|mp4|mov|gif|jpg|png|jpeg'; 
         $config['max_size']      = 100000; 
         $config['max_width']     = 5000; 
         $config['max_height']    = 5000;  
         $config['overwrite']    = true;  
         $config['file_name']    = $ticketfileid."_".$time_stamp;  
         //$filename    = $config['file_name'];  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('assetimage')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('upload_form', $error); 
         }
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
            //$this->load->view('upload_success', $data); 
			$uid = $this->session->userdata('uid');
			$filename = $this->upload->data('file_name'); 
			$file_type = $this->upload->data('file_type'); 
			$this->ticket_model->savereply_file($ticketfileid,$filename,$uid,$file_type);
			header('Location:details/'.$ticketfileid);
         } 
      }  
	
	
	

}
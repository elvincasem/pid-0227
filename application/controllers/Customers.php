<?php

class Customers extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//model module
		$this->load->model('customers_model');
		//$this->load->model('customers_model');
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
			'templateclass' => '',
			'categoryclass' => '',
			'priorityclass' => '',
			'subnavtitle' => 'Customer List',
			'typeahead' => '1',
			
			);
		//javascript module
		$this->js = array(
            'jsfile' => 'customer.js',
			'datatablescript' => null
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
	
	public function savecustomer(){
		$cemail = $this->input->post('cemail');
		$clname = $this->input->post('clname');
		$cfname = $this->input->post('cfname');
		$cmname = $this->input->post('cmname');
		$caddress = $this->input->post('caddress');
		$cmobileno = $this->input->post('cmobileno');
		$cotherno = $this->input->post('cotherno');
		$cpassword = $this->input->post('cpassword');
		$ccompany = $this->input->post('ccompany');
		
		$this->customers_model->savecustomer($cemail,$clname,$cfname,$cmname,$caddress,$cmobileno,$cotherno,$cpassword,$ccompany);
	}
	
	public function checkduplicatecustomer(){
		$cemail = $this->input->post('cemail');
		echo $this->customers_model->checkemail($cemail);
		
	}
	
	
	public function getcustomerdetails($customerid){
		//$customerid = $this->input->post('customerid');
		
		echo json_encode($this->customers_model->getcustomerdetails($customerid));
	}
	public function getcustomertickets($customerid){
		//$customerid = $this->input->post('customerid');
		
		echo json_encode($this->customers_model->getcustomertickets($customerid));
	}
	
	public function updatecustomer(){
		$customerid = $this->input->post('customerid');
		$cemail = $this->input->post('cemail');
		$clname = $this->input->post('clname');
		$cfname = $this->input->post('cfname');
		$cmname = $this->input->post('cmname');
		$caddress = $this->input->post('caddress');
		$cmobileno = $this->input->post('cmobileno');
		$cotherno = $this->input->post('cotherno');
		$cpassword = $this->input->post('cpassword');
		$ccompany = $this->input->post('ccompany');
		
		$this->customers_model->updatecustomer($customerid,$cemail,$clname,$cfname,$cmname,$caddress,$cmobileno,$cotherno,$cpassword,$ccompany);
	}
	
	public function updatecustomermobile(){
		$customerid = $this->input->post('customerid');
		$cemail = $this->input->post('cemail');
		$clname = $this->input->post('clname');
		$cfname = $this->input->post('cfname');
		$cmname = $this->input->post('cmname');
		$caddress = $this->input->post('caddress');
		$cmobileno = $this->input->post('cmobileno');
		$cotherno = $this->input->post('cotherno');
		$cpassword = $this->input->post('cpassword');
		$ccompany = $this->input->post('ccompany');
		
		header('Access-Control-Allow-Origin: *'); 
		header('Content-Type: application/json');
		
		$this->customers_model->updatecustomer($customerid,$cemail,$clname,$cfname,$cmname,$caddress,$cmobileno,$cotherno,$cpassword,$ccompany);
		
		echo "1";
	}
	
	
	public function updatecustomerdeviceid(){
		$deviceid = $this->input->post('deviceid');
		$login_email = $this->input->post('login_email');
		$login_password = $this->input->post('login_password');
		
		header('Access-Control-Allow-Origin: *'); 
		header('Content-Type: application/json');

		//check if user existing
		$customercount = $this->customers_model->checkcustomer($login_email,$login_password);
//echo json_encode($customercount);
		//$customercount =1;
		//$login_email ="elvin.casem@gmail.com";
		//$deviceid = "12";
		if($customercount==1){


			echo json_encode($this->customers_model->updatecustomerdeviceid($deviceid,$login_email));
		}else{
			$customer_array = array(0);
			echo json_encode($customercount);
		} 
		
	}
	
	public function deletecustomer(){
		$customerid = $this->input->post('customerid');
		$this->db->delete('customer', array('customerid' => $customerid));
		
		
	}
	
	public function getcustomerticket(){
		$useremail = $this->input->post('useremail');
		
		
		header('Access-Control-Allow-Origin: *'); 
		header('Content-Type: application/json');

		echo json_encode($this->customers_model->getcustomerticket_mobile($useremail));
		
	}
	public function getticketdetails(){
		$current_ticket = $this->input->post('current_ticket');
		
		
		header('Access-Control-Allow-Origin: *'); 
		header('Content-Type: application/json');

		echo json_encode($this->customers_model->getticketdetailssingle_mobile($current_ticket));
		
	}
	
	public function getticketlog(){
		$current_ticket = $this->input->post('current_ticket');
		
		
		header('Access-Control-Allow-Origin: *'); 
		header('Content-Type: application/json');

		echo json_encode($this->customers_model->getticketlog_mobile($current_ticket));
		
	}
	
	
	
	

	
	
	
	
	

}
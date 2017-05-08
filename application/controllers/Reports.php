<?php

class Reports extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		//model module
		$this->load->model('reports_model');

		//$this->load->model('employees_model');
		$this->load->helper('date');
		//view module
		 $this->data = array(
            'title' => 'Reports',
			'ticketsclass' => '',
			'ticketsaddclass' => '',
			'ticketlistclass' => '',
			'customersclass' => '',
			'reportsclass' => 'active',
			'settingsclass' => '',
			'usersclass' => '',
			'userssubclass' => '',
			'departmentsclass' => '',
			'templateclass' => '',
			'categoryclass' => '',
			'subnavtitle' => ''
			
			);
		//javascript module
		$this->js = array(
            'jsfile' => '',
			 'datatablescript'=>''
			);
	}
	
	
	public function ticketbycategorydownload($startdate,$enddate,$categoryvalue)
	{
		
		$this->load->library('excel');
		$this->excel->setActiveSheetIndex(0);
		$this->excel->getActiveSheet()->setTitle('Ticket by Category');
		$this->load->database();
		//$users = $this->userModel->get_users();
		
		if($categoryvalue=="All"){
			$sql = $this->db->query("SELECT time_stamp,concat('Ticket#:',ticketid) as ticketnumber,problem,concat(cfname,clname) as customername,name,status,categoryid,priority FROM tickets LEFT JOIN customer ON tickets.customerid = customer.customerid LEFT JOIN users ON tickets.assignedto_uid = users.uid where DATE_FORMAT(time_stamp,'%Y-%m-%d') between ".$this->db->escape($startdate)." AND ".$this->db->escape($enddate)."");
			
			
		}else{
			$sql = $this->db->query("SELECT time_stamp,concat('Ticket#:',ticketid) as ticketnumber,problem,concat(cfname,clname) as customername,name,status,categoryid,priority FROM tickets LEFT JOIN customer ON tickets.customerid = customer.customerid LEFT JOIN users ON tickets.assignedto_uid = users.uid WHERE categoryid=".$this->db->escape($categoryvalue)." AND DATE_FORMAT(time_stamp,'%Y-%m-%d') between ".$this->db->escape($startdate)." AND ".$this->db->escape($enddate)."");
		}
		
		
		$feedbacks = $sql->result_array();
		//$feedbacks = $this->db->query($sql);
		$arrHeader = array('Date Added', 'Ticket #','Problem','Customer','Agent','Status','Category','Priority');
		$this->excel->getActiveSheet()->fromArray($arrHeader,'2','A1');
		//$this->excel->getActiveSheet()->setCellValueByColumnAndRow(A);
		$this->excel->getActiveSheet()->fromArray($feedbacks,'','A2');
		$filename='TicketbyCategory_List.xls';
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');
		$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
		$objWriter->save('php://output');
		
	}
	
	public function ticketbycategory(){
		
		$data = $this->data;
		$js = $this->js;

		$data['categorylist'] = $this->reports_model->getcategory();
		$data['startdate'] = $this->reports_model->getstartdate();
		$data['enddate'] = $this->reports_model->getenddate();
		$this->load->view('inc/header_view');
		$this->load->view('reports/ticketbycategory_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	public function ticketbycategory_view(){
		
		$from=$this->input->post('date1');
		$to=$this->input->post('date2');
		$categoryvalue=$this->input->post('categoryvalue');
		
		$data = $this->data;
		$js = $this->js;

		$data['startdate'] = $from;
		$data['enddate'] = $to;
		$data['categoryvalue'] = $categoryvalue;
		$data['categorylist'] = $this->reports_model->getcategory();
		
		//get all tickets
		$data['tickets'] = $this->reports_model->getticketlist($categoryvalue,$from,$to);
		
		$this->load->view('inc/header_view');
		$this->load->view('reports/ticketbycategory_report_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	
	public function ticketbyagent(){
		
		$data = $this->data;
		$js = $this->js;

		$data['agentlist'] = $this->reports_model->getagentlist();
		$data['startdate'] = $this->reports_model->getstartdate();
		$data['enddate'] = $this->reports_model->getenddate();
		$this->load->view('inc/header_view');
		$this->load->view('reports/ticketbyagent_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	
	public function ticketbyagent_view(){
		
		$from=$this->input->post('date1');
		$to=$this->input->post('date2');
		$agent=$this->input->post('agent');
		
		$data = $this->data;
		$js = $this->js;

		$data['startdate'] = $from;
		$data['enddate'] = $to;
		$data['agent'] = $agent;
		$data['agentlist'] = $this->reports_model->getagentlist();
		
		//get all tickets
		$data['tickets'] = $this->reports_model->getticketlist_agent($agent,$from,$to);
		
		//print_r($data['tickets']);
		
		$this->load->view('inc/header_view');
		$this->load->view('reports/ticketbyagent_report_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	public function ticketbyagentdownload($startdate,$enddate,$agent)
	{
		
		$this->load->library('excel');
		$this->excel->setActiveSheetIndex(0);
		$this->excel->getActiveSheet()->setTitle('Ticket by Category');
		$this->load->database();
		//$users = $this->userModel->get_users();
		
		if($agent=="All"){
			$sql = $this->db->query("SELECT time_stamp,concat('Ticket#:',ticketid) as ticketnumber,problem,concat(cfname,clname) as customername,name,status,categoryid,priority FROM tickets LEFT JOIN customer ON tickets.customerid = customer.customerid LEFT JOIN users ON tickets.assignedto_uid = users.uid where DATE_FORMAT(time_stamp,'%Y-%m-%d') between ".$this->db->escape($startdate)." AND ".$this->db->escape($enddate)."");
			
			
		}else{
			$sql = $this->db->query("SELECT time_stamp,concat('Ticket#:',ticketid) as ticketnumber,problem,concat(cfname,clname) as customername,name,status,categoryid,priority FROM tickets LEFT JOIN customer ON tickets.customerid = customer.customerid LEFT JOIN users ON tickets.assignedto_uid = users.uid WHERE assignedto_uid=".$this->db->escape($agent)." AND DATE_FORMAT(time_stamp,'%Y-%m-%d') between ".$this->db->escape($startdate)." AND ".$this->db->escape($enddate)."");
		}
		
		
		$feedbacks = $sql->result_array();
		//$feedbacks = $this->db->query($sql);
		$arrHeader = array('Date Added', 'Ticket #','Problem','Customer','Agent','Status','Category','Priority');
		$this->excel->getActiveSheet()->fromArray($arrHeader,'2','A1');
		//$this->excel->getActiveSheet()->setCellValueByColumnAndRow(A);
		$this->excel->getActiveSheet()->fromArray($feedbacks,'','A2');
		$filename='TicketbyAgent_List.xls';
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');
		$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
		$objWriter->save('php://output');
		
	}
	
	
	
	
}
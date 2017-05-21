

function saveticket(){
	
	//$('#savebutton').prop("disabled", true);    
	var customerid = document.getElementById("customerid").value;
	var categoryid = document.getElementById("categoryid").value;
	var status = document.getElementById("status").value;
	var departmentid = document.getElementById("departmentid").value;
	var priority = document.getElementById("priority").value;
	var duedate = document.getElementById("duedate").value;
	var assignedto_uid = document.getElementById("assignedto_uid").value;
	var problem = document.getElementById("problem").value;
	var description = document.getElementById("description").value;
	var history = document.getElementById("history").value;
	var serialno = document.getElementById("serialno").value;
	var special_instruction = document.getElementById("special_instruction").value;
	
	//check duplicate
	
		//check blank fields
		
		if(customerid==""){
			$.bootstrapGrowl('<h4><strong>Required fields must not be empty!</strong></h4> <p>Please select a Customer.</p>', {
				type: 'danger',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}});
		}if(problem==""){
			$.bootstrapGrowl('<h4><strong>Required fields must not be empty!</strong></h4> <p>Please enter a Problem</p>', {
				type: 'danger',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}});
		}if(description==""){
			$.bootstrapGrowl('<h4><strong>Required fields must not be empty!</strong></h4> <p>Please enter a Description</p>', {
				type: 'danger',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}});
		}else{
			
			$.ajax({
			url: 'saveticket',
			type: 'post',
			data: {customerid: customerid,categoryid:categoryid,status:status,departmentid:departmentid,priority:priority,duedate:duedate,assignedto_uid:assignedto_uid,problem:problem,description:description,history:history,serialno:serialno,special_instruction:special_instruction},
			success: function(response) {
				console.log(response);
				//location.reload();
				var lastid = JSON.parse(response);
				window.location.href = "details/"+lastid;
		
				
				
				//end saveticket
				
			}
		});
		}
			
		
		
	
	
	
	
	
}

function savereply(){
	
	//$('#savebutton').prop("disabled", true);    
	var ticketid = document.getElementById("ticketid").value;
	var ticket_reply = document.getElementById("ticket-reply").value;
	var cemail = document.getElementById("cemail").value;
	var cmobileno = document.getElementById("cmobileno").value;
	var deviceid = document.getElementById("deviceid").value;
	
	var smsbox = document.getElementById("sms_notif");
	if(smsbox.checked==true){
			var sms = "yes";
	}else{
		//alert("No SMS");
		var sms = "no";
	}
	
	var emailbox = document.getElementById("email_notif");
	
	if(emailbox.checked==true){
		var emailclient = "yes";
	}else{
		//alert("No SMS");
		var emailclient = "no";
	}
	
	var mobileapp = document.getElementById("mobile_notif");
	
	if(mobileapp.checked==true){
		var mobileappnotif = "yes";
	}else{
		//alert("No SMS");
		var mobileappnotif = "no";
	}
	
	//alert(mobileappnotif);
	
	if(ticket_reply==""){
		$.bootstrapGrowl('<h4><strong>Reply field is empty!</strong></h4> <p></p>', {
				type: 'danger',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}});
	}else{
		$.ajax({
			url: '../savereply',
			type: 'post',
			data: {ticketid: ticketid,ticket_reply:ticket_reply,emailclient:emailclient,sms:sms,cemail:cemail,cmobileno:cmobileno,deviceid:deviceid,mobileappnotif:mobileappnotif},
			success: function(response) {
				console.log(response);
			$('#ticket_timeline').load(document.URL +  ' #ticket_timeline');
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Item Updated!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
				
			
				//location.reload();
				//var lastid = JSON.parse(response);
				//window.location.href = "details/"+lastid;
		
				
				
				//end saveticket
				
			}
		});
		//alert(smsbox);
		
	}
			
		
		
	
	
	
	
	
}

function editticket(){
	
	
	
	$('#editbutton').prop("disabled", true); 
	$('#savebutton').prop("disabled", false); 
	//$('#customerid').prop("disabled", false); 
	//$('#departmentid').prop("disabled", false); 
	//$('#categoryid').prop("disabled", false); 
	$('#status').prop("disabled", false); 
	$('#priority').prop("disabled", false); 
	$('#assignedto_uid').prop("disabled", false); 
	
	//admin control
	if(document.getElementById("utype").value=="21232f297a57a5a743894a0e4a801fc3"){
		
		$('#duedate').prop("disabled", false); 
	}
	
	

	
}

function savedetails(){
	
	$('#editbutton').prop("disabled", false); 
	$('#savebutton').prop("disabled", true); 
	var customerid = document.getElementById("customerid").value;
	var categoryid = document.getElementById("categoryid").value;
	var status = document.getElementById("status").value;
	var departmentid = document.getElementById("departmentid").value;
	var priority = document.getElementById("priority").value;
	var duedate = document.getElementById("duedate").value;
	var assignedto_uid = document.getElementById("assignedto_uid").value;

	
}


function editdescription(){
	
	$('#editbutton2').prop("disabled", true); 
	$('#savebutton2').prop("disabled", false); 
	$('#problem').prop("disabled", false); 
	$('#ticketdescription').prop("disabled", false); 
	$('#serialno').prop("disabled", false); 
	$('#history').prop("disabled", false); 
	$('#special_instruction').prop("disabled", false); 
	
}


function updatedetails(){
	
	//$('#savebutton').prop("disabled", true);    
	var ticketid = document.getElementById("ticketid").value;
	var status = document.getElementById("status").value;
	var duedate = document.getElementById("duedate").value;
	var priority = document.getElementById("priority").value;
	var assignedto_uid = document.getElementById("assignedto_uid").value;
	
	
		//update ticket details
		

			$.ajax({
			url: '../updateticket',
			type: 'post',
			data: {ticketid: ticketid,status:status,duedate:duedate,priority:priority,assignedto_uid:assignedto_uid},
			success: function(response) {
				console.log(response);
				$('#ticket_timeline').load(document.URL +  ' #ticket_timeline');
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Item Updated!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
			
			$('#editbutton').prop("disabled", false); 
			$('#savebutton').prop("disabled", true); 
			$('#status').prop("disabled", true); 
			$('#assignedto_uid').prop("disabled", true); 
			$('#priority').prop("disabled", true); 
				
			}
		});
		
	
	
	
	
	

	
}

function updatedescription(){
	
	//$('#savebutton').prop("disabled", true);    
	var ticketid = document.getElementById("ticketid").value;
	
	var problem = document.getElementById("problem").value;
	var ticketdescription = document.getElementById("ticketdescription").value;
	var serialno = document.getElementById("serialno").value;
	var history = document.getElementById("history").value;
	var special_instruction = document.getElementById("special_instruction").value;
	
	
		
			$.ajax({
			url: '../updatedescription',
			type: 'post',
			data: {ticketid: ticketid,problem:problem,ticketdescription:ticketdescription,serialno:serialno,history:history,special_instruction:special_instruction},
			success: function(response) {
				console.log(response);
				$('#ticket_timeline').load(document.URL +  ' #ticket_timeline');
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Item Updated!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
			
			$('#editbutton').prop("disabled", false); 
			$('#savebutton').prop("disabled", true); 
			$('#status').prop("disabled", true); 
				
			}
		});

	
}

function savecustomer(){
	
	//$('#savebutton').prop("disabled", true);    
	var cemail = document.getElementById("cemail").value;
	var clname = document.getElementById("clname").value;
	var cfname = document.getElementById("cfname").value;
	var cmname = document.getElementById("cmname").value;
	var caddress = document.getElementById("caddress").value;
	var cmobileno = document.getElementById("cmobileno").value;
	var cotherno = document.getElementById("cotherno").value;
	var cpassword = document.getElementById("cpassword").value;
	var ccompany = document.getElementById("ccompany").value;
	//check duplicate
	if(cfname ==""){
		$.bootstrapGrowl('<h4><strong>First Name is empty.</strong></h4> <p> Please enter the required field.</p>', {
		type: 'warning',
		delay: 3000,
		allow_dismiss: true,
		offset: {from: 'top', amount: 20}
		})
	}/*else if(cemail ==""){
		$.bootstrapGrowl('<h4><strong>Email is empty.</strong></h4> <p> Please enter the required field.</p>', {
		type: 'warning',
		delay: 3000,
		allow_dismiss: true,
		offset: {from: 'top', amount: 20}
		})
	}*/else{
		
			$.ajax({
			url: '../customers/checkduplicatecustomer',
			type: 'post',
			data: {cemail: cemail},
			success: function(response) {
				console.log(response);
				//location.reload();
				
				if(response==0){
					$.ajax({
						url: '../customers/savecustomer',
						type: 'post',
						data: {cemail: cemail,clname:clname,cfname:cfname,cmname:cmname,caddress:caddress,cmobileno:cmobileno,cotherno:cotherno,cpassword:cpassword,ccompany:ccompany},
						success: function(response) {
							console.log(response);
							location.reload();
							
						}
					});
				}else{
					$.bootstrapGrowl('<h4><strong>Email already in use.</strong></h4> <p> Please enter other email.</p>', {
					type: 'warning',
					delay: 3000,
					allow_dismiss: true,
					offset: {from: 'top', amount: 20}
				});
				}
				
				
				//end savecustomer
				
			}
		});
		
		
	}
	
	
	
	
}
function printticketfulldetails()
{
	var DocumentContainer = document.getElementById('fulldetailsbody');
	var WindowObject = window.open("", "PrintWindow",
	"width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
	WindowObject.document.writeln(DocumentContainer.innerHTML);
	WindowObject.document.close();
	setTimeout(function(){
		WindowObject.focus();
		WindowObject.print();
		WindowObject.close();
	},50);
}


function insertproblem(){
	var closebutton = document.getElementById("closebutton");
	var problem_desc = document.getElementById("templatedescription").value;
	var problem_box = document.getElementById("problem");
	
	problem_box.innerHTML = problem_desc;
	closebutton.click();
}

function archiveticket(id){
	
	var r = confirm("Are your sure you want to archive this Ticket?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: 'ticket/archiveticket',
                    type: 'post',
                    data: {ticketid: id},
                    success: function(response) {
						console.log(response);
						location.reload();
						//$('#general-table').load(document.URL +  ' #general-table');
                    }
                });
		//}else{
			//alert("Invalid Password");
		//}
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}

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
	//check duplicate
	if(cfname ==""){
		$.bootstrapGrowl('<h4><strong>First Name is empty.</strong></h4> <p> Please enter the required field.</p>', {
		type: 'warning',
		delay: 3000,
		allow_dismiss: true,
		offset: {from: 'top', amount: 20}
		})
	}else if(cemail ==""){
		$.bootstrapGrowl('<h4><strong>Email is empty.</strong></h4> <p> Please enter the required field.</p>', {
		type: 'warning',
		delay: 3000,
		allow_dismiss: true,
		offset: {from: 'top', amount: 20}
		})
	}else{
		
			$.ajax({
			url: 'checkduplicatecustomer',
			type: 'post',
			data: {cemail: cemail},
			success: function(response) {
				console.log(response);
				//location.reload();
				
				if(response==0){
					$.ajax({
						url: 'savecustomer',
						type: 'post',
						data: {cemail: cemail,clname:clname,cfname:cfname,cmname:cmname,caddress:caddress,cmobileno:cmobileno,cotherno:cotherno,cpassword:cpassword},
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

function saveticket(){
	
	//$('#savebutton').prop("disabled", true);    
	var customerid = document.getElementById("customerid").value;
	var categoryid = document.getElementById("categoryid").value;
	var status = document.getElementById("status").value;
	var departmentid = document.getElementById("departmentid").value;
	var priority = document.getElementById("priority").value;
	var duedate = document.getElementById("duedate").value;
	var assignedto_uid = document.getElementById("assignedto_uid").value;
	var title = document.getElementById("title").value;
	var description = document.getElementById("description").value;
	//check duplicate
	
		
			$.ajax({
			url: 'saveticket',
			type: 'post',
			data: {customerid: customerid,categoryid:categoryid,status:status,departmentid:departmentid,priority:priority,duedate:duedate,assignedto_uid:assignedto_uid,title:title,description:description},
			success: function(response) {
				console.log(response);
				//location.reload();
				var lastid = JSON.parse(response);
				window.location.href = "ticket/details/"+lastid;
		
				
				
				//end saveticket
				
			}
		});
		
		
	
	
	
	
	
}



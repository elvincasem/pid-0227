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
			url: 'customers/checkduplicatecustomer',
			type: 'post',
			data: {cemail: cemail},
			success: function(response) {
				console.log(response);
				//location.reload();
				
				if(response==0){
					$.ajax({
						url: 'customers/savecustomer',
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
function addcustomer(customerid){
	$('#savebutton').prop("disabled", false);    
	$('#updatebutton').prop("disabled", true); 
	document.getElementById("cemail").value = "";
	document.getElementById("clname").value = "";
	document.getElementById("cfname").value = "";
	document.getElementById("cmname").value = "";
	document.getElementById("caddress").value = "";
	document.getElementById("cmobileno").value = "";
	document.getElementById("cotherno").value = "";
	document.getElementById("cpassword").value = "";
}

function editcustomer(customerid){
	$('#savebutton').prop("disabled", true);    
	$('#updatebutton').prop("disabled", false); 
	
	//alert(customerid);
	$.ajax({
		url: 'customers/getcustomerdetails/'+customerid,
		type: 'post',
		//data: {customerid : customerid},
		success: function(response) {
			console.log(response);
			 var data = JSON.parse(response);
			 
			//insert values	
			document.getElementById("customerid").value = customerid;
			document.getElementById("cemail").value = data.cemail;
			document.getElementById("clname").value = data.clname;
			document.getElementById("cfname").value = data.cfname;
			document.getElementById("cmname").value = data.cmname;
			document.getElementById("caddress").value = data.caddress;
			document.getElementById("cmobileno").value = data.cmobileno;
			document.getElementById("cotherno").value = data.cotherno;
			document.getElementById("cpassword").value = data.cpassword;
			
			
		}  
	});
}

function updatecustomer(){
	
	//$('#savebutton').prop("disabled", true);    
	var customerid = document.getElementById("customerid").value;
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
						url: 'customers/updatecustomer',
						type: 'post',
						data: {customerid:customerid,cemail: cemail,clname:clname,cfname:cfname,cmname:cmname,caddress:caddress,cmobileno:cmobileno,cotherno:cotherno,cpassword:cpassword},
						success: function(response) {
							console.log(response);
							location.reload();
							
						}
					});
		/*
			$.ajax({
			url: 'customers/checkduplicatecustomer',
			type: 'post',
			data: {cemail: cemail},
			success: function(response) {
				console.log(response);
				//location.reload();
				
				if(response==0){
					
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
		}); */
		
		
	}
	
	
	
	
}

function deletecustomer(id){
	
	var r = confirm("Are your sure you want to delete this customer?");
    if (r == true) {
        //alert ("You pressed OK!");
		var person = prompt("Please enter Administrator Password");
		if (person =='superadmin') {
		$.ajax({
                    url: 'customers/deletecustomer',
                    type: 'post',
                    data: {customerid: id},
                    success: function(response) {
						location.reload();
                    }
                });
		}else{
			alert("Invalid Password");
		}
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}


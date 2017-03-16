function savesupplier(){
	
	$('#savesupplierbutton').prop("disabled", true);    
	var suppliername = document.getElementById("suppliername").value;
	var address = document.getElementById("address").value;
	var contactno = document.getElementById("contactno").value;
	var products = document.getElementById("products").value;
	var email = document.getElementById("email").value;
	var tin = document.getElementById("tin").value;
	
	$.ajax({
		url: 'suppliers/savesupplier',
		type: 'post',
		data: {suppliername: suppliername,address:address,contactno:contactno,products:products,email:email,tin:tin},
		success: function(response) {
			//console.log(response);
			location.reload();
			
		}
	});
	
}

function deletesupplier(id){
	
	var r = confirm("Are your sure you want to delete this supplier?");
    if (r == true) {
        //alert ("You pressed OK!");
		var person = prompt("Please enter Administrator Password");
		if (person =='superadmin') {
		$.ajax({
                    url: 'suppliers/deletesupplier',
                    type: 'post',
                    data: {supplierid: id},
                    success: function(response) {
						console.log(response);
						location.reload();
						//$('#general-table').load(document.URL +  ' #general-table');
                    }
                });
		}else{
			alert("Invalid Password");
		}
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}
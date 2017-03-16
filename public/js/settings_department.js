function savedepartment(){
	
	$('#savebutton').prop("disabled", true);    
	var departmentname = document.getElementById("departmentname").value;
	
	$.ajax({
		url: 'departments/savedepartment',
		type: 'post',
		data: {departmentname: departmentname},
		success: function(response) {
			//console.log(response);
			location.reload();
		}
	});
	
}

function deletedepartment(id){
	
	var r = confirm("Are your sure you want to delete this Department?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: 'departments/deletedepartment',
                    type: 'post',
                    data: {did: id},
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
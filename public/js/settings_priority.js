function savepriority(){
	
	$('#savebutton').prop("disabled", true);    
	var priorityname = document.getElementById("priorityname").value;
	
	$.ajax({
		url: 'priority/savepriority',
		type: 'post',
		data: {priorityname: priorityname},
		success: function(response) {
			//console.log(response);
			location.reload();
		}
	});
	
}

function deletepriority(id){
	
	var r = confirm("Are your sure you want to delete this Priority?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: 'priority/deletepriority',
                    type: 'post',
                    data: {priorityid: id},
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
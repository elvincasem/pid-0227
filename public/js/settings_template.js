function savetemplate(){
	
	$('#savebutton').prop("disabled", true);    
	var templatedescription = document.getElementById("templatedescription").value;
	
	$.ajax({
		url: 'template/savetemplate',
		type: 'post',
		data: {templatedescription: templatedescription},
		success: function(response) {
			//console.log(response);
			location.reload();
		}
	});
	
}

function deletedepartment(id){
	
	var r = confirm("Are your sure you want to delete this Template?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: 'template/deletedepartment',
                    type: 'post',
                    data: {templateid: id},
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

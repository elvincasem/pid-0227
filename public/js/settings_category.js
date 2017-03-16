function savecategory(){
	
	$('#savebutton').prop("disabled", true);    
	var categoryname = document.getElementById("categoryname").value;
	
	$.ajax({
		url: 'category/savecategory',
		type: 'post',
		data: {categoryname: categoryname},
		success: function(response) {
			//console.log(response);
			location.reload();
		}
	});
	
}

function deletecategory(id){
	
	var r = confirm("Are your sure you want to delete this Category?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: 'category/deletecategory',
                    type: 'post',
                    data: {categoryid: id},
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

function addapr(){
	
			$('#updateapr').prop("disabled", true);    
			$('#saveproject').prop("disabled", false);    
			
}

function saveasset(){
	
	$('#savebutton').prop("disabled", true);    
	var particulars = document.getElementById("particulars").value;
	var article = document.getElementById("article").value;
	var classification = document.getElementById("classification").value;
	
	
	$.ajax({
		url: 'asset/saveasset',
		type: 'post',
		data: {particulars: particulars,article:article,classification:classification},
		success: function(response) {
			//console.log(response);
			location.reload();
			
		}
	});
	
}

function deleteasset(id){
	
	var r = confirm("Are your sure you want to delete this asset?");
    if (r == true) {
        //alert ("You pressed OK!");
		var person = prompt("Please enter Administrator Password");
		if (person =='superadmin') {
		$.ajax({
                    url: 'asset/deleteasset',
                    type: 'post',
                    data: {assetid: id},
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

function editequipment(equipno){
	
	//$('#update').removeAttr("disabled");
	//$('#updateproject').prop("disabled", false);    
	//$('#saveproject').prop("disabled", true);    

	
	$.ajax({
		url: '../getesinglequipment/'+equipno,
		type: 'post',
		//data: {projectid : id},
		success: function(response) {
			console.log(response);
			 var data = JSON.parse(response);
			 /*
			//insert values	
			document.getElementById("projectid").value = projid;
			document.getElementById("projectname").value = data.projectname;
			document.getElementById("projectnumber").value = data.projectnumber;
			document.getElementById("projectdate").value = data.formdate;
			document.getElementById("signoff").value = data.originator;
			
			var projecttypevalue = data.projecttype;
			var proj = document.getElementById("projecttype");
			var opt = document.createElement("option");
			opt.value = data.projecttype;
			if(data.projecttype==""){
				opt.text = "";
			}else{
				opt.text = data.projecttype;
			}
			
			opt.selected = "selected";

			proj.add(opt,  proj.options[0]);
			
			
			
			return "valid";
			*/
		} 
	});
		
$('#updateequipment').prop("disabled", true); 	
	
	
}
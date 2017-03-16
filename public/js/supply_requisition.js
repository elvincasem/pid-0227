$('#addreq').click(function(){
		//clear fields
		//alert("clear");
		//document.getElementById("rdate").value = "";
		document.getElementById("rno").value = "";
		document.getElementById("requester_id").value = ""
		
		
		var lastreq = document.getElementById("lastreq").value;
		var year = new Date().getFullYear();
		var prefix = "RIS";
	
		var splits = lastreq.split("-");
		var lastyear = splits[0].substring(3, 8);
		
		if(lastyear!=year){
			//start to 1
			
			var lastreqno = 1;
		}else{
			var lastreqno = parseInt(splits[1]);
		}
		
		var increment1 = lastreqno+1;
		var strinc = increment1.toString();
		
		if(strinc.length==1){
			var zero ="0000";
		}
		if(strinc.length==2){
			var zero ="000";
		}
		if(strinc.length==3){
			var zero ="00";
		}
		if(strinc.length==4){
			var zero ="0";
		}
		if(strinc.length==5){
			var zero ="0";
		}
		if(strinc.length==6){
			var zero ="";
		}
		
		//if(increment1.length )
		
		
		var displayreqno = prefix+year+"-"+zero+increment1;
	
		document.getElementById("rno").value = displayreqno;
		//console.log(lastyear);

	});
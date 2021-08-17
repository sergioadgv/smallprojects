	
	
	// $(function(){
		// $('#checkoutModal').on('show.bs.modal', function(){
			// var myModal = $(this);
			// clearTimeout(myModal.data('hideInterval'));
			// myModal.data('hideInterval', setTimeout(function(){
				// myModal.modal('hide');
				
				// window.setTimeout(function(){
					
					// window.location.href = "http://localhost:8080/cartstore/";
					
					// }, 500);
				
			// }, 2000));
			
		// });
		
		
	// });
	
	$("#checkoutbutton").click(function(){
		
		// alert("here");
		
		var input_name = document.getElementById("inputName").value; 
		var input_transport = document.getElementById("inputTransport").value;
		var input_email = document.getElementById("inputEmail").value;
		var input_number = document.getElementById("inputNumber").value;
		
		// var name_value = input_name.value;
		
		// alert("Namsse: "+input_name+"<br> Email: "+input_email+"<br> Number: "+input_number+"<br> Transport Code: "+input_transport);
		
		var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
		
		if( input_name.length === 0 || input_number.length === 0 || input_email.length === 0){
		
				// alert("Por favor complete todos los campos!");
			
				$('#fillEntriesModal').modal('show'); 
			
				var interval;
			
			
				interval = setInterval(function () {
					clearInterval(interval);
					$('#fillEntriesModal').modal('hide');
					// $('.modal').modal('hide');				
				},2000);
			
			
		
			}
		
		else if(!input_email.match(mailformat)){
		
			$('#enterEmailModal').modal('show'); 
			
				var interval;
			
			
				interval = setInterval(function () {
					clearInterval(interval);
					$('#enterEmailModal').modal('hide');
					// $('.modal').modal('hide');				
				},2000);

		}
		
		else{
			
			// alert("Namsse: "+input_name+"<br> Email: "+input_email+"<br> Number: "+input_number+"<br> Transport Code: "+input_transport);
			
			window.location.replace("http://localhost:8080/cartstore/payment.php");
			
			$.ajax({

				url : "../cartstore/classes/sendCart.php",
				type : "POST",
				dataType: "text/plain",
				 
				data : {
					"clientName" : input_name,
					"clientEmail" : input_email,
					"clientNumber": input_number
					
				},
				
			});
			
			
			
			
		}
		
		
		
		
			
		
	});
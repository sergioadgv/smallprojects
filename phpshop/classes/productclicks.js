
	$("#cartbutton").click(function(){
		
		// alert("here");
		$("#cartproducts").load("../cartstore/classes/sendCart.php");	
		
	});
	
	
	function updateCartQty(newQty,newPrd) { 
            // alert("Item is: "+productItem);
			
			var newQuantity = newQty;
			var productID = newPrd;
			
			if(newQuantity < 1){
				alert("La nueva Cantidad debe ser mayor a 0!")
			}
			
			else{
				
			$('#productQtyChangedModal').modal('show'); 
			
			var interval;
			
			
			interval = setInterval(function () {
				clearInterval(interval);
				$('#productQtyChangedModal').modal('hide');
				// $('.modal').modal('hide');				
			},1300);
			
			// alert("Cantidad Actualizada, nuevo ingreso: "+newQuantity);
			
			
			
			$.ajax({

				url : "../cartstore/classes/updateCartItem.php",
				type : "POST",
				dataType: "text/plain",
				 
				data : {
					"newProductQuantity" : newQuantity,
					"productIDtoUpdate" : productID
					
				},
				
				complete: function() {
						  $("#cartproducts").load("../cartstore/classes/populatecart.php"); 
						 }
				
			});
			
			// $('.modal').modal('hide');
			
			
			}
			
        } 
	
	
	function checkout() { 
            window.open( 
              "checkout.php", "_blank"); 
        } 
	
	
	
	function deleteCartItem(productItem) { 
            // alert("Item is: "+productItem);
			
			var myDeleteProdRef = productItem;
			
			$('#productDeleteProdModal').modal('show'); 
			
			var interval;
			
			
			interval = setInterval(function () {
				clearInterval(interval);
				$('#productDeleteProdModal').modal('hide');
				// $('.modal').modal('hide');				
			},1500);
			
			
			// $('.modal').modal('hide');
			
			$.ajax({

				url : "../cartstore/classes/deleteCartItem.php",
				type : "POST",
				dataType: "text/plain",
				 
				data : {
					"productDeleteReference" : myDeleteProdRef,
					
				},
				complete: function() {
						  $("#cartproducts").load("../cartstore/classes/populatecart.php"); 
						 }
				
			});
			// alert("Here");
			
        } 
	
	function getVariations(valuetoprint){
			var myProdRef = valuetoprint;
			
			var modalValue = "Pref"+valuetoprint;
			
			// alert ("this works"+modalValue);
			
			$("#"+modalValue).load("../cartstore/classes/populatevariations.php",{
				ProductReference: myProdRef
			});

				
			 // document.write('<div>Print this after the script tag</div>');
		};

	
	
	
	
	function addToCart(valuetoadd){
		var inputID = "qinput"+valuetoadd;
		
		// alert('Here!');
		
		var theValue = valuetoadd;
		
		var input_element = document.getElementById(inputID); 
		
		var element_value = input_element.value;
		
		
		// alert ("Prod ID: "+valuetoadd+" Quantity Value: "+element_value);
		
		if (element_value>0){
			
			$.ajax({

				url : "../cartstore/classes/addToCart.php",
				type : "POST",
				dataType: "text/plain",
				 
				data : {
					"productReference" : theValue,
					"productQuantity" : element_value
				},
				
			});
			
			// alert ("Producto Agregadisimo!");
			
			$('#productAddedModal').modal('show'); 
			
			var interval;
			
			
			interval = setInterval(function () {
				clearInterval(interval);
				$('#productAddedModal').modal('hide');
				// $('.modal').modal('hide');				
			},1500);
			
			
			
			
			// $('.modal').modal('hide');
			
		}
		else{
			alert ("El valor debe ser mayor a 0.");
		}
		
		
		
		
	};
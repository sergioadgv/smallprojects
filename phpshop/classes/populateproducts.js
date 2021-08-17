$(document).ready(function(){
	var product1Count = 6;
	var cat1 = 0;
	
	$("#products").load("classes/populatestore.php",{
		
		productNewCount: product1Count,
		newProdCategory: cat1			
		});
	

	$("#btn").click(function(){
		product1Count = product1Count + 3;
		$("#products").load("classes/populatestore.php",{
			productNewCount: product1Count,
			newProdCategory: cat1
		});
		
	});
	


	$("#filter0").click(function(){
		cat1 = 0;
		product1Count = 6;
		$("#products").load("classes/populatestore.php",{
		productNewCount: product1Count,
		newProdCategory: cat1			
		});
		
		
		
			$("#btn").click(function(){
			product1Count = product1Count + 3;
			$("#products").load("classes/populatestore.php",{
				productNewCount: product1Count,
				newProdCategory: cat1
			});
			
		});
		
		
		
	});

	
	$("#filter1").click(function(){
		cat1 = 1;
		product1Count = 6;
		$("#products").load("classes/populatestore.php",{
		productNewCount: product1Count,
		newProdCategory: cat1			
		});
		
		
		
			$("#btn").click(function(){
			product1Count = product1Count + 3;
			$("#products").load("classes/populatestore.php",{
				productNewCount: product1Count,
				newProdCategory: cat1
			});
			
		});
			
		
	});
	
	$("#filter2").click(function(){
		cat1 = 2;
		product1Count = 6;
		$("#products").load("classes/populatestore.php",{
		productNewCount: product1Count,
		newProdCategory: cat1			
		});
		
		
		
			$("#btn").click(function(){
			product1Count = product1Count + 3;
			$("#products").load("classes/populatestore.php",{
				productNewCount: product1Count,
				newProdCategory: cat1
			});
			
		});
		
		
		
	});
	
	$("#filter3").click(function(){
		cat1 = 3;
		product1Count = 6;
		$("#products").load("classes/populatestore.php",{
		productNewCount: product1Count,
		newProdCategory: cat1			
		});
		
		
		
			$("#btn").click(function(){
			product1Count = product1Count + 3;
			$("#products").load("classes/populatestore.php",{
				productNewCount: product1Count,
				newProdCategory: cat1
			});
			
		});
		
		
		
	});
	
	
	
	
});	

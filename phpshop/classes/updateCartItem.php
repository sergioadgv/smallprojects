<?php
	
	 
	
	include_once 'cartitemcontr.class.php';
	session_start();

		$newQty = $_POST['newProductQuantity'];
		$productIDtoUPDT = $_POST['productIDtoUpdate'];
		
		
		$updateQTY = new CartItemContr;
		
		$updateQTY->changeCartItem($_SESSION["cartid"],$productIDtoUPDT,$newQty);
				


?>
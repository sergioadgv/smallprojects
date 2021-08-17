<?php
	
	 
	
	include_once 'cartitemcontr.class.php';
	session_start();

		$productToDelete = $_POST['productDeleteReference'];
		
		$deleteItem = new CartItemContr;
		
		$deleteItem->eraseCartItem($_SESSION["cartid"], $productToDelete);
				


?>
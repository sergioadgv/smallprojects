<?php

	include_once 'cartview.class.php';
	include_once 'cartcontr.class.php';
	
	include_once 'cartitemview.class.php';
	include_once 'cartitemcontr.class.php';
	 
	session_start(); 
	
	if (isset($_SESSION["cartid"])){
		
		
		
		$newtest = new CartItemView;
		$newtest->viewAllCartItemsbyID($_SESSION["cartid"]);
	
	}
	else{
		
		// working
		$baseCart = new CartContr;
		$baseCart->newCart('Abandoned Cart','email@email.com');
		
		$newtest = new CartView;
		$newtest->getLatestCart();
		

		$newtest = new CartItemView;
		$newtest->viewAllCartItemsbyID($_SESSION["cartid"]);
		
		
	
		}

?>
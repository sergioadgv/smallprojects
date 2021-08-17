<?php
	session_start();
	include_once 'cartcontr.class.php';
	
	// $_SESSION['message'] = $message;
	
	
	
		
	
		

		
		
		$id = $_SESSION["cartid"];
		$name = $_POST['clientName'];
		$email = $_POST['clientEmail'];
		$number = $_POST['clientNumber'];
		// $transport = $_POST[];
		
		// header("location:../index.php");
		
		$sendCart = new CartContr;
		$sendCart->setCart($id, $name, $email, $number);
		
	
	
		// header("location:../index.php"); 
		
		
		
	
	 
	
	

?>
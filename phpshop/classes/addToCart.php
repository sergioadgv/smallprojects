<?php
	
	include_once 'cartitemcontr.class.php';
	
	session_start(); 
		
	if (isset($_POST['productReference'])&&isset($_POST['productQuantity'])) {
		
		// header("location:../index.php");
		
		$prod = $_POST['productReference'];
		$qty = $_POST['productQuantity'];
		
		if ($qty>0){
			
		
			$testi = $_SESSION["cartitems"][0];
		
		
			if($_SESSION["itemnumber"] == 0){
				
				$additem = new CartItemContr;
				$additem->AddCartItem($_SESSION["cartid"],$prod,$qty);
				

			}
			else if ($_SESSION["itemnumber"]>0){
			
						$i = 0;
						$j = 0;
						$b = "99";
						
						while($_SESSION["itemnumber"]>$i){
							if($_SESSION["cartitems"][$j] == $prod){
									$b = 42;
							}
						
						
							$i++;
							$j++;
						}
						
						if($b == 42){
							$additem = new CartItemContr;
							$additem->changeCartItem($_SESSION["cartid"],$prod,$qty);
						}
						else if ($b == 99){
							
							$additem = new CartItemContr;
							$additem->AddCartItem($_SESSION["cartid"],$prod,$qty);
							
						}
					
			
			}

		}
		
	}
	

?>
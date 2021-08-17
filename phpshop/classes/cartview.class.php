<?php
require_once 'cart.class.php';



class CartView extends Cart{


// interact with website

	public function showCartbyID($id) {

		$results = $this->getCartByID($id);
		// echo "Cart Name: " . $results[0]['Client_Name'];
		// echo "Email: " . $results[0]['Contact_Email'];
		
		// Here I set the session Variables
		
		
		return $results;
	}



	public function viewAllCarts(){

		$allproducts = $this->getAllCarts();
		echo $allproducts;
	}




	public function getLatestCart(){
		
		$lastCart = $this->getLastCart();
		
		$newOrgID = $lastCart[0];
		
		
		$_SESSION["cartid"] = $newOrgID;
		
		// echo $_SESSION["cartid"];
		
		 
		return $lastCart;
		
				
		
	}


	


// End of Class



}
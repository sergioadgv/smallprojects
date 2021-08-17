<?php
require_once 'dbh.class.php';

class Cart extends Dbh {

	// private $CartID;
	// private $ClientName;
	// private $BillingName;
	// private $billingid;
	// private $transport;
	// private $timestamp;
	
	
	
	protected function createCart($name, $email){
		$sql = "INSERT INTO cart (Client_Name, Contact_Email)  VALUES (?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$name, $email]);
		
	}
	


	

	protected function setCartDetails($id, $name, $email, $number){
		
		$sql = "UPDATE cart SET Client_Name=?,Contact_Email=?,Contact_Number=? WHERE Cart_ID=?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$name, $email, $number, $id]);

	}
	
	protected function getCartByID($id){
		$sql = "SELECT * FROM cart WHERE Cart_ID = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$id]);

		$results = $stmt->fetchAll();
		return $results;
	}

	

	protected function getLastCart(){
		$sql = "SELECT * FROM cart ORDER by Cart_ID ASC";
		$stmt = $this->connect()->query($sql);
		$result = $stmt->fetchAll();
		
		
		
		$numberOfCarts = count($result)-1;
		// echo $numberOfCarts;
		
		// var_dump($result[$numberOfCarts]);
		
		// echo 'yoooo';
		
		
		// echo $numberOfCarts;
		
		$var1 = array_column($result, 'Cart_ID');
		
		// return $cartid[$numberOfCarts];
		
		$var2 = array_column($result, 'Client_Name');
		
		$var3 = array_column($result, 'Contact_Email');
		
		$var4 = array_column($result, 'Contact_Number');
		
		$var5 = array_column($result, 'Billing_Name');
		
		$var6 = array_column($result, 'Billing_ID');
		
		$var7 = array_column($result, 'Transport_Method');
		$var8 = array_column($result, 'Time_Stamp');
		
		// echo $clientname[17];
		
		$output = array($var1[$numberOfCarts], $var2[$numberOfCarts], $var3[$numberOfCarts], $var4[$numberOfCarts], $var5[$numberOfCarts], $var6[$numberOfCarts],$var7[$numberOfCarts],$var8[$numberOfCarts]);
		
		return $output;
		
		// $output = [$id,$name,];
		
		// return $output;
	}

	protected function getAllCarts(){
		$sql = "SELECT * FROM cart ORDER by Cart_ID ASC";
		
		
		$stmt = $this->connect()->query($sql);
		$result = $stmt->fetchAll();
		return $result;
		
		
	}

	
	


// End of Class

}

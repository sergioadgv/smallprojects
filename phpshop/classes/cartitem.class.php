<?php
require_once 'dbh.class.php';



class CartItem extends Dbh {

	private $ItemID;
	private $CartRef;
	private $ProductRef;
	private $Quantity;
	
	
	protected function getCartItemByID($id){
		$sql = "SELECT * FROM cartitems WHERE Product_Ref = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$id]);


		$results = $stmt->fetchAll();
		return $results;
	}
	
	protected function createCartItem($cartid, $productid, $qty){
		$sql = "INSERT INTO cartitems (Cart_Ref, Product_Ref, Quantity)  VALUES (?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$cartid, $productid, $qty]);
	}
	
	protected function deleteCartItem($cartid, $productid){
		$sql = "DELETE FROM cartitems WHERE Cart_Ref =? AND Product_Ref =?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$cartid,$productid]);
	}

	

	protected function getCartItemsByCartID($cartid){
		$sql = "SELECT * FROM cartitems WHERE Cart_Ref = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$cartid]);

		$results = $stmt->fetchAll();
		return $results;
	}

	protected function updateCartItem($cartid, $productid, $qty){
		$sql = "UPDATE cartitems SET Quantity =? WHERE Cart_Ref =? AND Product_Ref =?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$qty,$cartid, $productid]);
	}

}
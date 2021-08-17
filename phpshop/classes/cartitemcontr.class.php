<?php
require_once 'cartitem.class.php';


class CartItemContr extends CartItem{


// interact with website

	public function AddCartItem($cartid, $productid, $qty) {
		
		$results = $this->createCartItem($cartid, $productid, $qty);
		
	}
	
	
	public function eraseCartItem($cartid, $productid) {
		
		$results = $this->deleteCartItem($cartid, $productid);
		
	}
	
	
	public function changeCartItem($cartid, $productid, $qty) {
		
		$results = $this->updateCartItem($cartid, $productid, $qty);
		
	}
	
	
	
	

}
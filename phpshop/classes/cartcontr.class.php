<?php
include_once 'cart.class.php';

class CartContr extends Cart{

// used to update database

	public function newCart($name, $email) {

		// Clean Data

		$this->createCart($name, $email);

	}
	
	public function setCart($id, $name, $email, $number) {

		$this->setCartDetails($id, $name, $email, $number);

	}
	
	

}

<?php

class ProductsContr extends Products{

// used to update database

	public function createProducts($name, $surname, $password, $type, $address) {

		$this->setUser($name, $surname, $password, $type, $address);

	}

}

<?php
require_once 'dbh.class.php';

class Products extends Dbh {

	


	protected function getProductByID($id){
		$sql = "SELECT * FROM products WHERE ID = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$id]);

		$results = $stmt->fetchAll();
		return $results;
	}


	protected function setProduct($name, $description, $price, $imagelink, $category, $type){
		$sql = "INSERT INTO Products (Name, Description, Price, Image_Link, Category, Type)  VALUES (?,?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$name, $description, $price, $imagelink, $category, $type]);


	}

	protected function getAllProducts(){
		$sql = "SELECT * FROM products ORDER by ID ASC";	
		$stmt = $this->connect()->query($sql);
		
		$result = $stmt->fetchAll();
		return $result;

		
		
	}


	
	protected function getSomeProducts($somequantity){
		$sql = "SELECT * FROM products ORDER by ID DESC LIMIT ?";
		
		$stmt = $this->connect()->prepare($sql);
		
		// $integer=intval($somequantity);
		$stmt->bindParam(1, $somequantity, PDO::PARAM_INT);
		
		$stmt->execute();
		
		$result = $stmt->fetchAll();
		
		
		return $result;
		
		
	}
	
	protected function getSomeCategoryProducts($somequantity, $category){
		$sql = "SELECT * FROM products WHERE Category = ? LIMIT ?";
		
		$stmt = $this->connect()->prepare($sql);
		
		$stmt->bindParam(2, $somequantity, PDO::PARAM_INT);
		$stmt->bindParam(1, $category, PDO::PARAM_INT);
		
		$stmt->execute();
		
		$result = $stmt->fetchAll();
		return $result;
		

		
		
	}

	







}
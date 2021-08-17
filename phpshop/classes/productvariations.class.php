<?php
require_once 'dbh.class.php';

class ProductVariations extends Dbh {

	


	protected function getProductVariationsByID($id){
		$sql = "SELECT * FROM productvariations WHERE Product_Ref = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$id]);


		$results = $stmt->fetchAll();
		return $results;
	}

	protected function getCartItemVariationByID($id){
		$sql = "SELECT * FROM productvariations WHERE ID = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$id]);


		$results = $stmt->fetchAll();
		return $results;
	}
	

}
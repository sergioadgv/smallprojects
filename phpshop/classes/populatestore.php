<?php

	include_once 'productsview.class.php';
			
			$productCount = $_POST['productNewCount'];
			
			$productCategory = $_POST['newProdCategory'];
		
			
			
			
			if($productCategory<1){
				$test = new ProductsView; 
				$test->populateSomeProducts($productCount);
			}
			
			else{
				
				$test = new ProductsView; 
				$test->populateSomeCategoryProducts($productCount, $productCategory);
			}
			
			
			
			
			
			
			

		
		
?>
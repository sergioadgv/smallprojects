<?php

	include_once 'productsview.class.php';
			
			
			$newCategory = $_POST['newCategory'];
		
			
			
			$testProduct = new ProductsView();
			$testProduct->populateCategoryProducts($newCategory);
			

		
		
?>
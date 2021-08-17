<?php
require_once 'cartitem.class.php';


class CartItemView extends CartItem{


// interact with website


public function showCartItembyID($id) {

		$results = $this->getCartItemByID($id);
		
		
		echo 
		'<tr>
			<td data-th="Product">
				<div class="row">
					
					<div class="col-md-1"></div>
					<div class="col-md-9">
						<p><strong>'.htmlspecialchars($results[0]['Name']).'</strong></p>
						<p>'.htmlspecialchars($results[0]['Description']).'</p>
					</div>
				</div>
			</td>
			<td data-th="Price">₡'.htmlspecialchars($results[0]['Price']).'</td>
			<td data-th="Quantity">
				
				<input type="number" class="form-control text-center" value="
				';

	
	}




	public function viewAllCartItemsbyID($id){

		$allitems = $this->getCartItemsByCartID($id);
		
		// return $allitems;
		
		$itemid = array_column($allitems, 'Item_ID');
		$qty = array_column($allitems, 'Quantity');
		$pref = array_column($allitems, 'Product_Ref');
		
		
		
		
		$numberOfItems = count($allitems);
		
		
		
		$_SESSION["itemnumber"] =  $numberOfItems;
		
		// echo $numberOfItems;
		
		$i = 0;
		$j = 0;
		$output = [];
		
		
		$_SESSION["cartitems"] = [];
		$_SESSION["cartqtys"] = [];
		$_SESSION["cartitemids"] = [];
		
		
		while($i<$numberOfItems){		
			$i++;
			
			
			
			// echo $itemcartref[$j];
			// echo '<br>';
			$_SESSION["cartitemids"][$j] = $itemid[$j];
			$_SESSION["cartitems"][$j] = $pref[$j];
			$_SESSION["cartqtys"][$j] = $qty[$j];
			// echo 'Here is the output: '.$output[$j].'<br>';
			
			$j++;
			
		}
		// return $numberOfItems;
	}	


	
}

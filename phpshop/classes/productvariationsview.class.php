<?php
require_once 'productvariations.class.php';


class ProductVariationsView extends ProductVariations{


			
	public function showCartItemVarbyID($id) {

		$results = $this->getCartItemVariationByID($id);

		echo 
		'<tr>
			<td data-th="Product">
				<div class="row">
					
					
					<div class="col-md-9">
						<h6 class="nomargin"><strong>'.htmlspecialchars($results[0]['Description']).'</strong></h6>
						
					</div>
				</div>
			</td>
			<td data-th="Price">₡'.htmlspecialchars(number_format($results[0]['Price'], 2, '.', ',')).'</td>
			<td data-th="Quantity">';

	
	}
		public function showProdVarPriceByID($id){
		$results = $this->getCartItemVariationByID($id);
		
		// return $results;
		$price = $results[0]['Price'];
		// array_column($results, 'Price');
			
			array_push($_SESSION["cartitemprices"],$price);
			
		}
			
		
		public function viewAllVariationsperID($id){

			$allvariations = $this->getProductVariationsByID($id);
			
			$numberOfVariations = count($allvariations);
			
			
			$varid = array_column($allvariations, 'ID');
			$description = array_column($allvariations, 'Description');
			$price = array_column($allvariations, 'Price');
			
			
			$i = 0;
			$j = 0;
			
			$output = [];
			
			
		
			
			while($i<$numberOfVariations){		
				$i++;
				
				
				$output[$j] = 
					
						'<tr>
							<td>'.htmlspecialchars($description[$j]).'</td>
							<td>₡'.htmlspecialchars($price[$j]).'</td>
							<form action="" id="form1">
							<td>
							  <label for="qinput'.htmlspecialchars($varid[$j]).'"></label>
							  <input class = "cartInput" type="number" id="qinput'.htmlspecialchars($varid[$j]).'" name="numero"><br><br>
							  
							</td>
							<td>
							<label for="'.htmlspecialchars($varid[$j]).'"></label>
							<input id="'.htmlspecialchars($varid[$j]).'" type="submit" value="Agregar!" onClick="addToCart('.htmlspecialchars($varid[$j]).')"></td></form>
						
						</tr>'

					 ;
					
					
					
					
					
					echo $output[$j];
					$j++;
				}	
					// echo $numberOfProducts;
			
	


		}	
	
	
	
	
	
	// End of Class
	}
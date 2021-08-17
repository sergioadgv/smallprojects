<?php
	
	include_once 'cartitemview.class.php';
	include_once 'productvariationsview.class.php';
	session_start(); 
	
	if (isset($_SESSION["cartid"])) {
		
		$i = 0;
		$j = 0;
		
		$sessionvars = new CartItemView;
		$sessionvars->viewAllCartItemsbyID($_SESSION["cartid"]);
		
		
		$subtotal = 0;
		$grantotal = 0;
		$_SESSION["cartitemprices"] = [];
		$number = $_SESSION["itemnumber"];
		
		$subtotales = [];
		
		
		echo '<br>';
		
		while($i<$number){
			$i++;
			
			$setPrice = new ProductVariationsView;
			$setPrice->showProdVarPriceByID($_SESSION["cartitems"][$j]);
			
			
			
			$checkProductTest = new ProductVariationsView;
			$checkProductTest->showCartItemVarbyID($_SESSION["cartitems"][$j]);
			
		
			
			$cant = $_SESSION["cartqtys"][$j];
			$precio = $_SESSION["cartitemprices"][$j];
			
			
			
			$subtotal = $cant * $precio;
			
			$grantotal = $grantotal + $subtotal;
			
			// $subtotales[$j] = $subtotal;
			
			echo '<p class="my-2">'.$_SESSION["cartqtys"][$j].'</p>
			
			<td data-th="Subtotal" class="text-center"><p class="my-2">₡'.number_format($subtotal, 2, '.', ',').'</p></td>
			
			
			
		</tr>
		
		
		
		 ';
			
			
			
			
			
			$j++;
			
		}
		

		
		


		$_SESSION["grantotal1"] = $grantotal;
		
		$iva = $_SESSION["grantotal1"]*0.13;
		
		$final = $_SESSION["grantotal1"]*1.13;
		
		echo '
		
		<br><tfoot><br>
								
								
								
								
								
								<tr>
									
									<td colspan="1" class="hidden-xs"></td>
									
									<td colspan="2" class="hidden-xs"><strong> Subtotal: </strong></td>
									<td class="hidden-xs text-center"><strong>₡'.number_format($_SESSION["grantotal1"], 2, '.', ',').' </strong></td>
									<td colspan="1" class="hidden-xs"></td>
									
								</tr>
								<tr>
									<td colspan="1" class="hidden-xs"></td>
									<td colspan="2" class="hidden-xs"><strong>IVA:   </strong></td>
									<td class="hidden-xs text-center"><strong>₡'.number_format($iva, 2, '.', ',').' </strong></td>
									<td colspan="1" class="hidden-xs"></td>
								
								</tr>
								<tr>
									<td colspan="1" class="hidden-xs"></td>
									<td colspan="2" class="hidden-xs"><strong>Gran Total:  </strong></td>
									<td class="hidden-xs text-center"><strong>₡'.number_format($final, 2, '.', ',').' </strong></td>
									<td colspan="1" class="hidden-xs"></td>
								
								</tr>
							</tfoot>';
		
		
		
		
		
		
		
		
		
		
		
	}
	

?>


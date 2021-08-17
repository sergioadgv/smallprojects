<?php
require_once 'products.class.php';


class ProductsView extends Products{


// interact with website

	public function showProductPriceByID($id){
		$results = $this->getProductByID($id);
		
		// return $results;
	$price = $results[0]['Price'];
	// array_column($results, 'Price');
		
		array_push($_SESSION["cartitemprices"],$price);
		
	}
	




	public function viewAllProducts(){

		$allproducts = $this->getAllProducts();
		echo $allproducts;
	}




	public function populateSomeProducts($quantity){
		
		$storeproducts = $this->getSomeProducts($quantity);
		
		$numberOfProducts = count($storeproducts);
		
		$id = array_column($storeproducts, 'ID');
		$name = array_column($storeproducts, 'Name');
		$description = array_column($storeproducts, 'Description');
		$longdescription = array_column($storeproducts, 'Long Description');
		$price = array_column($storeproducts, 'Price');
		$image = array_column($storeproducts, 'Image_Link');
		// echo print_r($first_names[1]);
		
		$i = 0;
		$j = 0;
		
		$output = [];
		
		
	
		
		while($i<$numberOfProducts){		
			$i++;
			
			
			$output[$j] = 
			
			
			
			 
			 '
			 <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="'.htmlspecialchars($image[$j]).'" alt="card image"></p>
                                    <h4 class="card-title">'.htmlspecialchars($name[$j]).'</h4>
                                    <p class="card-text">'.htmlspecialchars($description[$j]).'</p>
									
									
                                   
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">'.htmlspecialchars($name[$j]).'</h4>
                                    <p class="card-text">'.htmlspecialchars($description[$j]).'</p><br><br>
									<!-- Button trigger modal -->
									<button type="button" class="tugo btn btn-primary" data-toggle="modal" data-target="#exampleModalLong'.htmlspecialchars($id[$j]).'" onClick="getVariations('.htmlspecialchars($id[$j]).')">
									  Mostrar Variaciones!
									</button>
									
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
				
				
				
					<!-- Modal -->
					<div class="modal fade" id="exampleModalLong'.htmlspecialchars($id[$j]).'" tabindex="-1" role="dialog" aria-labelledby="exampleModal'.htmlspecialchars($id[$j]).'LongTitle" aria-hidden="true">
					  <div class="modal-dialog modal-xl" role="document">
						<div class="modal-content">
						  <div class="modal-header text-center">
						  
								
								<h2 class="modal-title" id="exampleModal'.htmlspecialchars($id[$j]).'LongTitle">'.htmlspecialchars($name[$j]).'</h2>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								
								</button>
								
							
						  </div>
						  <div  class="modal-body">
							
                            
							<div class="row storejumbotron rounded-0 text-center text-white">
								
								<div class="col-md-9">
									<br><br>
									<h4 class="card-description">'.htmlspecialchars($longdescription[$j]).'</h4><br>
									<p class="card-description">A continuación puede elegir la variación que mas se adapte a sus necesidades. Si no esta la medida que requiere favor contactenos al 4034-4608.</p><br>
								</div>
								<div class="col-md-3"><br>
									<img class=" img-fluid" src="'.htmlspecialchars($image[$j]).'" alt="card image">
									<br><br>
								</div>
							</div>
							
							<div id = "Pref'.htmlspecialchars($id[$j]).'" class="container text-center">
						
							</div>
							
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Seguir Comprando!</button>
							
						  </div>
						</div>
					  </div>
					</div>
			 
			 
			 
			 
			 '
			 
			 
			 
			 
			 
			 
			 
			 ;
			
			
			
			
			
			echo $output[$j];
			$j++;
		}	
			// echo $numberOfProducts;
			
	}


	public function populateSomeCategoryProducts($quantity, $category){
		
		$storeproducts = $this->getSomeCategoryProducts($quantity, $category);
		
		$numberOfProducts = count($storeproducts);
		
		$id = array_column($storeproducts, 'ID');
		$name = array_column($storeproducts, 'Name');
		$description = array_column($storeproducts, 'Description');
		$longdescription = array_column($storeproducts, 'Long Description');
		$price = array_column($storeproducts, 'Price');
		$image = array_column($storeproducts, 'Image_Link');
		// echo print_r($first_names[1]);
		
		$i = 0;
		$j = 0;
		
		$output = [];
		
		
	
		
		while($i<$numberOfProducts){		
			$i++;
			
			
			$output[$j] = 
			
			
			
			 
			 '
			 <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="'.htmlspecialchars($image[$j],).'" alt="card image"></p>
                                    <h4 class="card-title">'.htmlspecialchars($name[$j]).'</h4>
                                    <p class="card-text">'.htmlspecialchars($description[$j]).'</p>
									
									
                                   
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">'.htmlspecialchars($name[$j]).'</h4>
                                    <p class="card-text">'.htmlspecialchars($description[$j]).'</p><br><br>
									<!-- Button trigger modal -->
									<button type="button" class="tugo btn btn-primary" data-toggle="modal" data-target="#exampleModalLong'.htmlspecialchars($id[$j]).'" onClick="getVariations('.htmlspecialchars($id[$j]).')">
									  Mostrar Variaciones!
									</button>
									
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
				
				
				
					<!-- Modal -->
					<div class="modal fade" id="exampleModalLong'.htmlspecialchars($id[$j]).'" tabindex="-1" role="dialog" aria-labelledby="exampleModal'.htmlspecialchars($id[$j]).'LongTitle" aria-hidden="true">
					  <div class="modal-dialog modal-xl" role="document">
						<div class="modal-content">
						  <div class="modal-header text-center">
						  
								
								<h2 class="modal-title" id="exampleModal'.htmlspecialchars($id[$j]).'LongTitle">'.htmlspecialchars($name[$j]).'</h2>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								
								</button>
								
							
						  </div>
						  <div  class="modal-body">
							
                            
							<div class="row storejumbotron rounded-0 text-center text-white">
								
								<div class="col-md-9">
									<br><br>
									<h4 class="card-description">'.htmlspecialchars($longdescription[$j]).'</h4><br>
									<p class="card-description">A continuación puede elegir la variación que mas se adapte a sus necesidades. Si no esta la medida que requiere favor contactenos al 4034-4608.</p><br>
								</div>
								<div class="col-md-3"><br>
									<img class=" img-fluid" src="'.htmlspecialchars($image[$j]).'" alt="card image">
									<br><br>
								</div>
							</div>
							
							<div id = "Pref'.htmlspecialchars($id[$j]).'" class="container text-center">
						
							</div>
							
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Seguir Comprando!</button>
							
						  </div>
						</div>
					  </div>
					</div>
			 
			 
			 
			 
			 '
			 
			 
			 
			 
			 
			 
			 
			 ;
			
			
			
			
			
			echo $output[$j];
			$j++;
		}	
			// echo $numberOfProducts;
			
	}



// End of Class



}
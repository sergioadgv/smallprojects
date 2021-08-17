<?php 

	include_once 'productvariationsview.class.php';

	$checkVariation= $_POST['ProductReference'];	

	
	echo '
	<div class="container " id="page-content">
					
						<div class="row container d-flex justify-content-center">
							<div class="col-md-12 grid-margin stretch-card">
								<div class="card">
									<div class="card-body">
										
										
										<div class="table-responsive">
											<table class="table table-hover">
												<thead>
													<tr>
														<th>Descripción</th>
														<th>Precio</th>
														<th>Cantidad</th>
														<th>Agregar</th>
														
													</tr>
												</thead>
												<tbody>';
	
											$test = new ProductVariationsView;
											$test->viewAllVariationsperID($checkVariation);


											echo
													
													'
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						
					</div>
				</div>
				
		
				
				
				';



?>

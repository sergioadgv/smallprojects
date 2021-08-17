<?php

	include_once 'classes/newsession.php';
	
	
	
?>


<!DOCTYPE html>
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<head>
	
		<!-- Global site tag (gtag.js) - Google Analytics -->	<script async src="https://www.googletagmanager.com/gtag/js?id=G-S53W6E5QKH"></script>	<script>	  window.dataLayer = window.dataLayer || [];	  function gtag(){dataLayer.push(arguments);}	  gtag('js', new Date());	  gtag('config', 'G-S53W6E5QKH');	</script>

		<title>Cart Test</title>
	  
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0"/>

		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!-- Custom styles for this template -->
		<link href="css/small-business.css" rel="stylesheet">

		<link href="css/navbar.css" rel="stylesheet" type="text/css"> 
		
		<link href="css/basic.css" rel="stylesheet" type="text/css"> 
		
		
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
		<script src="https://kit.fontawesome.com/cb205bb789.js" crossorigin="anonymous"></script>
	
		<script src="classes/populateproducts.js?newversion"></script>
		
		<script src="classes/productclicks.js?newversion"></script>
		
		<script src="classes/loadcartclick.js?newversion"></script>

		<script src="js/clicks.js?newversion"></script>
		
		<script>
		
		
		
		</script>
		
	</head>


<body>



  <!-- Navigation -->  
			<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">    
			<div class="container">      
			
			<!-- NAVBAR ION -->      <a class="navbar-brand" href="index.php">         <img alt="Qries" src="images/Logo.png"          height="70">      </a>      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">        <span class="navbar-toggler-icon"></span>      </button>      <div class="collapse navbar-collapse" id="navbarResponsive">                <ul class="navbar-nav ml-auto">                                 <li class="nav-item">            <a class="nav-link" href="index.php">Principal            </a>          </li>    		<li class="nav-item">                <a class="nav-link" href="tienda.php">Tienda                </a>              </li>                    <li class="nav-item dropdown">            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fabricación Especializada</a>                            <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">                                        <a class="dropdown-item" href="acueductos.html">Acueductos</a>                    <a class="dropdown-item" href="metalm.html">Construcción y Metalmecánica</a>                    <a class="dropdown-item" href="tanques.html">Acero Inoxidable, Tanques y Agroindustria</a>                    <div class="dropdown-divider"></div>                    <a class="dropdown-item" href="contacto.php">Contacte a un Experto</a>                  </div>          </li>                    <li class="nav-item">            <a class="nav-link" href="contacto.php">Contáctenos</a>          </li>                  </ul>      </div>    </div>  </nav>

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

<br>

<header class="jumbotron storejumbotron rounded-0 text-center text-white">

    <h2> Bienvenido a nuestra tienda en línea! </h2>
	
			


</header>


	

			<div class = "row">
				
				
				
				<div class="col-md-3 myfilterbox text-center">
					
					
					
					<div class="btn-group d-xs-block d-sm-block d-md-none d-lg-none d-xl-none text-center">
						<button id="filter0small" class="btn btn-outline-secondary btn-link myrightdivider">Todos</button>
						<button id="filter1small" class="btn btn-outline-secondary btn-link myrightdivider">Construcción</button>
						<button id="filter2small" class="btn btn-outline-secondary btn-link myrightdivider">Hogar</button>
						<button id="filter3small" class="btn btn-outline-secondary btn-link ">Plástico</button>
						
					</div>
					
					
					<div class="btn-group-vertical d-none d-md-block float-right">
						<h4>Categorías</h4><hr><hr>
						<button id="filter0" class="btn btn-link">Todos</button> <hr>
						<button id="filter1" class="btn btn-link">Construcción</button> <hr>
						<button id="filter2" class="btn btn-link">Hogar</button><hr>
						<button id="filter3" class="btn btn-link">Plástico</button>
					</div>
					
					
				
				</div>
				
			
				<div class="col-md-9">	
					<section id="team" class="p-3">
					<div id="products" class = "row">
						
					
					</div>
					</section>
				</div>
			</div><br>
	

	<div class = "container row text-center">
		<div class = "col-md-6"></div>
		<div class = "col-md-6 text-center">
			<button id="btn" type="button" class="btn btn-secondary">Mas Productos</button>
		</div>
	</div>
	
	
	<!-- Button trigger modal -->
		<button id="cartbutton" type="button" class="btn btn-lg btn-secondary cartbuttonclass" data-toggle="modal" data-target="#exampleModalLong" class="text-center">
		   <i class="fas fa-shopping-cart fa-1x"></i> 
		</button>

	<!-- Modal -->
		<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			  <div class="modal-header storejumbotron text-center text-white">
			  
			  
				<h3 class="modal-title" id="exampleModalLongTitle">Su Carrito es el: <?php  echo  $_SESSION['cartid'] ?></h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			
			  <div class="modal-body">
				
				

					
						<table id="cart" class="table table-hover table-condensed">
							<thead>
								<tr>
									<th style="width:50%">Producto</th>
									<th style="width:10%">Precio</th>
									<th style="width:8%">Cantidad</th>
									<th style="width:22%" class="text-center">Subtotal</th>
									<th style="width:10%"></th>
								</tr>
							</thead>
							
							<tbody id="cartproducts">
							
								
								
							</tbody>
							
							
						</table>
						
			  </div>
						  <div class="container row text-center" value="modal-footer">
							
							<div class="col-md-3"></div>
							
							<div class="col-md-3">
								<button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Cerrar</button><br>
							</div>
							
							<div class="col-md-3">
								<button type="button" class="btn btn-primary btn-block" onClick="checkout()">Comprar</button><br>
							</div>
							
							<div class="col-md-3"></div>
					</div><br>
				
			
			  </div>
			  
			</div>
		  </div>
		</div>




				<!-- Add Product Modal -->
				<div class="modal fade" id="productAddedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					  
					  
					  <div class="modal-body text-center">
						<h5><strong>El producto fue agregado a su carrito!</strong></h5><br>
						<h5>Gracias por Preferirnos!</h5>
					  </div>
					  
					</div>
				  </div>
				</div>

				<!-- Change Quantity Modal -->
				<div class="modal fade" id="productQtyChangedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					  
					  
					  <div class="modal-body text-center">
						<h5>La cantidad ha sido actualizada!</h5><br>
						<h5>Gracias por Preferirnos!</h5>
					  </div>
					  
					</div>
				  </div>
				</div>
				
				<!-- Delete Product Modal -->
				<div class="modal fade" id="productDeleteProdModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					  
					  
					  <div class="modal-body text-center">
						<h5>El producto ha sido eliminado de su carrito. </h5><br>
						<h5>Gracias por Preferirnos!</h5>
					  </div>
					  
					</div>
				  </div>
				</div>


	

<br>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Derechos Reservados © IMICSA</p>
    </div>

  </footer>



	
	
	







</body></html>
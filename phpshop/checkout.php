



<?php
	
	session_start(); 
	
?>


<!DOCTYPE html>
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<head>

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
	
		<script src="classes/populatecheckoutcart.js"></script>
		
		
		
		
		<script>
				
				
			
		
		</script>
		
	</head>


<body>



  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">

      <!-- NAVBAR ION -->
      <a class="navbar-brand" href="index.php">
         <img alt="Qries" src="images/Logo.png"
          height="70">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        
        <ul class="navbar-nav ml-auto">
          
         
              <li class="nav-item active">
            <a class="nav-link" href="index.php">Principal
            </a>
          </li>    

          






          <li class="nav-item ">
            <a class="nav-link " href="tienda.php" id="" >Tienda</a>
    
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fabricación Especializada</a>
          
                  <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                    
                    <a class="dropdown-item" href="acueductos.html">Acueductos</a>
                    <a class="dropdown-item" href="metalm.html">Construcción y Metalmecánica</a>
                    <a class="dropdown-item" href="tanques.html">Acero Inoxidable, Tanques y Agroindustria</a>
                    <a class="dropdown-item" href="precision.html">Precisión y CNC</a>
                    <a class="dropdown-item" href="impr3d.html">Impresión 3D y Plásticos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="contacto.html">Contacte a un Experto</a>
                  </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="contacto.php">Contáctenos</a>
          </li>

      
    
        </ul>
      </div>
    </div>
  </nav>

<br>


	<div class="container text-center">
		<h1 class=""> Checkout </h1>
		
	</div>
	
	<header class="jumbotron storejumbotron rounded-0 text-center text-white">
			
			

					<div class = "row text-center">	
						<div class="form-group container">
							<label for="inputTransport"><h5>Requiere servicio de Transporte?<br>Gratis para ordenes mayores a los ₡100,000!</h5></label>
							<select class="form-control" id="inputTransport">
							<option selected value="0">No requiero servicio de transporte!</option>
							  <option value="1">Transporte Liviano: Heredia(centro), San José(centro).</option>
							  <option value="2">Camión: Heredia(centro), San José(centro).</option>
							  <option value="3">Encomienda: Todo Costa Rica.</option>
							</select>
							</select>
						</div>
					</div>
			<hr class="style2">

			<div class = "row">
			
				<div class = "col-md-1"></div>
				
				<div class = "col-md-7 text-white">
				
					
					
					<table id="cart" class="checkouttable table table-hover table-condensed">
							<thead>
								<tr class="checkouttable">
									<th style="width:50%">Producto</th>
									<th style="width:10%">Precio</th>
									<th style="width:8%">Cantidad</th>
									<th style="width:22%" class="text-center">Subtotal</th>
									<th style="width:10%"></th>
								</tr>
							</thead>
							<h4> Su Carrito es el: <?php  echo  $_SESSION['cartid'] ?> </h4>
							<tbody id="cart2products" class="checkouttable">
							
								
								
							</tbody>
							
							
						</table>
					
				</div>
				
				<br>
				
				<div class = "col-md-3">
				
						
						
						<h3>Datos para Facturación</h3><hr class="checkoutdivider">
					
						<div class="form-group">					
							<label for="inputName">Nombre Completo</label>
							<input id="inputName" type="text" class="form-control" name="inputName">
						</div>
						<div class="form-group">					
							<label for="correo">Correo Electrónico</label>
							<input id="inputEmail" type="email" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label for="numero">Numero Telefónico</label>
							<input id="inputNumber" type="text" class="form-control" name="numero">
						</div>
							  
							  
						
						<div class="row">
						<div class="col text-center">
						  <button id="checkoutbutton" type="button" class="btn btn-primary">
							  Proceder a Pagar
							</button>
							
						</div>
						</div>
						
					
				</div>
				
				<div class = "col-md-1"></div>
				
			</div>

</header>


		<div class="text-center">
			<h3 class=""> Gracias por elegirnos! </h3>
		</div>
			
			
			<!-- Button trigger modal 
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkoutModal">
				  Launch demo modal
				</button>

				<!-- Enter All Data Modal -->
				<div class="modal fade" id="fillEntriesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					  
					  
					  <div class="modal-body text-center">
						<h5>Por favor complete todas las casillas. </h5><br>
						
					  </div>
					  
					</div>
				  </div>
				</div>
				
				<!-- Edit Email Modal -->
				<div class="modal fade" id="enterEmailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					  
					  
					  <div class="modal-body text-center">
						<h5>Por favor ingrese un correo electrónico correcto. </h5><br>

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



	
	
	<script src="js/checkoutclicks.js"></script>







</body></html>







					
			
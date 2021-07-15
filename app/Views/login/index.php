 <?php 	
 $mensaje; 
 $rutaLogin=base_url().'/public/static/css/index.css';?>
 <!DOCTYPE html>
 <html lang="en" xmlns:th="http://www.thymeleaf.org">
 <head>
 	<title>Login Konecta</title>
 	<!--JQUERY-->
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 	<!-- Los iconos tipo Solid de Fontawesome-->
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
 	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
 	<!-- Nuestro css-->
 	<link rel="stylesheet" type="text/css" href="<?php echo $rutaLogin; ?>" th:href="@{/css/index.css}">
 	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
 	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
 </head>
 <body>
 	<div class="modal-dialog text-center">
 		<div class="col-sm-8 main-section">
 			<div class="modal-content">
 				<div class="col-12 user-img">
 					<img src="<?php echo base_url() .'/public/static/img/user.png'; ?>" th:src="@{/img/user.png}"/>
 				</div>
 				<form class="col-12" action="<?php echo base_url() . route_to('procesarLogin') ?>" method="POST">
 					<div class="form-group" id="user-group">
 						<input style="border-color: red; " type="text" class="form-control" placeholder="Nombre de usuario" name="usuario"/>
 					</div>
 					<div class="form-group" id="contrasena-group">
 						<input  style="border-color: red; " type="password" class="form-control" placeholder="Contrasena" name="password"/>
 					</div>
 					<button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
 				</form>
 				
 				<br><button  class="btn btn-block btn-success"><i class="fab fa-slideshare"></i></button>
 				<script src="<?php echo base_url().'/public/sweetalert2js/sweet.js'; ?>"></script>
 			</div>
 		</div>
 	</div>
 </div>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script>

 	let mensaje='<?php echo $mensaje; ?>'

 	if(mensaje=='0'){
 		swal(':(','No existes','error');
 	}else if(mensaje=='20'){
    swal(':)','Te haz registrado exitosamente','success');
 	}
 </script>
 </html>
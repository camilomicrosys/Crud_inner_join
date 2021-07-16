
<?php

$empleados;

//lamamos el helper de iconos
$datos = iconos();
//aca sacamos los iconos ya que la funcion del helper lo puse a retornar un array
$iconoEnblanco       = $datos[0];
$iconoEditar         = $datos[1];
$iconoAtras          = $datos[2];
$iconoGuardar        = $datos[3];
$iconoCerrar         = $datos[4];
$iconoEliminar       = $datos[5];
$iconoListar         = $datos[6];
$iconoAgregarPersona = $datos[7];
$iconoAgregar        = $datos[8];
$iconoCrearModal     = $datos[9];
$iconoGestionar      = $datos[10];
$iconoDesblokear     = $datos[11];
$iconoLiquidar       = $datos[12];
$iconoResetear       = $datos[13];
$iconoReportes       = $datos[14];



?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Crear Solicitud <i class="fas fa-hand-holding-usd"></i></h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Dashboard v1</li>
						</ol>
						</div><!-- /.col -->
						</div><!-- /.row -->
						</div><!-- /.container-fluid -->
					</div>
					<div>
						<div class="card" style="width: 18rem;">
							<div class="card-body">

								<form class="container" action="<?php echo base_url().route_to('liquidacionsoli'); ?>" method="POST">
									<strong>id solicitud</strong><br>
									<input class="form-control" name="id" type="text" placeholder="Digita el id" ><br>
								  <strong>codigo de solicitud</strong>
                                      <input placeholder="escribe codigo" name="codigo"  type="text"><br><br>
									<br>
									<strong>Descripcion</strong>
                                      <input placeholder="escribe descripcion" name="descripcion"  type="text"><br><br>
									<br>
									<strong>Resumen</strong>
                                      <input placeholder="escribe resumen" name="resumen"  type="text"><br><br>
									<br>
                                    <strong>Empleado Solicitante</strong>
                                    <br>
                                  
                                    <select class="form-control"  name="empleado" id="">
                                           <?php

foreach ($empleados as $empleado) {?>

                                    	<option value="<?php echo $empleado->{'ID'} ?>"><?php echo $empleado->{'NOMBRE'} ?></option>
                                    	<?php }?>
                                    </select>

                                    <br><br>	
									<button type="submit" class="btn btn-success btn-block">Solicitar <?php echo $iconoLiquidar; ?></button>
									<button type="reset" class="btn btn-info btn-block">Resetear <?php echo $iconoResetear; ?></button>
								</form>
							</div>
						</div>
					</div>
					</div><!-- /.container-fluid -->
					    </script>
    <?php //aca etamos trallendo las funciones programadas de la carpeta sweet2js y lugo programaremso la de cargando la pagina, esa si toca por aca por que en funcion no da para llamar ?>
<script  src="<?php echo base_url().'/public'?>/sweetalert2js/sweet.js" ></script>
<script>
   Swal.fire({

  title:"Cargando",
  text: "espera por favor",

   background:'mediumgpringgreen',

   timer: 2000 ,   //aca digo en cuanto tiempo quiero que se cierre la alerta sola
   timerProgressBar:true, //aca disminulle el tiempo anterior en una barra

   showConfirmButton:false,


   imageUrl:'<?php echo base_url().'/public'?>/sweetalert2js/imagenesgif/cargando.gif',
   imageWidth:'200',

   imageAlt:'imagen cargando'
});
</script>
				</section>
				<!-- /.content -->
			</div>
	</div>

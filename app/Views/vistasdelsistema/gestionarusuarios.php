<?php
//el mesnaje pasado a la visat principal para ver si esta correcto o errado
$mensaje;
//llamado de modelo para buscar toca desde la vista
use App\Models\EmpleadosModel;
$objeto_administrador = new EmpleadosModel();
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

          <h1 class="m-0 text-dark">Gestiona los Empleados del Sistema <i class="fas fa-key"></i></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Konecta v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <div>
   <form action="<?php echo base_url() . route_to('gestionarUsuariosformBuscador'); ?>" method="POST" class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" name="search" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button title="Buscar" class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>
      <?php //aca programaremos la funcion de buscar si no existe le asignamos vacio para que refresque la pag
if (!isset($_POST['search'])) {
    $_POST['search'] = "";
//aca creamos esta variable que tendra el valor de la anterior osea vacio
    $search = $_POST['search'];
} else {
//si, si existe eomamos el nombre y su contenido
    $search = $_POST['search'];
}

?>

    </div>
    <br><br>
    <section class="content">
      <div class="container-fluid">
        <div class="container">
          <?php//aca creo el boton de agregar para cuando le den clic se active el modal Y EL MODAL ?>
          <div>
            <!-- Modal  aca voy agregar usuario-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Un nuevo Empleado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo base_url().route_to('crearusuarios'); ?>" method="POST">
                      <strong>Cedula</strong><br>
                      <input class="form-control" type="text" name="cedula" placeholder="Digita cedula" required="campo requerido" autocomplete="off"><br>
                      <strong>Fecha de ingreso</strong><br>
                      <input class="form-control" type="date"  name="fecha" required="campo requerido" autocomplete="off"><br>
                      <strong>Nombre</strong><br>
                      <input class="form-control" type="text" placeholder="Digita Nombre" name="nombre" required="campo requerido" autocomplete="off"><br>
                      <strong>Salario</strong><br>
                      <input class="form-control" type="input" placeholder="Digita Salario" name="salario" required="campo requerido" autocomplete="off"><br>
                     
                      <button  type="submit" class="btn btn-success btn-block" >Crear Usuario <?php echo $iconoAgregarPersona; ?></button>
                    </form>
                  </div>
                  <div class="modal-footer">
                  </div>
                </div>
              </div>
            </div>
            <button  type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Nuevo
              <?php echo $iconoAgregar; ?>
            </button>
          </div>
          <table id="example" class="container" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>FECHA_INGRESO</th>
                <th>NOMBRE</th>
                <th>SALARIO</th>
               
                

              </tr>
            </thead>
            <?php

$listarUsuarios = $objeto_administrador->mostrarUsuariosFormularioBuscador($search);
$totalBuscados  = count($listarUsuarios);


if ($listarUsuarios != null) {
    for ($i = 0; $i < $totalBuscados; $i++) {
       

        ?>

                <tr>
                  <td><?php echo $listarUsuarios[$i]['ID']; ?></td>
                  <td><?php echo $listarUsuarios[$i]['FECHA_INGRESO']; ?></td>
                  <td><?php echo $listarUsuarios[$i]['NOMBRE']; ?></td>
                  <td><?php echo $listarUsuarios[$i]['SALARIO']; ?></td>
                 

                 
                  <td><a href=" <?php echo base_url() . '/editar-usuario/' . $listarUsuarios[$i]['ID'];?>"><button onclick="Gestionar()" type="button" class="btn btn-primary" >
                    <?php echo $iconoGestionar; ?>
                  </button></a>
    

                </td>
                <td><a href="<?php echo base_url().route_to('inicioSesion') ?>"><button class="btn btn-danger"> <?php echo $iconoAtras; ?>Pag Principal</button></a></td>
              </tr>
              <?php
}
}
?>
        </table>
        <?php

// esa es la inicializacion del datatables  estos 3 script  y la funcion ?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
    //para cambiar lenguaje asi
    $(document).ready(function() {
      $('#example').DataTable({
       "language":{
        "url":" //cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
      }

    });

    } );
  </script>
  <?php //aca etamos trallendo las funciones programadas de la carpeta sweet2js y lugo programaremso la de cargando la pagina, esa si toca por aca por que en funcion no da para llamar ?>
  <script src="<?php echo base_url().'/public'?>/sweetalert2js/sweet.js"></script>
  <script>
   Swal.fire({

    title:"Cargando",
    text: "espera por favor",

    background:'mediumgpringgreen',

   timer: 1000 ,   //aca digo en cuanto tiempo quiero que se cierre la alerta sola
   timerProgressBar:true, //aca disminulle el tiempo anterior en una barra

   showConfirmButton:false,


   imageUrl:'<?php echo base_url().'/public'?>/sweetalert2js/imagenesgif/cargando.gif',
   imageWidth:'200',

   imageAlt:'imagen cargando'
 });
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

 let mensaje='<?php echo $mensaje; ?>';
if(mensaje=='4'){
 swal(':)','Eliminado exitosamente','success');
}else if(mensaje=='5'){
swal(':)','Usuario ah sido creado','success');
}else if(mensaje=='6'){
swal(':)','Usuario Actualizado','success');
}
</script>



</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
</div>
          <!-- ./wrapper -->
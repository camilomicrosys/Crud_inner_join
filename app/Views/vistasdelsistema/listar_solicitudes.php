<?php
//el mesnaje pasado a la visat principal para ver si esta correcto o errado
$mensaje;
$liquidaciones;
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

          <h1 class="m-0 text-dark">Gestiona las solicitudes <i class="fas fa-key"></i></h1>
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

          <table id="example" class="container" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>CODIGO</th>
                <th>DESCRIPCION</th>
                <th>RESUMEN</th>
                <th>EMPLEADO</th>
               
                

              </tr>
            </thead>
            <?php





    for ($i = 0; $i < count($liquidaciones); $i++) {
       

        ?>

                <tr>
                  
                  <td><?php echo $liquidaciones[$i]->{'CODIGO'}; ?></td>
                  <td><?php echo $liquidaciones[$i]->{'DESCRIPCION'}; ?></td>
                  <td><?php echo $liquidaciones[$i]->{'RESUMEN'}; ?></td>
                  <td><?php echo $liquidaciones[$i]->{'NOMBRE'}; ?></td>
                 

                 
                  <td><a href=" <?php echo base_url() . '/editar-solicitudes/' . $liquidaciones[$i]->{'ID'};?>"><button onclick="Gestionar()" type="button" class="btn btn-primary" >
                    <?php echo $iconoGestionar; ?>
                  </button></a>
    

                </td>
                <td><a href="<?php echo base_url().route_to('inicioSesion') ?>"><button class="btn btn-danger"> <?php echo $iconoAtras; ?>Pag Principal</button></a></td>
              </tr>
              <?php
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
if(mensaje=='18'){
 swal(':)','Eliminado exitosamente','success');
}else if(mensaje=='17'){
swal(':)','actualizado exitoso','success');
}else if(mensaje=='15'){
swal(':)','liquidacion Cargada','success');
}
</script>



</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
</div>
          <!-- ./wrapper -->
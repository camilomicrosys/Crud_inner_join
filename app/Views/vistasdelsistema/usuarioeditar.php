<?php
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
//aca llegan todos los datos de editar por id para mostrarlos en el formulario
$dat_para_poner_enformulario;


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Actualiza y configura Los Empleados <i class="fas fa-key"></i></h1>
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
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="container">
        <table class="table table-striped table-bordered">
          <tr>
            <th>ID</th>
            <th>Fecha_ingreso</th>
            <th>Nombres</th>
            <th>Salario</th>
            
          </tr>
          <?php

//aca traimos los datos por id de la persona que vamos a edita para mostrarlos al formulario
          foreach ($dat_para_poner_enformulario as $fila) {
            ?>
            <tr>
              <td><?php echo $fila->{'ID'}; ?></td>
              <!-- Aca creo los inputs -->
              <td  ><?php echo $fila->{'FECHA_INGRESO'} ?></td>
              <td  ><?php echo $fila->{'NOMBRE'} ?></td>
              <td  ><?php echo $fila->{'SALARIO'} ?></td>
             

             

              

              <!--Aca hago el boton para etitar el formulario -->
              <!-- Button trigger modal -->
              <td><a href="<?php echo base_url() . '/Borrar-usuario/' . $fila->{'ID'};?>"><button id="btnEliminar" type="button" class="btn btn-danger" >
                <?php echo $iconoEliminar; ?>
              </button></a>
              <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <?php echo $iconoEditar; ?>
              </button>

            </td>
            <td><a href="<?php echo base_url().route_to('gestionarUsuarios'); ?>"><button class="btn btn-success"> <?php echo $iconoAtras; ?>Regresar</button></a></td>

            <!-- Modal  aca voy agregar usuario-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificar datos en empleado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    
                  <div class="modal-body">
                    <form  action="<?php echo base_url().route_to('actualizarUsuarios') ?>" method="POST">
                      <input type="hidden" name="id" value="<?php echo $id=$fila->{'ID'} ?>">
                      <strong>Cedula</strong><br>
                      <input value="<?php echo $fila->{'ID'}?>"  class="form-control" type="text" name="cedula" placeholder="Digita cedula" required="campo requerido" autocomplete="off"><br>
                      <strong>Fecha ingreso</strong><br>
                      <input value="<?php echo $fila->{'FECHA_INGRESO'} ?>" class="form-control" type="date"  name="fecha" required="campo requerido" autocomplete="off"><br>
                      <strong>Nombres</strong><br>
                      <input value="<?php echo $fila->{'NOMBRE'} ?>" class="form-control" type="text" placeholder="Digita Nombres" name="nombre" required="campo requerido" autocomplete="off"><br>
                      <strong>Salario</strong><br>
                      <input value="<?php echo $fila->{'SALARIO'} ?>" class="form-control" type="text" placeholder="Digita salario" name="salario" required="campo requerido" autocomplete="off"><br>
                      
                      

                      <button onclick="Cancelar()" type="button" class="btn btn-danger" data-dismiss="modal"><?php echo $iconoCerrar; ?></button>
                      <button type="submit" class="btn btn-success"><?php echo $iconoGuardar; ?></button>
                    </form>
                  </div>
                  <div class="modal-footer">
                  </div>
                </div>
              </div>
            </div>
          </tr>
          <?php
        }
        ?>
      </table>
      <script src="<?php echo base_url().'/public'?>/sweetalert2js/sweet.js"></script>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
</div>
<!-- ./wrapper -->




<?php
namespace App\Controllers;

use App\Models\EmpleadosModel;
;
class EmpleadosController extends BaseController
{

//Inicio Metodos de Gestion de usuarios
/*
---------------------------------------------
MODULO USUARIOS
--------------------------------------------
*/

public function gestionarUsuarios()
{

  $obj_administrador = new EmpleadosModel();

       
  $mensaje=session('mensaje');

  $datos = [
    'mensaje'=>$mensaje

  ];

  echo view('footer_header/header');
  echo view('vistasdelsistema/gestionarusuarios', $datos);
  echo view('footer_header/footer');
}
public function editarUsuario($id){

 $id=$id;
 $obj_administrador = new EmpleadosModel();
 $dat_para_poner_enformulario=$obj_administrador->pasoTodosLosDatosUsuarioaEditar($id);

 $datos=[
  'dat_para_poner_enformulario'=>$dat_para_poner_enformulario
  
];



echo view('footer_header/header');
echo view('vistasdelsistema/usuarioeditar.php', $datos);
echo view('footer_header/footer');

}


public function borrarUsuario($id){
 
 $obj_administrador = new EmpleadosModel();
 $verificar_innerjoin=$obj_administrador->traerLiquidacionPorIdEmpleado($id);
 //verifico que el cliente no este en 2 tablas y si esta lo borro de las 2
$existe=count($verificar_innerjoin);

if($existe>0){
  //Si esta en ambas tablas lo borramos en cascada
$obj_administrador->borrarClienteTabSolici($id);
$obj_administrador->borrarClienTabEmpleado($id);
return redirect()->to(base_url() . route_to('gestionarUsuarios'))->with('mensaje', '4');
}else{
$obj_administrador->borrarClienTabEmpleado($id);
return redirect()->to(base_url() . route_to('gestionarUsuarios'))->with('mensaje', '4');
}

}

public function crearUsuarios(){
  $obj_administrador = new EmpleadosModel();
    //aca quedo la clave encriptada
  
  
  $datos=array(
    $_POST['cedula'],
    $_POST['fecha'],
    $_POST['nombre'],
    $_POST['salario'],
  ) ;

  $obj_administrador->agregarUsuarios($datos);
  return redirect()->to(base_url() . route_to('gestionarUsuarios'))->with('mensaje', '5');

        

    
 
}

public function actualizarUsuarios(){
  $obj_administrador = new EmpleadosModel();


//para actualizar si podemos poner un array asociativo
    $datos=array(

    $_POST['cedula'],
    $_POST['fecha'],
     $_POST['nombre'],
     $_POST['salario'],
      $_POST['id']
    );
    $obj_administrador->actualizarUsuario($datos);
    return redirect()->to(base_url() . route_to('gestionarUsuarios'))->with('mensaje', '6');

}
//vamos a la ruta de solicitu para llenar el formulario
public function solicitud(){
 $obj_administrador = new EmpleadosModel();
 $empleados=$obj_administrador->mostrarEmpleados();
 $datos=['empleados'=>$empleados];

 echo view('footer_header/header');
 echo view('vistasdelsistema/solicitud.php',$datos);
 echo view('footer_header/footer');
}

//cuando se realiza la solicitud insertamos los datos en la bd
public function liquidacionsoli(){
  $objAdmin = new EmpleadosModel();


//aca tomo los datos del formulario
  $id     = $_POST['id'];
  $codigo = $_POST['codigo'];
  $descripcion  = $_POST['descripcion'];
  $resumen  = $_POST['resumen'];
  $empleado        = $_POST['empleado'];


                   
    $objAdmin->crearSolicitud($id, $codigo, $descripcion, $resumen,  $empleado );
    return redirect()->to(base_url() . route_to('listarSolicitudesTotales'))->with('mensaje', '15');
   
  
}

public function listarSolicitudesTotales(){
   $mensaje=session('mensaje');

 
$objAdmin = new EmpleadosModel();
$liquidaciones=$objAdmin->mostrarTodasLasLiquidaciones();
 $datos = [
    'mensaje'=>$mensaje,
    'liquidaciones'=>$liquidaciones

  ];

echo view('footer_header/header');
echo view('vistasdelsistema/listar_solicitudes.php', $datos);
echo view('footer_header/footer');
}



public function editarSolicitud($id){
 
$objAdmin = new EmpleadosModel();
//para que puedan seleccionar un empleado
$empleados=$objAdmin->mostrarEmpleados();
$dat_para_poner_enformulario=$objAdmin->obtenerSolicitudPorRadicado($id);
 $datos = [
    'dat_para_poner_enformulario'=>$dat_para_poner_enformulario,
    'empleados'=>$empleados

  ];

echo view('footer_header/header');
echo view('vistasdelsistema/solicitud_editar.php', $datos);
echo view('footer_header/footer');

}

public function actualizarSolicitud(){
  $obj_administrador = new EmpleadosModel();


//para actualizar si podemos poner un array asociativo
    $datos=array(

    $_POST['id'],
    $_POST['codigo'],
     $_POST['descripcion'],
     $_POST['resumen'],
      $_POST['empleado']
    );
    $obj_administrador->actualizarSolicitud($datos);
    return redirect()->to(base_url() . route_to('listarSolicitudesTotales'))->with('mensaje', '17');

}
public function borrarSolicitud($id){
$objAdmin = new EmpleadosModel();
$objAdmin->borrarSolicitud($id);
return redirect()->to(base_url() . route_to('listarSolicitudesTotales'))->with('mensaje', '18');

}

}
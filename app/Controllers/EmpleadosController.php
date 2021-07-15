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
 //lo primero es mirar que rango tiene ya que si es admin, o asesor, solo seborra en usuarios y en liquidaciones con el id de usuasio en las 2 tablas en usuarios y en liquidaciones si tiene liquidaciones si tienen alguna liquidacion y si es  cliente hay que borrarlo de usuarios y clientes y si tienen liquidaciones entonces de 3 tablas
 $obj_administrador = new EmpleadosModel();
 $datos_usuario=$obj_administrador->pasoTodosLosDatosUsuarioaEditar($id);

$obj_administrador->borrarClienTabEmpleado($id);
/*ejecutamos eliminacion en todas las tablas en este orden por que si no sale el problema de foranea, cuando me salga ese problema voy myadmin y empieso a borrarlas alla manual y cuando alla no me salga el problema de foranea lo traigo aca y borro en mismo orden 
$obj_administrador->borrarTablaLiquidaciones($id);
$obj_administrador->borrarClienTabUsua($id);
$obj_administrador->borrarClienTabClient($id_cliente);
*/
return redirect()->to(base_url() . route_to('gestionarUsuarios'))->with('mensaje', '4');


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

public function liquidacionsoli(){
  $objAdmin = new EmpleadosModel();






 //aca tomo los datos del formulario
  $id     = $_POST['id'];
  $codigo = $_POST['codigo'];
  $descripcion  = $_POST['descripcion'];
  $resumen  = $_POST['resumen'];
  $empleado        = $_POST['empleado'];



                    //aca ejecutamos el registro de la liquidacion
    $objAdmin->crearSolicitud($id, $codigo, $descripcion, $resumen,  $empleado );
          return redirect()->to(base_url() . route_to('inicioSesion'));
   
  
}


public function solicitud(){
 $obj_administrador = new EmpleadosModel();
 $empleados=$obj_administrador->mostrarEmpleados();
 $datos=['empleados'=>$empleados];

 echo view('footer_header/header');
 echo view('vistasdelsistema/solicitud.php',$datos);
 echo view('footer_header/footer');
}


}


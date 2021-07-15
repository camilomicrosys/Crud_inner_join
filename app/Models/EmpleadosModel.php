<?php
namespace App\Models;



// esto es para ejecutar queys manual segun documentacion
use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class EmpleadosModel extends Model
{



public function mostrarUsuariosFormularioBuscador($search)
{
        
        $datos = $this->db->table('empleado');
        $datos->like('ID', $search);
        $datos->orLike('FECHA_INGRESO', $search);
        $datos->orLike('NOMBRE', $search);
        $datos->orLike('SALARIO', $search);
      
        return $datos->get()->getResultArray();
      }



    public function pasoTodosLosDatosUsuarioaEditar($id)
    {
     $statement = $this->db->query("SELECT *FROM empleado where ID='$id'");
     // este me retorna un arreglo de arreglos
     return $statement->getResult();
   }
 
   
 public function borrarClienTabEmpleado($id){
   $statement=$this->db->query("DELETE FROM empleado where ID='$id'");
   return $statement;
 }
 

public function agregarUsuarios($datos)
{
  $statement = $this->db->query("INSERT INTO empleado (ID,FECHA_INGRESO,NOMBRE,SALARIO) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]')");
        //esta linea retorna el id que se le asigno cuando fue
  return $this->db->insertID();

}

public function actualizarUsuario($datos){

  $statement = $this->db->query("UPDATE empleado SET  ID='$datos[0]',FECHA_INGRESO='$datos[1]',NOMBRE='$datos[2]',SALARIO='$datos[3]' where ID='$datos[4]' ");

}






 public function mostrarEmpleados(){
  $statement = $this->db->query("SELECT * FROM empleado");
  return $statement->getResult();
}


 
 public function crearSolicitud($id, $codigo, $descripcion, $resumen,  $empleado ){

  $statement=$this->db->query("INSERT INTO solicitud(ID,CODIGO,DESCRIPCION,RESUMEN,ID_EMPLEADO) VALUES('$id', '$codigo','$descripcion','$resumen', '$empleado')");
         //esta linea retorna el id que se le asigno cuando fue
  return $this->db->insertID();

}


  }

  

  



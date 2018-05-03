<?php
require_once('claseConectarA.php');
class Alumnos extends Conectar{
    private $db;
    public function __construct(){
        $this->db=parent::coneccion();
    }
    //usar procedimiento almacenado
    public function listarAlumnos(){
        $query="select * from alumnos";
        $datos=$this->db->execute($query);
        //echo var_dump($datos);
        $aAlumnos=array();
        while(!$datos->EOF){
            $aAlumnos[]=Array('nombre'=>$datos->fields('nombre'),'apellido'=>$datos->fields('apellido'),'sexo'=>$datos->fields('sexo'),'edad'=>$datos->fields('edad'),'grado'=>$datos->fields('grado'));
            $datos->MoveNext();
        }
        //echo var_dump($aUsuarios);
        return $aAlumnos;
        //echo var_dump($aUsuarios);
    }
   
    public function agregarAlumno($nombreAlumno,$apellidoAlumno,$sexoAlumno,$edadAlumno,$gradoAlumno){
        $nombreAlumno=htmlspecialchars($nombreAlumno);
        $apellidoAlumno=htmlspecialchars($apellidoAlumno);
        $sexoAlumno=htmlspecialchars($sexoAlumno);
        $edadAlumno=htmlspecialchars($edadAlumno);
        $gradoAlumno=htmlspecialchars($gradoAlumno);
        $query="insert into alumnos (nombreAlumno,apellidoAlumno,sexoAlumno,edadAlumno,gradoAlumno) values ('$nombreAlumno','$apellidoAlumno','$sexoAlumno','$edadAlumno','$gradoAlumno')";
        $datos=$this->db->execute($query);
        $aAlumnos=array();
        $aAlumnos=($datos)?array('exito'=>true):array('exito'=>false);
        return $aAlumnos;
    }//fin de agregar alumno
    
    
    #Metodo de modificar
    public function modificarAlumnos($nombre,$apellido,$sexo,$edad,$grado){
        $nombre=htmlspecialchars($nombre);
        $apellido=htmlspecialchars($apellido);
         $sexo=htmlspecialchars($sexo);
          $edad=htmlspecialchars($edad); 
        $grado=htmlspecialchars($grado);
       $query="update Alumno set nombre='$nombre',apellido='$apellido',sexo='$sexo',grado='$grado'";
        $datos=$this->db->execute($query);
        $aAlumnos=array();
        $aAlumnos=($datos)?array('exito'=>true):array('exito'=>false);
        return $aAlumnos;
    }//fin de modificar
    
    
    #Borrar
    public function eliminarAlumno($nombre){
        $nombre=htmlspecialchars($nombre);
       $query="delete from Alumno where nombre='$nombre'";
        $datos=$this->db->execute($query);
        $aAlumnos=array();
        $aAlumnos=($datos)?array('exito'=>true):array('exito'=>false);
        return $aAlumnos;

    }//fin de Borrar
    /*
    public function validarUsuario($usuario){
        $usuario=htmlspecialchars($usuario);
        //$password=htmlspecialchars($password);
        $query=/*"call spBuscarUsuario('$usuario','$password')";*//*
        "select usuario,nombre,email,tipo from usuarios where usuario='$usuario'";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        if($datos->RecordCount()){
           $aUsuario=array('error'=>false,'nombre'=>$datos->fields('nombre'),'tipo'=>$datos->fields('tipo'));
        }
        else{
            $aUsuario=array('error'=>true);

        }
        return $aUsuario;
    }
    
    function verificarUsuario($usuario){
        $usuario=htmlspecialchars($usuario);
        $query=/*"call spBuscarUsuario('$usuario','$password')";*//*
        "select usuario,nombre,email,tipo from usuarios where usuario='$usuario'";
        $datos=$this->db->execute($query);
        $aUsuario=array();
        if($datos->RecordCount()){
           $aUsuario=array('existe'=>true,'nombre'=>$datos->fields('nombre'),'tipo'=>$datos->fields('tipo'),'email'=>$datos->fields('email'));
        }
        else{
            $aUsuario=array('existe'=>false);

        }
        return $aUsuario;
        
    }//final de verificar usuario*/
    
    
    
   /* //aqui es donde empiesan las queries de armando:
    public function agregarGrupo($especialidad){
        $especialidad=htmlspecialchars($especialidad);
        $query="insert into grupos (especialidad) values ('$especialidad')";
        $datos=$this->db->execute($query);
        $aGrupo=array();
        $aGrupo=($datos)?array('exito'=>true):array('exito'=>false);
        return $aGrupo;
    }//fin de agregar usuario*/
    
}


//ahosa si aqui es donde vamos a usar ADODB para mayor info investigar en internet de como usarla creo que en canvas tenemos la bibliografia.
//lo vamos a usar como la mayora de administradores de datos lo usan
//vamos a obtener un recordset como resultado.
 //vamos a usar MoveFirst() para mover al primero. MoveLast() para el ultimo. MoveNext() y MovePrevius() siguiente y anterior
//el bueno es el claseConectarA
?>

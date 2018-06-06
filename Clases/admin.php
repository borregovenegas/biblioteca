<?php
require_once('../BD/claseConectar.php');
class Admin extends Conectar{
    private $db;
    public function __construct(){
        $this->db=parent::Conectar();//verificar si es que si se llama conexion o coneccion el metodo de la coneccion que iso el pepe
    }
    //usar query para la base de datos
    //aqui buscamos aver si esta la palabra en la base de datos
    
    //buscar admin
    public function buscarAdmin($usuario,$contrasenia){
        $usuario=htmlspecialchars($usuario);
        $contrasenia=htmlspecialchars($contrasenia);
        $query="select * from Admin where usuario='$usuario' and password='$contrasenia'";
        $datos=$this->db->execute($query);
        $aAdmin=array();
        if($datos->RecordCount()){
           $aAdmin=array('error'=>false,'usuario'=>$datos->fields('usuario'));
        }
        else{
            $aAdmin=array('error'=>true,'usuario'=>$usuario);
        }
        return $aAdmin;
    }
    
    //listar todos los admin
    public function listarAdmin(){
        $query="select (usuario, nombre, apellido, email) from Admin";
        $datos=$this->db->execute($query);
        //echo var_dump($datos);
        $aAdmin=array();
        while(!$datos->EOF){
            $aAdmin[]=Array('usuario'=>$datos->fields('usuario'),'nombre'=>$datos->fields('nombre'),'apellido'=>$datos->fields('apellido'),'email'=>$datos->fields('email'));
            $datos->MoveNext();
        }
        //echo var_dump($aUsuarios);
        return $aAdmin;
        //echo var_dump($aUsuarios);
    }
    
    //agregar admin
    public function agregarAdmin($usuario,$nombre,$password,$apellido,$email){
        $usuario=htmlspecialchars($usuario);
        $nombre=htmlspecialchars($nombre);
        $password=htmlspecialchars($password);
        $apellido=htmlspecialchars($apellido);
        $email=htmlspecialchars($email);
        $query="insert into Admin (usuario,nombre,password,apellido,email) values ('$usuario','$nombre','$password','$apellido','$email')";
        $datos=$this->db->execute($query);
        $aAdmin=array();
        $aAdmin=($datos)?array('exito'=>true):array('exito'=>false);
        return $aAdmin;
    }//fin de agregar admin
    
    
    //modificar admin
    public function modificarAdmin($usuario,$nombre,$password,$apellido,$email){
        $usuario=htmlspecialchars($usuario);
        $nombre=htmlspecialchars($nombre);
        $password=htmlspecialchars($password);
        $apellido=htmlspecialchars($apellido);
        $email=htmlspecialchars($email);
       $query="update Admin set usuario='$usuario',nombre='$nombre',password='$password',apellido='$apellido',email='$email'";
        $datos=$this->db->execute($query);
        $aAdmin=array();
        $aAdmin=($datos)?array('exito'=>true):array('exito'=>false);
        return $aAdmin;
    }//fin de modificar
    
    
    //borrar admin
    public function eliminarAdmin($usuario){
        $usuario=htmlspecialchars($usuario);
       $query="delete from Admin where usuario='$usuario'";
        $datos=$this->db->execute($query);
        $aAdmin=array();
        $aAdmin=($datos)?array('exito'=>true):array('exito'=>false);
        return $aAdmin;
    }//fin de Borrar
}
?>
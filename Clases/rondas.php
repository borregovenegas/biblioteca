<?php
require_once('claseConectarA.php');
class ronda extends Conectar{
    private $db;
    public function __construct(){
        $this->db=parent::coneccion();
    }
    //usar procedimiento almacenado
    public function listarRonda(){
        $query="select * from ronda";
        $datos=$this->db->execute($query);
        //echo var_dump($datos);
        $aRonda=array();
        while(!$datos->EOF){
            $aRonda[]=Array('nombre'=>$datos->fields('nombre'));
            $datos->MoveNext();
        }
        //echo var_dump($aUsuarios);
        return $aRonda;
        //echo var_dump($aUsuarios);
    }
   
    public function agregarRonda($nombreRonda){
        $nombreRonda=htmlspecialchars($nombreRonda);
        $query="insert into Ronda (nombreRonda) values ('$nombreRonda')";
        $datos=$this->db->execute($query);
        $aRonda=array();
        $aRonda=($datos)?array('exito'=>true):array('exito'=>false);
        return $aRonda;
    }//fin de agregar ronda
    
   
    
    
    #Metodo de modificar
    public function modificarRonda($nombreRonda){
        $nombreRonda=htmlspecialchars($nombreRonda);
       $query="update Ronda set nombreRonda='$nombreRonda'";
        $datos=$this->db->execute($query);
        $aRonda=array();
        $aRonda=($datos)?array('exito'=>true):array('exito'=>false);
        return $aRonda;
    }//fin de modificar
    
    
    #Borrar
    public function eliminarRonda($nombreRonda){
        $nombreRonda=htmlspecialchars($nombreRonda);
       $query="delete from Ronda where nombre='$nombreRonda'";
        $datos=$this->db->execute($query);
        $aRonda=array();
        $aRonda=($datos)?array('exito'=>true):array('exito'=>false);
        return $aRonda;

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

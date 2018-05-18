<?php
require_once('../BD/claseConectar.php');
class Preguntas extends Conectar{
    private $db;
    public function __construct(){
        $this->db=parent::Conectar();
    }
    //usar procedimiento almacenado
    public function listarPreguntas(){
        $query="select * from Preguntas";
        $datos=$this->db->execute($query);
        //echo var_dump($datos);
        $aPreguntas=array();
        while(!$datos->EOF){
            $aPreguntas[]=Array('nombre'=>$datos->fields('nombre'));
            $datos->MoveNext();
        }
        //echo var_dump($aUsuarios);
        return $aPreguntas;
        //echo var_dump($aUsuarios);
    }
   
    public function agregarPregunta($pregunta,$respuesta,$puntuacion,$tiempoRespuesta){
        $pregunta=htmlspecialchars($pregunta);
        $respuesta=htmlspecialchars($respuesta);
        $puntuacion=htmlspecialchars($puntuacion);
        $tiempoRespuesta=htmlspecialchars($tiempoRespuesta);
        $query="insert into Preguntas (pregunta,respuesta,puntuacion,tiempoRespuesta) values ('$pregunta','$respuesta','$puntuacion','$tiempoRespuesta')";
        $datos=$this->db->execute($query);
        $aPreguntas=array();
        $aPreguntas=($datos)?array('exito'=>true):array('exito'=>false);
        return $aPreguntas;
    }//fin de agregar ronda
    
    #metodo de juego
    public function agregarjuego($nombreJuego){
        $nombreJuego=htmlspecialchars($nombreJuego);
        $query="insert into juego (nombreJuego) values ('$nombreJuego')";
        $datos=$this->db->execute($query);
        $aMomentos=array();
        $aMomentos=($datos)?array('exito'=>true):array('exito'=>false);
        return $aMomentos;
    }//fin de juego
    
    #metodo de rondas
    public function agregarPreguntas($nombreRonda){
        $nombreRonda=htmlspecialchars($nombreRonda);
        $query="insert into Ronda (nombreRonda) values ('$nombreRonda')";
        $datos=$this->db->execute($query);
        $aMomentos=array();
        $aMomentos=($datos)?array('exito'=>true):array('exito'=>false);
        return $aMomentos;
    }//fin de rondas
    
    #metodo de preguntas
    public function agregarpregunta($pregunta,$respuesta,$puntuacion,$tiempoRespuesta,){
        $pregunta=htmlspecialchars($pregunta);
         $respuesta=htmlspecialchars($respuesta);
          $puntuacion=htmlspecialchars($puntuacion);
         $tiempoRespuesta=htmlspecialchars($tiempoRespuesta);
        $query="insert into Preguntas (pregunta,respuesta,puntuacion,tiempoRespuesta) values ('$pregunta','$respuesta','$puntuacion','$tiempoRespuesta')";
        $datos=$this->db->execute($query);
        $aMomentos=array();
        $aMomentos=($datos)?array('exito'=>true):array('exito'=>false);
        return $aMomentos;
    }//fin de preguntas
    
    
    #Metodo de modificar
    public function modificarPreguntas($pregunta,$respuesta,$puntuacion,$tiempoRespuesta){
        $pregunta=htmlspecialchars($pregunta);
         $respuesta=htmlspecialchars($respuesta);
          $puntuacion=htmlspecialchars($puntuacion);
           $tiempoRespuesta=htmlspecialchars($tiempoRespuesta);
       $query="update Preguntas set pregunta='$pregunta',respuesta='$respuesta,puntuacion='$puntuacion,tiempoRespuesta='$tiempoRespuesta";
        $datos=$this->db->execute($query);
        $aPreguntas=array();
        $aPreguntas=($datos)?array('exito'=>true):array('exito'=>false);
        return $aPreguntas;
    }//fin de modificar
    
    
    #Borrar
    public function eliminarPreguntas($pregunta,$respuesta,$puntuacion,$tiempoRespuesta){
        $pregunta=htmlspecialchars($pregunta);
       $query="delete from Preguntas where pregunta='$pregunta'";
        $datos=$this->db->execute($query);
        $aPreguntas=array();
        $aPreguntas=($datos)?array('exito'=>true):array('exito'=>false);
        return $aPreguntas;
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
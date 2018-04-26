<?php
//Clase de manejo de usuarios
include "claseconectar.inc.php";

class Usuarios extends Conectar
{
  private $db;
    public function __construct()
    {
        $this->db = parent::Conectar(); //Estamos heraedando, hacemos referencia a la herencia
    }

    public function existeUsuario($usuario){
      $this->db->SetFetchMode(ADODB_FETCH_ASSOC);
      $sql="call spExisteUsuario('$usuario')";
      $resultado=$this->db->Execute($sql)->FetchRow();
      $mensaje=[];
      $mensaje['exito']=false;
      if($resultado){
        $mensaje['exito']=true;
        $mensaje = array_merge($resultado,$mensaje);
      }
      return $mensaje;
    }

    public function buscarUsuario($usuario, $password)
    {
      $this->db->SetFetchMode(ADODB_FETCH_ASSOC);
      $sql = "call spBuscarUsuario('$usuario','$password')";
      $resultado=$this->db->Execute($sql)->FetchRow(); //Cuando se usan procedimientos almacenados, se usa FetchRow()
      return $resultado;
    }

    public function loginUsuario($usuario, $password)
    {
      session_start(); //Deben estar activadas las cookies en el navegador
      $this->db->SetFetchMode(ADODB_FETCH_ASSOC);
      //Evita la inyección de usuarios
      //$usuario=htmlspecialchars($usuario);
      $sql = "call spBuscarUsuario('$usuario','$password')";
      $resultado=$this->db->Execute($sql)->FetchRow(); //Cuando se usan procedimientos almacenados, se usa FetchRow()
      $mensaje = [];
      $mensaje['exito'] = false;
      if($resultado){
        $mensaje['exito'] = true;
        //array_merge() es útil para integrar un arreglo en otro
        $mensaje = array_merge($resultado,$mensaje);
        $_SESSION = array_merge($resultado,$_SESSION);
      }
      return $mensaje;
    }

    public function agregarUsuario($usuario, $nombre, $password, $tipo, $fotografia)
    {
      $mensaje = [];
      $mensaje['exito'] = false;
      $sql = "call spAgregarUsuario('$usuario', '$nombre', '$password', '$tipo', '$fotografia')";
      $resultado=$this->db->Execute($sql); //Cuando se usan procedimientos almacenados, se usa FetchRow()
      if($resultado){
        $mensaje['exito'] = true;
        //$mensaje = array_merge($resultado,$mensaje);
      }
      return $mensaje;
    }

    public function editarUsuario($usuario, $nombre, $tipo, $fotografia)
    {
      $mensaje = [];
      $mensaje['exito'] = false;
      $sql = "call spEditarUsuario('$usuario', '$nombre', '$tipo', '$fotografia')";
      $resultado=$this->db->Execute($sql); //Cuando se usan procedimientos almacenados, se usa FetchRow()
      if($resultado){
        $mensaje['exito'] = true;
      }
      return $mensaje;
    }

    public function eliminarUsuario($usuario, $nombre, $tipo, $fotografia)
    {
      $mensaje = [];
      $mensaje['exito'] = false;
      $sql = "call spEliminarUsuario('$usuario', '$nombre', '$tipo', '$fotografia')";
      $resultado=$this->db->Execute($sql); //Cuando se usan procedimientos almacenados, se usa FetchRow()
      if($resultado){
        $mensaje['exito'] = true;
      }
      return $mensaje;
    }

    public function listarUsuarios()
    {
      session_start(); //Deben estar activadas las cookies en el navegador
      $this->db->SetFetchMode(ADODB_FETCH_ASSOC);
      $sql = "call spListarUsuario()";
      $resultado=$this->db->Execute($sql);
      $mensaje = [];
      $mensaje['exito'] = false;
      $mensaje['empleados'] = [];
      if($resultado){
        while(!$resultado->EOF){ /*Hacerlo mientras NO sea el fin del archivo (EOF)*/
          $aEmpleados[] = array(
            'usuario'=>$resultado->fields('usuario'), /*Campo 'usuario' de $resultado*/
            'nombre'=>$resultado->fields('nombre'),
            'tipo'=>$resultado->fields('tipo'),
            'fotografia'=>base64_encode($resultado->fields('fotografia')),
          );
          $resultado->MoveNext();
        }//while(!$resultado->EOF)
        $mensaje['exito'] = true;
        $mensaje['empleados'] = $aEmpleados;
      }//if($resultado)
      return $mensaje;
    }

    public function fotoUsuario($usuario){
      $this->db->SetFetchMode(ADODB_FETCH_ASSOC);
      $sql = "call spFotoUsuario('$usuario')";
      $resultado = $this->db->Execute($sql)->FetchRow();
      if($resultado){
        return $resultado;
      }
    }
}
?>

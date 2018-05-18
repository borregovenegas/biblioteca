
<?php
require_once('../BD/claseConectar.php');
class Grupos extends Conectar{
    private $db;
    public function __construct(){
        $this->db=parent::Conectar();//verificar si es que si se llama conexion o coneccion el metodo de la coneccion que iso el pepe
    }
    //usar query para la base de datos
    //aqui buscamos aver si esta la palabra en la base de datos
    
    //buscar grupo
    public function buscarGrupo($usuario,$contrasenia){
        $usuario=htmlspecialchars($usuario);
        $contrasenia=htmlspecialchars($contrasenia);
        $query="select (usuario) from Grupos where usuario='$usuario' and password='$contrasenia'";
        $datos=$this->db->execute($query);
        $aGrupos=array();
        if($datos->RecordCount()){
           $aGrupos=array('error'=>false,'usuario'=>$datos->fields('usuario'));
        }
        else{
            $aGrupos=array('error'=>true,'usuario'=>$usuario);
        }
        return $aGrupos;
    }
    
    //listar todos los admin
    public function listarGrupos(){
        $query="select (usuario, institucion, encargado, correoElectronico, numeroIntegrantes) from Grupos";
        $datos=$this->db->execute($query);
        //echo var_dump($datos);
        $aGrupos=array();
        while(!$datos->EOF){
            $aGrupos[]=Array('usuario'=>$datos->fields('usuario'),'institucion'=>$datos->fields('institucion'),'encargado'=>$datos->fields('encargado'),'correoElectronico'=>$datos->fields('correoElectronico'),'numeroIntegrantes'=>$datos->fields('numeroIntegrantes'));
            $datos->MoveNext();
        }
        //echo var_dump($aUsuarios);
        return $aGrupos;
        //echo var_dump($aUsuarios);
    }
    
    //agregar grupo
    public function agregarGrupo($institucion,$password,$encargado,$usuario,$correoElectronico,$numeroIntegrantes){
        $institucion=htmlspecialchars($institucion);
        $password=htmlspecialchars($password);
        $encargado=htmlspecialchars($encargado);
        $usuario=htmlspecialchars($usuario);
        $correoElectronico=htmlspecialchars($correoElectronico);
        $numeroIntegrantes=htmlspecialchars($numeroIntegrantes);
        $query="insert into Grupos (institucion,password,encargado,usuario,correoElectronico,numeroIntegrantes) values ('$institucion','$password','$encargado','$usuario','$correoElectronico','$numeroIntegrantes')";
        $datos=$this->db->execute($query);
        $aGrupos=array();
        $aGrupos=($datos)?array('exito'=>true):array('exito'=>false);
        return $aGrupos;
    }//fin de agregar admin
    
    
    //modificar grupo
    public function modificarGrupo($idGrupo,$institucion,$password,$encargado,$usuario,$correoElectronico,$numeroIntegrantes){
        $idGrupo=htmlspecialchars($idGrupo);
        $institucion=htmlspecialchars($institucion);
        $password=htmlspecialchars($password);
        $encargado=htmlspecialchars($encargado);
        $usuario=htmlspecialchars($usuario);
        $correoElectronico=htmlspecialchars($correoElectronico);
        $numeroIntegrantes=htmlspecialchars($numeroIntegrantes);
       $query="update Grupos where idGrupo=$idGrupo set institucion='$institucion',password='$password',encargado='$encargado',usuario='$usuario',correoElectronico='$correoElectronico',numeroIntegrantes='$numeroIntegrantes'";
        $datos=$this->db->execute($query);
        $aGrupos=array();
        $aGrupos=($datos)?array('exito'=>true):array('exito'=>false);
        return $aGrupos;
    }//fin de modificar
    
    
    //borrar grupo
    public function eliminarGrupo($usuario){
        $usuario=htmlspecialchars($usuario);
       $query="delete from Grupos where usuario='$usuario'";
        $datos=$this->db->execute($query);
        $aGrupos=array();
        $aGrupos=($datos)?array('exito'=>true):array('exito'=>false);
        return $aGrupos;
    }//fin de Borrar
}
?>
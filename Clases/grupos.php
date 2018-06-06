
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
        $query="select (usuario, institucion, encargado) from Grupos";
        $datos=$this->db->execute($query);
        //echo var_dump($datos);
        $aGrupos=array();
        while(!$datos->EOF){
            $aGrupos[]=Array('usuario'=>$datos->fields('usuario'),'institucion'=>$datos->fields('institucion'),'encargado'=>$datos->fields('encargado'));
            $datos->MoveNext();
        }
        //echo var_dump($aUsuarios);
        return $aGrupos;
        //echo var_dump($aUsuarios);
    }
    
    //agregar grupo
    public function agregarGrupo($institucion,$password,$encargado,$usuario){
        $institucion=htmlspecialchars($institucion);
        $password=htmlspecialchars($password);
        $encargado=htmlspecialchars($encargado);
        $usuario=htmlspecialchars($usuario);
        $query="insert into Grupos (institucion,encargado,usuario,password) values ('$institucion','$encargado','$usuario','$password')";
        $datos=$this->db->execute($query);
        $aGrupos=array();
        $aGrupos=($datos)?array('exito'=>true):array('exito'=>false);
        return $aGrupos;
    }//fin de agregar admin
    
    
    //modificar grupo
    public function modificarGrupo($institucion,$password,$encargado,$usuario){
        $institucion=htmlspecialchars($institucion);
        $password=htmlspecialchars($password);
        $encargado=htmlspecialchars($encargado);
        $usuario=htmlspecialchars($usuario);
       $query="update Grupos where usuario=$usuario set institucion='$institucion',password='$password',encargado='$encargado',usuario='$usuario'";
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
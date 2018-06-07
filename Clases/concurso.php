
<?php
require_once('../BD/claseConectar.php');
class Concurso extends Conectar{
    private $db;
    public function __construct(){
        $this->db=parent::Conectar();//verificar si es que si se llama conexion o coneccion el metodo de la coneccion que iso el pepe
    }
    //usar query para la base de datos
    //aqui buscamos aver si esta la palabra en la base de datos
    
    //buscar grupo
    public function buscarJuego($nombre){
        $usuario=htmlspecialchars($usuario);
        $query="select (nombre) from Concurso where nombre='$nombre'";
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
    public function listarJuegos(){
        $query="select (nombre) from concurso";
        $datos=$this->db->execute($query);
        //echo var_dump($datos);
        $a=array();
        while(!$datos->EOF){
            $a[]=Array('nombre'=>$datos->fields('nombre'));
            $datos->MoveNext();
        }
        //echo var_dump($aUsuarios);
        return $a;
        //echo var_dump($aUsuarios);
    }
    
    //agregar grupo
    public function agregarJuego($nombre){
        $nombre=htmlspecialchars($nombre);
        $query="insert into Concurso (nombre) values ('$nombre')";
        $datos=$this->db->execute($query);
        $a=array();
        $a=($datos)?array('exito'=>true):array('exito'=>false);
        return $a;
    }//fin de agregar admin
    
    
    //modificar grupo
    public function modificarJuego($nombre, $idJuego){
        $nombre=htmlspecialchars($nombre);
       $query="update Juegos where idJuegos=$idJuego set nombre='$nombre'";
        $datos=$this->db->execute($query);
        $a=array();
        $a=($datos)?array('exito'=>true):array('exito'=>false);
        return $a;
    }//fin de modificar
    
    
    //borrar grupo
    public function eliminarJuego($nombre){
        $nombre=htmlspecialchars($nombre);
       $query="delete from Juegos where nombre='$nombre'";
        $datos=$this->db->execute($query);
        $a=array();
        $a=($datos)?array('exito'=>true):array('exito'=>false);
        return $a;
    }//fin de Borrar
}
?>
<?php
//Script a conexion y motor de base de datos
include "config.inc.php";
include '../Librerias/adodb5/adodb.inc.php';
//Uso de clases abstractas para evitar la creacion directa de objetos
abstract class Conectar
{
    private $conn, $tipo = TIPO, $servidor = SERVIDOR, $usuario = USUARIO, $password = PASSWORD, $basedatos = BASEDATOS;
    public function Conectar()
    {
        try {
          if(!$this->conn=ADONewConnection($this->tipo)){
            throw new Exception("Error al cargar el driver");
          } elseif (!$this->conn->Connect($this->servidor, $this->usuario, $this->password, $this->basedatos)) {
            throw new Exception("Error con la conexi&oacute;n a la base de datos");
          }
          return $this->conn;
        } catch (Exception $e) {
?>
          <h1 class="has-error">A ocurrido un error en la conexi&oacute;n:</h1>
          <h2><?php echo $e->getMessage(); ?></h2>
          <h3>L&iacute;nea: <?php $e->getLine(); ?></h3>
<?php
        }
    }
}
?>

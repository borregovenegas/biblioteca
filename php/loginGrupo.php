<?php
session_start();
require_once('../Clases/grupos.php');
$grupos=new Grupos;
$listar=$grupos->buscarGrupo($_POST['usuario'],$_POST['password']);
if($listar['error']==false){
    $_SESSION['usuario']=$listar['usuario'];
    $_SESSION['tipo']="Usuario";
    echo "Menu/MenuUsuario.html#";
}
else{
    echo "index.html#";
}



?>

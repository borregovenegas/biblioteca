<?php
session_start();
require_once('../Clases/admin.php');
$admin=new Admin;
$listar=$admin->buscarAdmin($_POST['usuario'],$_POST['password']);
if($listar['error']==false){
    $_SESSION['usuario']=$listar['usuario'];
    $_SESSION['tipo']="Admin";
    echo "Menu/MenuAdministrador.html#";
}
else{
    echo "index.html#";
}



?>
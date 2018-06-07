<?php
session_start();
require_once('../Clases/admin.php');
if($_SESSION['usuario']!=null&&$_SESSION['tipo']=="Admin"){
echo "false #";
}
else{
    echo "true ../index.html#";
}



?>
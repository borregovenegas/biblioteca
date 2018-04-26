<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Conexi&oacute;n</title>
</head>
<body>
  <?php
/*
  *1 - Conexión al motor
  *2 - Conexión a la base de datos
  *3 - Hacer uso de las tablas
  */
  //Conexión a base de datos. "servidor de base de datos", "usuario", "contraseña"
  $conex = mysqli_connect('192.168.50.203','pepe','1234','biblioteca','3306','/tmp/mysql.sock') or die('No se pudo conectar: '.mysql_error());
  //Lectura de registros
  //Llamar procedimiento almacenado
  $password = md5('conejito9393');
  $sql = "call spBuscarUsuario('admin','$password')";
  $query = "SELECT usuario,nombre FROM usuarios WHERE usuario = 'admin'";
  $rst = mysqli_query($conex,$sql) or die('Consulta fallida: '.mysql_error()); //Se puede cambiar $sql por $query
  $resultado = mysqli_fetch_array($rst,MYSQLI_ASSOC); //MYSQLI_ASSOC nos permite mostrar sólo los asociados de las consultas
  if(mysqli_num_rows($rst)){ //O podría ser también el $rst. Resultado de valor númerico
    //Sin el MYSQL_ASSOC, se podría poner $resultado[Index];
    echo "El nombre de usuario es: ".$resultado['nombre'].'<br>';
    echo "El usuario es: ".$resultado['usuario'].'<hr>';
  }else{
    echo "Error en la consulta o tabla vacia";
  }
  /*mysqli_select_db('ventas') or die('No se pudo seleccionar la base de datos');*/
/*
  // Realizar una consulta MySQL
$query = 'SELECT * FROM my_table';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

// Imprimir los resultados en HTML
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);
*/
  ?>
  <h1>$rst</h1><br>
  <pre><?php print_r($rst)?></pre>
  <hr>
  <pre><?php var_dump($rst)?></pre>
  <hr>
  <h1>$resultado</h1><br>
  <!--print_r(), var_export() y var_dump() permiten trabajar con arreglos-->
  <pre><?php print_r($resultado) ?></pre>
  <hr>
  <pre><?php var_dump($resultado) ?></pre> <!--El más explicito de todos para mostrar un arreglo-->
  <hr>
  <pre><?php var_export($resultado) ?></pre>
  <hr>
  <pre><?php echo json_encode($resultado) ?></pre> <!--Exporta la consulta en un archivo JSON-->
</body>
</html>

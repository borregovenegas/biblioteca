//Swap para que el usuario pueda juegar.
$("#Jugar").click(function(){ $.post('swap/Jugar.php', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el usuario pueda ver las convocatorias activas del concurso.
$("#Convocatorias").click(function(){ $.post('swap/Convocatorias.php', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el usuario pueda salir de su sesión activa.
$("#SalirUsuario").click(function(){ $.post('swap/SalirUsuario.php', {}, function(data){ $("#contenido").html(data);});});

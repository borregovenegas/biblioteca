//Swap para que el administrador pueda agregar un nuevo administrador
$("#registrarAdministrador").click(function(){ $.post('../SWAP/RegistrarAdministrador.php', {}, function(data){ $("#contenido").html(data);});});
$("#cancelar").click(function(){ $.post('../SWAP/Inicio.html', {}, function(data){ $("#contenido").html(data);});});
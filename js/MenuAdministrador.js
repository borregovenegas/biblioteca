//Swap para que el administrador pueda armar un juego.
$("#Inicio").click(function(){ $.post('swap/index.html', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador pueda armar un juego.
$("#ArmarJuego").click(function(){ $.post('swap/ArmarJuego.php', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador lleve el control de un juego.
$("#ControlJuego").click(function(){ $.post('swap/controlJuego.php', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador pueda registrar un juego.
$("#RegistrarGrupo").click(function(){ $.post('swap/registrarGrupo.php', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador pueda registrar un administrador nuevo.
$("#RegistrarAdministrador").click(function(){ $.post('swap/RegistrarAdministrador.php', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador pueda cerrar sesión.
$("#Salir").click(function(){ $.post('swap/LogOut.php', {}, function(data){ $("#contenido").html(data);});});

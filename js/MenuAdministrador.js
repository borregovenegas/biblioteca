//Swap para que el administrador pueda armar un juego.
$("#Inicio").click(function(){ $.post('../SWAP/Inicio.html', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador pueda armar un juego.
$("#ArmarJuego").click(function(){ $.post('../SWAP/registrarJuego.html', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador lleve el control de un juego.
$("#ControlJuego").click(function(){ $.post('../SWAP/ControlJuego.html', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador pueda registrar un juego.
$("#RegistrarGrupo").click(function(){ $.post('../SWAP/RegistrarGrupo.html', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador pueda registrar un administrador nuevo.
$("#RegistrarAdministrador").click(function(){ $.post('../SWAP/RegistrarAdministrador.html', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador pueda cerrar sesión.
$("#Salir").click(function(){ $.post('swap/LogOut.php', {}, function(data){ $("#contenido").html(data);});});

//Swap para que el administrador pueda armar un juego.
$("#Inicio").click(function(){ $.post('../swap/registrarConcurso.html', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador pueda registrar un juego.
$("#registrarGrupo").click(function(){ $.post('../swap/registrarGrupo.html', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador pueda cerrar sesi�n.
//$("#Salir").click(function(){ $.post('../index.html', {}, function(data){ $("#contenido").html(data);});});

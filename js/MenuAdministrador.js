//Swap para que el administrador pueda editar y eliminar preguntas, rondas y grupos
$("#configurar").click(function(){ $.post('../SWAP/RegistrarRonda.html', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador pueda registrar un grupo.
$("#registrarGrupo").click(function(){ $.post('../SWAP/registrarGrupo.html', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador pueda registrar un concurso.
$("#registrarConcurso").click(function(){ $.post('../SWAP/registrarConcurso.html', {}, function(data){ $("#contenido").html(data);});});

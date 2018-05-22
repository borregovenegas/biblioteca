//Swap para que el administrador pueda agregar un nuevo concurso
$("#registrarConcurso").click(function(){ $.post('../SWAP/RegistrarRonda.html', {
  nombre: $("#inputEscuela").val()
}, function(data){ $("#contenido").html(data);});});

//Swap para que el administrador pueda editar un concurso
$("#editarConcurso").click(function(){ $.post('../php/agregarGrupo.php', {
  nombre: $("#inputCombo").val()
}, function(data){ $("#contenido").html(data);});});

//Swap para que el administrador pueda eliminar un concurso
$("#eliminarConcurso").click(function(){ $.post('../php/agregarGrupo.php', {
  nombre: $("#inputCombo").val()
}, function(data){ $("#contenido").html(data);});});

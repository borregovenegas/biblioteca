//Swap para que el administrador pueda agregar un nuevo grupo de alumnos/usuarios
$("#registrarGrupo").click(function(){ $.post('../php/agregarGrupo.php', {
  escuela: $("#inputEscuela").val(),
  usuario: $("#inputUser").val(),
  encargado: $("#inputEncargado").val(),
  email: $("#inputEmail").val(),
  integrantes: $("#inputIntegrantes").val(),
  password: $("#inputPass").val()
}, function(data){ $("#contenido").html(data);});});

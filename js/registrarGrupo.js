//Swap para que el administrador pueda agregar un nuevo grupo de alumnos/usuarios
$("#registrarGrupo").click(function(){ $.post('../SWAP/registrarGrupo.php', {
  grupoAgregar: $("#inputEscuela").val(),
  usuario: $("#inputUsuario").val(),
  encargado: $("#inputEncargado").val(),
  password: $("#inputPass").val()
}, function(data){ $("#contenido").html(data);});});

$("#modificarGrupo").click(function(){ $.post('../SWAP/registrarGrupo.php', {
  institucion: $("#inputEscuela").val(),
  usuario: $("#inputUser").val(),
  encargado: $("#inputEncargado").val(),
  password: $("#inputPass").val()
}, function(data){ $("#contenido").html(data);});});

$("#Editar").click(function(){ $.post('../SWAP/registrarGrupo.php', {
  grupoEditar: $(this).prop("grupoEditar"),
  usuario: $(this).prop("usuario"),
  encargado: $(this).prop("encargado"),
  password: $(this).prop("password")
}, function(data){ alert($(this).prop("value")); $("#contenido").html(data);});});

$("#Eliminar").click(function(){ $.post('../SWAP/registrarGrupo.php', {
  grupoEliminar: $(this).data("institucion")
}, function(data){ $("#contenido").html(data);});});

$("#cancelar").click(function(){ $.post('../SWAP/Inicio.html', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador pueda agregar un nuevo administrador
$("#registrarAdministrador").click(function(){ $.post('../SWAP/RegistrarAdministrador.html', {
  usuario: $("#inputUser").val(),
  nombre: $("#inputName").val(),
  apellido: $("#inputLastName").val(),
  email: $("#inputEmail").val(),
  password: $("#inputPass").val()
}, function(data){ $("#contenido").html(data);});});
$("#cancelar").click(function(){ $.post('../SWAP/Inicio.html', {}, function(data){ $("#contenido").html(data);});});
//Swap para el login de un Administrador redigir a MenuAdministrador.
$("#LoginAdministrador").click(function() {$.post('swap/MenuAdministrador.php', {}, function(data) {$("#contenido").html(data);});});
//Swap para el login de un Usuario redigir a MenuUsuario.
$("#LoginAdministrador").click(function() {$.post('swap/MenuUsuario.php', {}, function(data) {$("#contenido").html(data);});});

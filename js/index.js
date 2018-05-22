//Swap para el login de un Administrador redigir a MenuAdministrador.
$("#btnLoginAdmin").click(function() {$.post('Menu/MenuAdministrador.html', {}, function(data) {$("#contenido").html(data);});});
//Swap para el login de un Usuario redigir a MenuUsuario.
$("#btnLoginGrupo").click(function() {$.post('Menu/MenuUsuario.html', {}, function(data) {$("#contenido").html(data);});});

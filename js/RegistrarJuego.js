$("#registrarJuego").click(function(){ $.post('../SWAP/RegistrarRonda.html', {}, function(data){ $("#contenido").html(data);});});
$("#AgregarGrupos").click(function(){ $.post('../SWAP/AgregarGruposJuego.html', {}, function(data){ $("#contenido").html(data);});});
$("#cancelar").click(function(){ $.post('../SWAP/Inicio.html', {}, function(data){ $("#contenido").html(data);});});
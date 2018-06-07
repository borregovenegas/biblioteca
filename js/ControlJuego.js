

$("#registrarJuego").click(function(){ $.post('../SWAP/IniciarJuego.html', {}, function(data){ $("#contenido").html(data);});});
$("#cancelar").click(function(){ $.post('../SWAP/Inicio.html', {}, function(data){ $("#contenido").html(data);});});


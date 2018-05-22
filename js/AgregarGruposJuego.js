$("#siguiente").click(function(){ $.post('../SWAP/IniciarJuego.html', {}, function(data){ $("#contenido").html(data);});});
$("#cancelar").click(function(){ $.post('../SWAP/ControlJuego.html', {}, function(data){ $("#contenido").html(data);});});


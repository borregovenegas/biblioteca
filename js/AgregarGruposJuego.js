$("#siguiente").click(function(){ $.post('../SWAP/registrarJuego.html', {}, function(data){ $("#contenido").html(data);});});
$("#cancelar").click(function(){ $.post('../SWAP/registrarJuego.html', {}, function(data){ $("#contenido").html(data);});});


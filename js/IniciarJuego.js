$("#iniciar").click(function(){ $.post('../SWAP/Puntuaciones.html', {}, function(data){ $("#contenido").html(data);});});

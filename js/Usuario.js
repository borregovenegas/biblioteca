//Swap para que el usuario pueda juegar.
$("#Jugar").click(function(){ $.post('../SWAP/Jugar.php', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el usuario pueda ver las convocatorias activas del concurso.
$("#Inicio").click(function(){ $.post('../SWAP/Inicio.html', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el usuario pueda salir de su sesión activa.
$("#Salir").click(function(){ $.post('../php/salir.php', {}, function(data){ location.href=data;});});
$(document).ready(function(){ $.post('../php/seguridadUsuario.php', {}, function(data){
    let d=data.split(' ');
    if(d[0]==="false"){
        
    }
    else{
        location.href=d[1];
    }
    });});

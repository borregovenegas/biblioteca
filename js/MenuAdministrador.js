//Swap para que el administrador pueda armar un juego.
$("#Inicio").click(function(){ $.post('../SWAP/Inicio.html', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador pueda armar un juego.
$("#RegistrarConcurso").click(function(){ $.post('../SWAP/registrarJuego.html', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador lleve el control de un juego.
$("#Concurso").click(function(){ $.post('../SWAP/ControlJuego.html', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador pueda registrar un juego.
$("#RegistrarGrupo").click(function(){ $.post('../SWAP/registrarGrupo.html', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador pueda registrar un administrador nuevo.
$("#RegistrarAdministrador").click(function(){ $.post('../SWAP/RegistrarAdministrador.html', {}, function(data){ $("#contenido").html(data);});});
//Swap para que el administrador pueda cerrar sesión.
$("#Salir").click(function(){ $.post('../php/salir.php', {}, function(data){ location.href=data;});});
$(document).ready(function(){ $.post('../php/seguridadAdmin.php', {}, function(data){
    let d=data.split(' ');
    if(d[0]==="false"){
        
    }
    else{
        location.href=d[1];
    }
    });});

function showMe (num) {
 if (num == 1)
 {
  document.getElementById("form1").style.display ="block";
 document.getElementById("form2").style.display ="none";
 document.getElementById("cancelar").style.display ="block";
 document.getElementById("c2").style.display ="none";
 }
 else
 {
document.getElementById("form1").style.display ="none";
document.getElementById("form2").style.display ="block";
document.getElementById("cancelar").style.display ="block";
document.getElementById("c1").style.display="none";
}
}
function cancelBtn(){
 document.getElementById("form1").style.display="none";
 document.getElementById("form2").style.display="none";
 document.getElementById("c1").style.display="block";
 document.getElementById("c2").style.display="block";
 document.getElementById("cancelar").style.display ="none";
}

window.onload = function() {
  document.getElementById('form1').style.display = 'none';
  document.getElementById('form2').style.display = 'none';
  document.getElementById("cancelar").style.display ="none";
};

function launchFullScreen(element) {
  if(element.requestFullScreen) {
    element.requestFullScreen();
  } else if(element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if(element.webkitRequestFullScreen) {
    element.webkitRequestFullScreen();
  }
}
// Lanza en pantalla completa en navegadores que lo soporten
 function cancelFullScreen() {
     if(document.cancelFullScreen) {
         document.cancelFullScreen();
     } else if(document.mozCancelFullScreen) {
         document.mozCancelFullScreen();
     } else if(document.webkitCancelFullScreen) {
         document.webkitCancelFullScreen();
     }
 }
 
 
$("#btnLoginAdmin").click(function(){ $.post('../php/redireccionLoginAdmin.php', {});});
$("#btnLoginGrupo").click(function(){ $.post('../php/redireccionLoginUsuario.php', {});});
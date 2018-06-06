function showMe (num) {
 if (num == 1)
 {
  document.getElementById("form1").style.display ="block";
 document.getElementById("form2").style.display ="none";
 }
 else
 {
document.getElementById("form1").style.display ="none";
document.getElementById("form2").style.display ="block";
}
}

window.onload = function() {
  document.getElementById('form1').style.display = 'none';
  document.getElementById('form2').style.display = 'none';
};
$("#btnLoginGrupo").click(function(){ $.post('php/loginGrupo.php', {usuario: $("#usuarioGrupo").val(), password: $("#passwordGrupo").val()}, function(data){ location.href=data;});});
$("#btnLoginAdmin").click(function(){ $.post('php/loginAdmin.php', {usuario: $("#usuarioAdmin").val(), password: $("#passwordAdmin").val()}, function(data){ location.href=data;});});

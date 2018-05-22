function showMe(num) {
  if (num == 1) {
    document.getElementById("form1").style.display = "block";
    document.getElementById("form2").style.display = "none";
  } else {
    document.getElementById("form1").style.display = "none";
    document.getElementById("form2").style.display = "block";
  }
}

window.onload = function() {
  document.getElementById('form1').style.display = 'none';
  document.getElementById('form2').style.display = 'none';
};

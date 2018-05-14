//Swap para que el administrador pueda agregar un nuevo grupo de alumnos/usuarios
$("#registrarAlumno").click(function(){ $.post('../php/agregarAlumno.php', {
  nombre: $("#inputName").val(),
  apellido: $("#inputApellido").val(),
  sexo: $("#inputSexo").val(),
  edad: $("#inputEdad").val(),
  grado: $("#inputGrado").val()
}, function(data){ $("#contenido").html(data);});});

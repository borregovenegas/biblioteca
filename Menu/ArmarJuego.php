<link rel="stylesheet" href="../Librerias/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/ArmarJuego.css">
<div class="container">
  <form action="" method="post" role="form">
    <div class="panel panel-primary">
      <div class="panel=heading">
        <h2>Armar juego</h2></div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover table-condensed">
            <thead>
              <th>#</th>
              <th>Pregunta</th>
              <th>Respuesta</th>
              <th>Puntuaci&oacute;n</th>
              <th>Tiempo para responder</th>
              <th>Acciones</th>
            </thead>
            <tbody id="juego">
              <tr id="ren1">
                <td id="1num">1</td>
                <td><input type="text" name="1pregunta" id="1pregunta"></td>
                <td><input type="text" name="1respuesta" id="1respuesta"></td>
                <td><input type="text" name="1puntos" id="1puntos"></td>
                <td><input type="text" name="1tiempo" id="1tiempo"></td>
                <td>
                  <button type="button" id="agregarren" onclick="agregarRen();" <i class="fa fa-plus fa-lg"></i>+</button>
                  <button type="button" id="borrarren" onclick="borrarRen();" <i class="fa fa-minus fa-lg"></i>-</button>
                </td>
                <input type="hidden" value="1" id="fila">
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="panel-footer">
        <div class="row">
          <div class="col-sm-offset-9 col-sm-3">
            <button type="submit" class="btn btn-primary">Guardar ronda</button>&nbsp;
            <button type="reset" class="btn btn-danger">Limpiar ronda</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
  <script language="javascript" src="../Librerias/jQuery.js"></script>
  <script src="../Libererias/bootstrap.min.js"></script>
  <script src="../js/ArmarJuego.js"></script>

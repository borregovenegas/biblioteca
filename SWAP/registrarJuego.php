<?php
session_start();
echo $_SESSION['nombre'];
require_once('../Clases/concurso.php');
$concurso=new Concurso;
$listar=$concurso->listarJuegos();
?>
<div class="col-md-offset-4 col-md-4">
    <form class="card card-container" action="">
      <div class="form-group">
        <h2>Registrar Concurso</h2>
        <br>
        <label for="inputJuego">Nombre del Concurso</label>
        <input type="text" class="form-control" id="inputJuego" placeholder="Escribe el nombre del juego">
        <br>
        <button class="btn btn-lg btn-primary" type="submit" id="registrarJuego">Registrar Concurso</button>
        <button class="btn btn-lg btn-danger" type="reset" id="cancelar">Terminar</button>
      </div>
    </form>
    <table class="table table-striped">
            <thead>
              <tr>
                <th>Concursos</th>
                <th colspan="3">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($lista as $l){
              
              ?>
              <tr>
                <td><?php echo $l['nombre']; ?></td>
                <td><button type="button" id="Editar" <i class="fa fa-pencil fa-lg" name="<?php echo $l['nombre']; ?>"></i>editar</button></td>
                <td><button type="button" id="Eliminar" <i class="fa fa-eraser fa-lg"></i>eliminar</button></td>
                <td><button type="button" id="AgregarGrupos" <i class="fa fa-plus fa-lg"></i>AgregarGrupos</button></td>
              </tr>
              
              <?php
              }
              ?>
            </tbody>
          </table>
  </div>
  <script src="../js/RegistrarJuego.js"></script>

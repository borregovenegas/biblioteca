<?php
session_start();
require_once('../Clases/admin.php');
$admin=new Admin;
$listar=$admin->listarGrupos();
?>
<div class="col-md-offset-4 col-md-4">
    <form class="card card-container" action="">
      <div class="form-group">
        <h2>Registrar Grupo</h2>
        <br>
        <label for="inputEscuela">Instituci&oacute;n</label>
        <input type="text" class="form-control" id="inputEscuela" placeholder="Ingrese el nombre de la instituci&oacute;n">
        <br>
        <label for="inputEncargado">Encargado</label>
        <input type="text" class="form-control" id="inputEncargado" placeholder="Ingrese el nombre del encargado">
        <br>
        <label for="inputUsuario">Usuario</label>
        <input type="text" class="form-control" id="inputUsuario" placeholder="Ingrese el nombre de usuario">
        <br>
        <label for="inputPass">Contrase&ntilde;a</label>
        <input type="password" class="form-control" id="inputPass" placeholder="Escriba la contrase&ntilde;a del grupo">
        <br>
        <button class="btn btn-lg btn-primary" type="submit" id="registrarGrupo">Registrar Grupo</button>
        <button class="btn btn-lg btn-danger" type="reset" id="cancelar">Terminar</button>
      </div>
    </form>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Institucion</th>
          <th>Encargado</th>
          <th>Usuario</th>
          <th colspan=2>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr
        <?php
        foreach($listar as $l){
          ?>
          <tr>
            <td><?php echo $lista['institucion']; ?></td>
            <td><?php echo $lista['encargado']; ?></td>
            <td><?php echo $lista['usuario']; ?></td>
            <td><button type="button" id="Editar" <i class="fa fa-pencil" name="<?php echo $lista['usuario']; ?>"></i></button></td>
            <td><button type="button" id="Eliminar" <i class="fa fa-eraser" name="<?php echo $lista['usuario']; ?>"></i></button></td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <script src="../js/registrarGrupo.js"></script>

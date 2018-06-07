<?php
session_start();
require_once('../Clases/grupos.php');
$grupos=new Grupos;
$listar=$grupos->listarGrupos();
if($_POST==null){
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
          <th colspan="2">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr
        <?php
        foreach($listar as $l){
          ?>
          <tr>
            <td><?php echo $l['institucion']; ?></td>
            <td><?php echo $l['encargado']; ?></td>
            <td><?php echo $l['usuario']; ?></td>
            <td><button type="button" id="Editar" value="<?php echo $l['institucion']; ?>" grupoEditar="<?php echo $l['institucion']; ?>" usuario="<?php echo $l['usuario']; ?>" encargado="<?php echo $l['encargado']; ?>" password="<?php echo $l['password']; ?>"><i class="fa fa-pencil" data-name="<?php echo $l['usuario']; ?>"></i></button></td>
            <td><button type="button" id="Eliminar" data-eliminarGrupo="<?php echo $l['institucion'] ?>"><i class="fa fa-eraser" name="<?php echo $lista['usuario']; ?>"></i></button></td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <script src="../js/registrarGrupo.js"></script>
  <?php
}
else{
  echo $_POST['grupoEditar'];
  //if para agregar
  if($_POST['grupoAgregar']!=null){
    $resultado=$grupos->agregarGrupo($_POST['grupoAgregar'],$_POST['password'],$_POST['encargado'],$_POST['usuario']);
    $listar=$grupos->listarGrupos();
    ?>
    <div class="col-md-offset-4 col-md-4">
    <form class="card card-container" action="">
      <div class="form-group">
        <h2>Su grupo se ha registrado= <?php echo $resultado['exito']; ?></h2>
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
          <th colspan="2">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr
        <?php
        foreach($listar as $l){
          ?>
          <tr>
            <td><?php echo $l['institucion']; ?></td>
            <td><?php echo $l['encargado']; ?></td>
            <td><?php echo $l['usuario']; ?></td>
            <td><button type="button" id="Editar" value="<?php echo $lista['institucion']; ?>" usuario="<?php echo $lista['usuario']; ?>" encargado="<?php echo $lista['encargado']; ?>" password="<?php echo $lista['password']; ?>"><i class="fa fa-pencil" name="<?php echo $lista['usuario']; ?>"></i></button></td>
            <td><button type="button" id="Eliminar" value="<?php echo $lista['usuario']; ?>"><i class="fa fa-eraser" name="<?php echo $lista['usuario']; ?>"></i></button></td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <script src="../js/registrarGrupo.js"></script>
  <?php
  }
  //if para Editar
  if($_POST['grupoEdi tar']!=null){
    ?>
    <div class="col-md-offset-4 col-md-4">
    <form class="card card-container" action="">
      <div class="form-group">
        <h2>Actualizar Grupo</h2>
        <br>
        <label for="inputEscuela">Instituci&oacute;n</label>
        <input type="text" class="form-control" id="inputEscuela" placeholder="Ingrese el nombre de la instituci&oacute;n" value="<?php echo $_POST['grupoEditar']; ?>">
        <br>
        <label for="inputEncargado">Encargado</label>
        <input type="text" class="form-control" id="inputEncargado" placeholder="Ingrese el nombre del encargado" value="<?php echo $_POST['encargado']; ?>">
        <br>
        <label for="inputUsuario">Usuario</label>
        <input type="text" class="form-control" id="inputUsuario" placeholder="Ingrese el nombre de usuario" value="<?php echo $_POST['usuario']; ?>">
        <br>
        <label for="inputPass">Contrase&ntilde;a</label>
        <input type="password" class="form-control" id="inputPass" placeholder="Escriba la contrase&ntilde;a del grupo" value="<?php echo $_POST['password']; ?>">
        <br>
        <button class="btn btn-lg btn-primary" type="submit" id="modificarGrupo">Modificar Grupo</button>
        <button class="btn btn-lg btn-danger" type="reset" id="cancelar">Cancelar</button>
      </div>
    </form>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Institucion</th>
          <th>Encargado</th>
          <th>Usuario</th>
          <th colspan="2">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr
        <?php
        foreach($listar as $l){
          ?>
          <tr>
            <td><?php echo $l['institucion']; ?></td>
            <td><?php echo $l['encargado']; ?></td>
            <td><?php echo $l['usuario']; ?></td>
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
  <?php
  }
  //eliminar
  if($_POST['grupoEliminar']!=null){
    $resultado=$grupos->eliminarGrupo($_POST['grupoAgregar']);
    ?>
    <div class="col-md-offset-4 col-md-4">
    <form class="card card-container" action="">
      <div class="form-group">
        <h2>Su grupo se ha eliminado= <?php echo $resultado['exito']; ?></h2>
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
          <th colspan="2">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr
        <?php
        foreach($listar as $l){
          ?>
          <tr>
            <td><?php echo $l['institucion']; ?></td>
            <td><?php echo $l['encargado']; ?></td>
            <td><?php echo $l['usuario']; ?></td>
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
  <?php
  }
}
  ?>


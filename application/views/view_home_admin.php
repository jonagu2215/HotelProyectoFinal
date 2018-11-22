<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Login Administrador</title>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/login_admin/home_admin">
      <img src="<?php echo base_url(); ?>images/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
      Administrador
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="<?php echo base_url(); ?>index.php/login_admin/admin_servicios">Servicios<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?php echo base_url(); ?>index.php/login_admin/admin_reservas">Reservas</a>
          <a class="nav-item nav-link" href="<?php echo base_url(); ?>index.php/login_admin/admin_clientes">Clientes</a>
        </div>
      </div>
    </nav>
  </head>
  <body>
    <h1 style=" text-align: center;  margin-top: 50px; margin-bottom: 50px;">Administracion de usuarios del Sistema</h1>
    <a href=""  class="btn btn-primary" data-toggle="modal" data-target="#aAgregar">Agregar</a><br>

    <!--modal agregar-->

    <div class="modal fade" id="aAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

          <form class="" action="<?php echo base_url() ?>index.php/login_admin/agregaUsuario" method="post">

          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="">Usuario</label>
                <input class="form-control" type="text" name="user" value="" placeholder="usuario">
                <label for="">Contraseña</label>
                <input class="form-control" type="text" name="pass" value="" placeholder="contraseña">
                <label for="">Rol del Sistema</label>
                <input class="form-control" type="text" name="rol" value="" placeholder="Rol">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    <table class="table table-hover table-dark"><br>
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">USUARIO</th>
          <th scope="col">CONTRASEÑA</th>
          <th scope="col">ROL</th>
          <th scope="col">----</th>
          <th scope="col">----</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (!empty($usuari)) {
          foreach ($usuari as $fila) {

            ?>
            <tr>
              <th scope="row"><?php echo $fila->id; ?></th>
              <td><?php echo $fila->usuario; ?></td>
              <td><?php echo $fila->contrasena; ?></td>
              <td><?php echo $fila->rol; ?></td>
              <td><a href=""  class="btn btn-primary" data-toggle="modal" data-target="#MModificar<?php echo $fila->id; ?>">Modificar</a></td>
              <td><a href="" class="btn btn-primary" data-toggle="modal" data-target="#MEliminar<?php echo $fila->id; ?>">Eliminar</a></td>
              <td></td>
            </tr>

            <!-- Modal Eliminar-->
            <div class="modal fade" id="MEliminar<?php echo $fila->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ¿Desea eliminar el usuario <?php echo $fila->usuario; ?>?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <a class="btn btn-primary" href="<?php echo base_url() ?>index.php/login_admin/eliminaUsuario/<?php echo $fila->id; ?>">Eliminar</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal Modificar-->
            <div class="modal fade" id="MModificar<?php echo $fila->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <form class="" action="<?php echo base_url() ?>index.php/login_admin/modificarUsuario/<?php echo $fila->id; ?>" method="post">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="">Usuario</label>
                      <input class="form-control" type="text" name="user" value="<?php echo $fila->usuario; ?>">
                      <label for="">Contraseña</label>
                      <input class="form-control" type="text" name="pass" value="<?php echo $fila->contrasena; ?>">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Modificar</button>
                  </div>
                </div>
                </form>
              </div>
            </div>

            <?php
          }
        }

        ?>

      </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

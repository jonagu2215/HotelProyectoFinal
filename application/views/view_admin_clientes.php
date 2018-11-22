<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Clientes</title>
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
    <h1 style=" text-align: center;  margin-top: 50px; margin-bottom: 50px;">Administracion de reservas del Hotel</h1>
    <table class="table table-hover table-dark">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOMBRE CLIENTE</th>
          <th scope="col">CODIGO CLIENTE</th>
          <th scope="col">FECHA INGRESO</th>
          <th scope="col">FECHA SALIDA</th>
          <th scope="col">HABITACION</th>
          <th scope="col">ESTADO</th>
          <th scope="col">----</th>
          <th scope="col">----</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (!empty($cliente)) {
          foreach ($cliente as $fila) {

            ?>
            <tr>
              <th scope="row"><?php echo $fila->id; ?></th>
              <td><?php echo $fila->nombre; ?></td>
              <td><?php echo $fila->codigo_cliente; ?></td>
              <td><?php echo $fila->fecha_ingreso; ?></td>
              <td><?php echo $fila->fecha_salida; ?></td>
              <td><?php echo $fila->Habitacion; ?></td>
              <td><?php echo $fila->Estado; ?></td>
              <td><a href="">Modificar</a></td>
              <td><a href="">Eliminar</a></td>
            </tr>
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

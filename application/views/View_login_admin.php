<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <h1 style=" text-align: center;  margin-top: 50px;">BIENVENIDO</h1>
    <div class="container" style="text-align: center; margin-top: 50px;">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4">

        </div>

        <div class="col-md-4 col-sm-4 col-xs-4">
          <form action="<?php echo base_url(); ?>index.php/login_admin/validadAcceso" method="post">
            <div class="form-group">
              <img width="50%" src="<?php echo base_url(); ?>images/imagenadmin_login.png" alt="">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="user" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your User">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Ingresar</button>
          </form>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-4">

        </div>
      </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

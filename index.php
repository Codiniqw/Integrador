<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="icon" href="img/delivery.png" type="image/png" size="64x64">
  <title>Login SRI </title>
</head>

<body>
  <h1 class="display-3 text-center">Acceso</h1>

  <div class="container container-lg">

    <form action="index.php" method="POST" class="containerform">
      <div class="col text text-center">
        <img src="img/user1.png" alt="no se pudo cargar" width="100px" height="100px" class="mb-2 img-fluid ">
      </div>
      <div class="form-group">
        <input type="text" placeholder="Usuario" name="txtusuario" class="form-control" />
      </div>
      <div class="form-group">
        <input type="password" placeholder="Contraseña" name="txtpass" class="form-control" />
      </div>
      <div class=" col text-center">
        <button type="submit" name="btnEntrar" class="btn btn-success">
          Ingresar
        </button>
      </div>
    </form>
  </div>
</body>
<?php
require("FuncionesBD.php");
if (isset($_POST['btnEntrar'])) {
  $user = $_POST['txtusuario'];
  $pass = $_POST['txtpass'];
  $status = ValidateUser($user, $pass);


  if ($status == 1) {
    echo "<script>alert('Bienvenidos a SRI');</script>";
  } else {
    echo "<script>alert('Contraseña o usuario incorrectos'); window.location= 'index.php';</script>";
  }
}



?>

</html>
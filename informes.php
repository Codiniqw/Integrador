<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informes</title>
  <?php
session_start();
$Usession=$_SESSION['user'];
if ($Usession == null || $Usession=='') {
  echo '<script> alert("inicia session  para poder comenzar"); window.location="index.html"; </script>';
}
 ?>
  <link rel="icon" href="image/delivery.png" type="image/png" size="64x64">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <div class="container col-auto bg-dark">
    <nav class="navbar navbar-expand-lg m-0 p-0 navbar-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand col-0 text-light" href="#">SRI-A</a>
      <div class="collapse navbar-collapse col-auto" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active col-auto">
            <a class="nav-link text-light active text-center" href="#">Informes Administrador</a>
          </li>
          <li class="nav-item col-auto">
            <a class="nav-link text-light text-center" href="registroOP.php">Registrar operador</a>
          </li>
          <li class="nav-item col-auto text-center">
            <a class="nav-link text-light" href="registroUnidad.php">Registrar Unidad</a>
          </li>
          <li class="nav-item col-auto text-center">
            <a class="nav-link text-light" href="asignar_viaje.php">Asignar Viajes</a>
          </li>
          <li class="nav-item col-auto text-center">
            <a class="nav-link text-light" href="BitOperador.php">Informes Operador</a>
          </li>
          <li class="nav-item col-auto text-center">
            <a class="nav-link text-light" href="index.php">Salir</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</head>

<body class="body">
  <div class="container">
    <h2 class=" text-center  text-white">Informes del operador</h2>

  </div>


</div>
</body>

</html>

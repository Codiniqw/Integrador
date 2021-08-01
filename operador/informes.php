<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Informes del operador</title>
    <?php
  session_start();
  $Usession=$_SESSION['user'];
  if ($Usession == null || $Usession=='') {
  echo '<script> alert("inicia session  para poder comenzar"); window.location="index.php"; </script>';
  }
  ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">


</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">Informes-Operador</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="inicioOperador.php">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Operaciones
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbar">
              <li><a class="dropdown-item" href="Bitacora.php">Bitacora</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="informes.php">Informes</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-3" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-primary" type="submit">Buscar</button>
        </form>
        <form class="form-inline me-3 my-3 my-lg-0" action="" method="POST">
        <button type="sumit" name="btncerrar" href="../index.php" class="btn btn-danger">  Cerrar sesion</button>
        </form>

      </div>
    </div>
  </nav>

    <h1 class="display-4 text-center" style="color:white">Informes</h1>
</body>
</html>

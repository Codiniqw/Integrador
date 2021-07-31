<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asignar Viajes</title>
  <?php
session_start();
$Usession=$_SESSION['user'];
if ($Usession == null || $Usession=='') {
  echo '<script> alert("inicia session  para poder comenzar"); window.location="index.php"; </script>';
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
            <a class="nav-link text-light active text-center" href="informes.php">Informes Administrador</a>
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
            <a class="nav-link text-light" href="BitOperador.php">informes Operador</a>
          </li>
          <li class="nav-item col-auto text-right">
            <a class="nav-link text-light" href="index.php">Salir</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</head>

<body class="body">
  <div class="container">
    <h2 class=" text-center  text-white">Asignar Viajes</h2>
    <form action="" class=" p-3 mb-4 form-enviar" id="formAsignarviaje">
      <div class="form-group">
        <label for="Empresaqueenvia" class="mr-0 text-white text-left col-6">Empresa que envia: </label>
        <input type="text" id="Empresaqueenvia" class="form-control-sm float-right" placeholder="Empresa que envia">
      </div>
      <div class="form-group">
        <label for="getti" class="mr-0 text-white text-left col-6">Empresa que recibe: </label>
        <input type="text" id="getti" class="form-control-sm float-right" placeholder="Empresa que recibe">
      </div>
      <div class="form-group">
        <label for="DireccionRe" class="mr-0 text-white text-left col-6">Direccion recoleccion: </label>
        <input type="text" id="DireccionRe" class="form-control-sm float-right" placeholder="Direccion recoleccion">
      </div>
      <div class="form-group">
        <label for="DireccionEn" class="mr-0 text-white text-left col-6">Direccion entrega: </label>
        <input type="text" id="DireccionEn" class="form-control-sm float-right" placeholder="Direccion entrega  ">
      </div>
      <div class="form-group">
        <label for="FechaEn" class="mr-0 text-white text-left col-6">Fecha de entrega: </label>
        <input type="text" id="FechaEn" class="form-control-sm float-right" placeholder="Fecha entrega ">
      </div>
      <div class="form-group">
        <label for="unidad" class="mr-2 text-white text-left col-6">Unidad Asignada: </label>
        <select class=" form-control-sm col-5 float-right" id="unidad">
          <option>unidad 1-276</option>
          <option>B</option>
          <option>C</option>
        </select>
      </div>
      <div class="form-group">
        <label for="Operador" class="mr-2 text-white text-left col-6">Operador Asignado: </label>
        <select class=" form-control-sm col-5 float-right" id="Operador">
          <option>Operador 1-231</option>
          <option>B</option>
          <option>C</option>
        </select>
      </div>
      <div class="form-group ml-1 row">
        <button type="submit" name="bit" class="btn btn-sm btn-light p-1 col-6 float-left " disabled id="bit">Bitacora del viaje
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
            <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
          </svg>
        </button>
      </div>
      <div class="form-check">
        <label class="mr text-white text-left mr-3 " for="gridCheck">En proceso: </label>
        <input class="form-check-input float-right col-2" type="checkbox" id="gridCheck" disabled>
        <label class=" ml-2 form-check-label col-6 text-white" for="gridCheck">
          activo
        </label>
      </div>
      <div class="form-group mb-0">
        <button type="submit" name="Asignar" class="btn btn-sm btn-primary p-1 col-0" id="Asignar">Asignar</button>
      </div>
      <hr>
      <div class="form-group">
        <input class="form-control-sm" type="search" placeholder="Buscar" aria-label="Search">
        <button class=" btn btn-sm btn-success" type="submit" id="Buscar">Buscar</button>
      </div>
      <div class="form-group">
        <button type="submit" name="Eliminar" class="btn btn-sm btn-danger p-1 col-5" id="Eliminar" disabled>Eliminar</button>
        <button type="submit" name="Actualizar" class="btn btn-sm btn-warning p-1 col-5 float-right " id="Actualizar" disabled>Actualizar</button>
      </div>
    </form>
  </div>
  </div>
</body>

</html>

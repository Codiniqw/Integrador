<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitacora operador</title>
    <?php
  session_start();
  $Usession=$_SESSION['user'];
  if ($Usession == null || $Usession=='') {
  echo '<script> alert("inicia session  para poder comenzar"); window.location="../index.php"; </script>';
  }
  ?>
    <link rel="icon" href="img/delivery.png" type="image/png" size="64x64">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <div class="container col-auto bg-dark">
        <nav class="navbar navbar-expand-lg m-0 p-0 navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand col-0 text-light" href="#">SIR-A</a>
            <div class="collapse navbar-collapse col-auto" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item col-lg-3 text-center">
                        <a class="nav-link text-light" href="inicioOperador.php">Regresar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</head>

<body class="body">
    <div class="container">
        <div class="mt-0 text-white">
            <h2 class=" text-center p-0">Llenado de Bitacora</h2>
        </div>
        <div class="row">
            <form action="bitacora.php" method="POST" class="p-3 m-0 col-12 mb-1" id="formBitacora" enctype="multipart/form-data">
                <div class="col-12 p-0 text-center">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Seleccione un viaje
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <!-- Esta seleccion deberá traer los elementos que pertenezcan a este operador y mostrar algo de informacion
                como origen, destino unidad etc que será con la que estará relacionada esta bitacora-->
                        <a class="dropdown-item" href="#">Mex-Qro_Motores</a>
                        <a class="dropdown-item" href="#">Zac-NL_Vacunas</a>
                        <a class="dropdown-item" href="#">Pue-CH_Equipos de computo</a>
                    </div>
                </div>
                    <div class="form-group col-4">
                        <label for="Origen" class="mr-2 text-black text-left">Origen: </label>
                    </div>
                    <div class="form-group col-4">
                        <label for="Destino" class="mr-2 text-black text-left">Destino: </label>
                    </div>
                    <div class="form-group col-4">
                        <label for="Unidad" class="mr-2 text-black text-left">Unidad: </label>
                    </div>
                    <div class="form-group col-4">
                        <label for="Operador" class="mr-2 text-black text-left">Operador: </label>
                    </div>

                    <div class="form-group col-4">
                        <label for="Fecha" class="mr-2 text-white text-left">Fecha: </label>
                        <input type="text" id="Fecha" name="Fecha" class=" form-control-sm float-right" placeholder="Fecha" required>
                    </div>
                    <div class="form-group col-4">
                        <label for="Hora" class="mr-2 text-white text-left">Hora: </label>
                        <input type="text" id="Hora" name="Hora" class=" form-control-sm float-right" placeholder="Hora" required>
                    </div>
                    <div class="form-group col-4">
                        <label for="Accion" class="mr-2 text-white text-left">Acción: </label>
                        <input type="text" id="Accion" name="Accion" class=" form-control-sm float-right" placeholder="Accion realizada" required>
                    </div>
                    <div class="form-group col-4">
                        <label for="Observacion" class="mr-2 text-white text-left">Observación: </label>
                        <input type="text" id="observacion" name="Observacion" class=" form-control-sm float-right" placeholder="Obaservaciones" required>
                    </div>
                </div>
                <tr></tr>
                <div class="col-12">
                </div>
                <div class="form-group mb-0">
                    <button type="submit" name="AgregarUnidad" class="btn btn-sm btn-success p-1 col-0" id="Agregar">agregar</button>
                </div>
                <hr class="hr" />
                <div class="p-0 ml-2 mb-0 row">
                    <input class="form-control mb-0 col-3 mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class=" btn btn-sm btn-success my-2 my-sm-0 float-right mb-0" type="submit" id="Buscar">Buscar</button>
                </div>

            </form>
        </div>
    </div>
</body>


</html>

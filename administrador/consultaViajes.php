<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Viajes Registrados</title>

    
    <?php
    session_start();
    $Usession=$_SESSION['user'];
    if ($Usession == null || $Usession=='') {
    echo '<script> alert("inicia session  para poder comenzar"); window.location="../index.php"; </script>';
    }
    ?>
<link rel="icon" href="image/delivery.png" type="image/png" size="64x64">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/style.css">
  <div class="container col-auto bg-dark">
      <?php include_once "navBar.php" ?>
  </div>

</head>
<body>
    <h1 class="display-4 text-center" style="color:white">Viajes registrados</h1>
    <div class="formViajes">
    <table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">Empresa que envia</th>
      <th scope="col">Empresa que recibe</th>
      <th scope="col">Direccion de recoleccion</th>
      <th scope="col">Dirección de entrega</th>
      <th scope="col">Fecha de entrega</th>
      <th scope="col">Unidad</th>
      <th scope="col">Operador</th>
      <th scope="col">Viaje activo</th>
      <th scope="col">Bitacora</th>
    </tr>
  </thead>
  <tbody>
    <?php
        require '../funcionesBD.php';
        $rsViaje= consultaViajes();

        while ($arrViaje=mysqli_fetch_array($rsViaje)) {
            echo "
            <tr>
            <td>".$arrViaje['empresaEnvia']."</td>
            <td>".$arrViaje['empresaRecibe']."</td>
            <td>".$arrViaje['tipoBien']."</td>
            <td>".$arrViaje['fechaEnvio']."</td>
            <td>".$arrViaje['fechaEntrega']."</td>
            <td>".$arrViaje['idUnidad']."</td>
            <td>".$arrViaje['RFC']."</td>
            <td>".$arrViaje['activo']."</td>
            <td> <a><img src='../img/file.svg'>
            </tr>";
        }
        
        
    ?>
  </tbody>
</table>
</div>
</body>
</html>
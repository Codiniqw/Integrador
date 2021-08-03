<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>operadores Registrados</title>

    
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
    <h1 class="display-4 text-center" style="color:white">Operadores registrados</h1>
    <div class="formViajes">
    <table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">RFC</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Tipo de licencia</th>
      <th scope="col">Número de licencia</th>
      <th scope="col">Vigencia</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Número de seguridad social</th>
    </tr>
  </thead>
  <tbody>
    <?php
        require '../funcionesBD.php';
        $rsOperador= consultaOperadores();

        while ($arrOperador=mysqli_fetch_array($rsOperador)) {
            echo "
            <tr>
            <td>".$arrOperador['RFC']."</td>
            <td>".$arrOperador['nombre']."</td>
            <td>".$arrOperador['apellidos']."</td>
            <td>".$arrOperador['tipo_licencia']."</td>
            <td>".$arrOperador['numero_licencia']."</td>
            <td>".$arrOperador['vigencia']."</td>
            <td>".$arrOperador['password']."</td>
            <td>".$arrOperador['NSS']."</td>
            </tr>";
        }
        
        
    ?>
  </tbody>
</table>
</div>
</body>
</html>
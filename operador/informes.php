<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Informes del operador</title>
  <?php
  session_start();
  $Usession = $_SESSION['user'];
  if ($Usession == null || $Usession == '') {
    echo '<script> alert("inicia session  para poder comenzar"); window.location="../index.php"; </script>';
  }
  ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/style.css">


</head>

<body>
  <?php include_once "navBar.php"; ?>

  <h1 class="display-4 text-center" style="color:white">Informes</h1>
</body>

</html>
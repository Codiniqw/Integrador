<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Inicio Sistema de regitro</title>
    <?php
  session_start();
  $Usession=$_SESSION['user'];
  if ($Usession == null || $Usession=='') {
  echo '<script> alert("inicia session  para poder comenzar"); window.location="index.php"; </script>';
  }
  ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styleInicio.css">


</head>
<body>
  <?php include_once "navBar.php"; ?>

    <h1 class="display-4 text-center" style="color:white">Sitio del operador</h1>

    <div class="row row-cols-1 row-cols-md-3 inicio" >
        <div class="card">
        <h5 class="card-title">DINA</h5>
          <img src="../img/DINA.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
        <div class="card">
            <h5 class="card-title">DAF</h5>
          <img src="../img/DAF.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
        <div class="card">
            <h5 class="card-title">MACK</h5>
          <img src="../img/Mack.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
        </div>
      </div>
</body>
</html>

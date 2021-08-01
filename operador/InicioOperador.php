<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Inicio Sistema de regitro</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styleInicio.css">
    

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">Sistema de registro de operaciones</a>
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
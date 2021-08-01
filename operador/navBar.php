<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">SRI-O</a>
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
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="informes.php">Informes</a></li>
            </ul>
          </li>

        </ul>
        <form class="form-inline me-3 my-3 my-lg-0" action="../index.php" method="POST">
        <button type="sumit" name="btncerrar" class="btn btn-danger">  Cerrar sesion</button>
        </form>

      </div>
    </div>
  </nav>
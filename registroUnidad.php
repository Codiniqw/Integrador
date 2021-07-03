<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Unidades</title>
    <link rel="icon" href="image/delivery.png" type="image/png" size="64x64">
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styleReUnidad.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <div class="container col-auto bg-dark">
        <nav class="navbar navbar-expand-lg m-0 p-0 navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand col-0 text-light" href="#">SIR</a>
            <div class="collapse navbar-collapse col-auto" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active col-sm-3">
                    <a class="nav-link text-light active text-center" href="#">Informes</a>
                </li>
                <li class="nav-item col-lg-5">
                  <a class="nav-link text-light text-center" href="#">Registrar operador</a>
                </li>
                <li class="nav-item col-lg-5 text-center">
                  <a class="nav-link text-light" href="#">Registrar Unidad</a>
                </li>
                <li class="nav-item col-lg-5 text-center">
                  <a class="nav-link text-light" href="#">Asignar Viajes</a>
                </li>
                <li class="nav-item col-lg-4 text-right">
                  <a class="nav-link text-light" href="#">Salir</a>
                </li>
              </ul>
            </div>
          </nav>
    </div>
</head>
<body class="body">
    <div class="container">
        <div class="mt-0 text-white">
            <h2 class=" text-center p-0">Registro de Unidades</h2>
        </div>
        <div class="row">
            <form action="" class="p-3 m-0 col-12">
                <div class="col-12 p-0 text-center">
                    <div class="pt-5 col-4 float-right">
                        <div class=" form-group row-1 col-1 pl-5 ml-lg-5">
                            <img src="/image/delivery.png" width="150px" height="150px" class="" alt=" no se ha podido cargar la imagen">
                        </div>
                        <div class="form-group row-1 pt-2 text-white">
                            <label for="picture">Agregar imagen: </label>
                            <input type="file" class="form-control bg-transparent text-white" id="picture">
                        </div>
                    </div>
                    <div class="form-group col-4">
                        <label for="Marca" class="mr-2 text-white text-left">Marca: </label>
                        <input type="text" id="Marca" class=" form-control-sm float-right" placeholder="Marca">
                    </div>
                    <div class="form-group col-4">
                        <label for="Modelo" class="mr-2 text-white text-left">Modelo: </label>
                        <input type="text" id="Modelo" class=" form-control-sm float-right" placeholder="Modelo">
                    </div>
                    <div class="form-group col-4">
                        <label for="Placas" class="mr-2 text-white text-left">Placas: </label>
                        <input type="text" id="Placas" class=" form-control-sm float-right" placeholder="Placas">
                    </div>
                    <div class="form-group col-4">
                        <label for="Identificador" class="mr-2 text-white text-left">Identificador: </label>
                        <input type="text" id="Identificador" class=" form-control-sm float-right" placeholder="Identificador">
                    </div>
                    <div class="form-group col-4">
                        <label for="NumSerie" class="mr-2 text-white text-left">Num. Serie: </label>
                        <input type="text" id="NumSerie" class=" form-control-sm float-right" placeholder="Num.  Serie">
                    </div>
                    <div class="form-group col-4">
                        <label for="ConfiguracionEje" class="mr-2 text-white text-left">Configuracion de ejes: </label>
                        <input type="text" id="ConfiguracionEje" class=" form-control-sm float-right" placeholder="Configuracion de ejes">
                    </div>
                    <div class="form-group col-4">
                        <label for="Largo" class="mr-2 text-white text-left">Largo: </label>
                        <input type="text" id="Largo" class=" form-control-sm float-right" placeholder="Largo">
                    </div>
                    <div class="form-group col-4">
                        <label for="Alto" class="mr-2 text-white text-left">Alto: </label>
                        <input type="text" id="Alto" class=" form-control-sm float-right" placeholder="Alto">
                    </div>
                    <div class="form-group col-4">
                        <label for="Alto" class="mr-2 text-white text-left">Alto: </label>
                        <input type="text" id="Alto" class=" form-control-sm float-right" placeholder="Alto">
                    </div>
                    <div class="form-group col-4">
                        <label for="Ancho" class="mr-2 text-white text-left">Ancho: </label>
                        <input type="text" id="Ancho" class=" form-control-sm float-right" placeholder="Ancho">
                    </div>
                    <div class="form-group col-4">
                        <label for="PesoB" class="mr-2 text-white text-left">Peso bruto Maximo: </label>
                        <input type="text" id="PesoB" class=" form-control-sm float-right" placeholder="Peso bruto Maximo">
                    </div>
                    <div class="col-2 pt-0">
                        <div class="form-check">
                            <label class="mr-2 text-white text-left " for="gridCheck">Refrigerado: </label>
                          <input class="form-check-input float-right col-4" type="checkbox" id="gridCheck">
                          <label class="form-check-label col-3 text-white" for="gridCheck">
                            Si
                          </label>
                        </div>
                      </div>
                </div> 
                <div class="col-12">
                </div>
                <div class="form-group mb-0">
                    <button type="submit" name="Agregar" class="btn btn-sm btn-outline-primary p-1 col-0" id="Agregar">agregar</button>
                    <button type="submit" name="Eliminar" class="btn btn-sm btn-outline-danger p-1" id="Eliminar">Eliminar</button>
                    <button type="submit" name="Actualizar" class="btn btn-sm btn-outline-warning p-1" id="Actualizar">Actualizar</button>
                </div> 
                <hr>
                <div class="p-0 ml-2 mb-0 row">
                    <input class="form-control mb-0 col-3 mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class=" btn btn-sm btn-outline-success my-2 my-sm-0 float-right mb-0" type="submit" id="Buscar">Buscar</button>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>
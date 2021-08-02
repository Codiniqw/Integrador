<!DOCTYPE html>
<html lang="es-MX">
git
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro Operadores</title>
  <link rel="icon" href="../img/delivery.png" type="image/png" size="64x64" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/style.css">
  <div class="container col-auto bg-dark">
    <?php include_once "navBar.php" ?>
  </div>
</head>

<body>
  <div class="container">
    <div class="mt-0 text-white">
      <h2 class="text-center p-0">Registro de Operadores</h2>
    </div>
    <div class="row">
      <?php
      require "../FuncionesBD.php";
      $RFC = $_GET['RFC'];
      $consulta = busquedaOperador($RFC);
      $datos = mysqli_fetch_array($consulta);
      if ($datos['RFC'] == $RFC) {
        echo " <form action='registroOP.php' method='POST' enctype='multipart/form-data' class='p-3 m-0 col-12' id='formregistroOP'>
        <div class='col-12 p-0'>
          <div class='pt-5 col-4 float-right'>
            <div class='form-group row-1 col-1 pl-5 ml-lg-5'>
              <img src='../OperadoresIMG/{$datos['Foto']}' width='150px' height='150px' class='' alt=' no se ha podido cargar la imagen' />
            </div>
            <div class='form-group row-1 pt-2 text-white'>
              <label for='picture'>Agregar imagen: </label>
              <input type='file' name='picture' size='20' class='form-control bg-transparent text-white' id='picture'/>
              <input type='hidden' name='respaldo' value='../OperadoresIMG/{$datos['Foto']}'>
            </div>
          </div>
          <div class='form-group col-4'>
            <label for='Nombre' class='mr-2 text-white text-left'>Nombre:
            </label>
            <input type='text' value='{$datos['nombre']}'  id='Nombre' name='Nombre' class='form-control-sm float-right' placeholder='Nombre' required />
          </div>
          <div class='form-group col-4'>
            <label for='Apellidos' class='mr-2 text-white text-left'>Apellidos:
            </label>
            <input type='text' id='Apellidos'value='{$datos['apellidos']}'  name='Apellidos' class='form-control-sm float-right' placeholder='Apellidos' required />
          </div>
          <div class='form-group col-4'>
            <label for='NSS' class='mr-2 text-white text-left'>NSS: </label>
            <input type='text' id='NSS' value='{$datos['NSS']}' name='NSS' class='form-control-sm float-right' placeholder='NSS' required />
          </div>
          <div class='form-group col-4'>
            <label for='RFC' class='mr-2 text-white text-left'>RFC: </label>
            <input type='text' id='RFC' name='RFC' value='{$datos['RFC']}'  class='form-control-sm float-right' placeholder='RFC' required />
          </div>
          <div class='form-group col-4'>
            <label for='NumLicencia' class='mr-2 text-white text-left'>Num. Licencia:
            </label>
            <input type='text' id='NumLicencia' value='{$datos['numero_licencia']}' name='NumLicencia' class='form-control-sm float-right' placeholder='Num. Licencia' required />
          </div>
          <div class='form-group col-4'>
            <label for='Vigencia' class='mr-2 text-white text-left'>Vigencia:
            </label>
            <input type='date' id='Vigencia' value='{$datos['vigencia']}' name='Vigencia' class='form-control-sm float-right' placeholder='Vigencia' required />
          </div>
          <div class='form-group col-4'>
            <label for='tipo' class='mr-2 text-white text-left'>Tipo licencia:
            </label>
            <select class='form-control-sm col-6 float-right' value='{$datos['tipo_licencia']}' name='tipo' id='exampleFormControlSelect1' requiered>
              <option>A</option>
              <option>B</option>
              <option>C</option>
            </select>
          </div>
          <div class='form-group col-4'>
            <label for='password' class='mr-2 text-white text-left'>Contraseña:
            </label>
            <input type='password' id='password' value='{$datos['password']}' name='password' class='form-control-sm float-right' placeholder='Contraseña' />
          </div>
          <div class='form-group col-4'>
            <label for='ConPassword' class='mr-2 text-white text-left'>Confirmar contraseña:
            </label>
            <input type='password' id='ConPassword' value='{$datos['password']}' class='form-control-sm float-right' name='confirm_password' placeholder='Confirmar contraseña' />
          </div>
        </div>

        <div class='col-12'></div>
        <div class='form-group mb-0'>
          <button type='submit' name='Eliminar' class='btn btn-sm btn-danger p-1' id='Eliminar' >
            Eliminar
          </button>
          <button type='submit' name='Actualizar' class='btn btn-sm btn-success p-1' id='Actualizar' >
            Actualizar
          </button>
          <button type='submit' name='Cancelar' class='btn btn-sm btn-warning p-1' id='Cancelar' >
            Cancelar
          </button>
        </div>
        <hr class='hr' />
        <div class='p-0 ml-2 mb-0 row'>
          <input class='form-control mb-0 col-3 mr-sm-2' type='search' name='buscador' placeholder='Buscar Operador(RFC)' aria-label='Search' />
          <button class='btn btn-sm btn-primary my-2 my-sm-0 float-right mb-0' name='buscarOP' onclick='buscarOperador()' type='button' id='Buscar'>
            Buscar
          </button>
        </div>
      </form>";
      } else {
        echo "<script>alert('No se ha encontrado registro');window.location='registroOP.php'</script>";
      }
      ?>
    </div>
  </div>
  <script src="../js/buscar.js"></script>
</body>
</html>
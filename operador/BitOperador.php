<!DOCTYPE html>
<html lang="es-MX">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informes del Operador</title>
    <link rel="icon" href="../img/delivery.png" type="image/png" size="64x64" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="../css/style.css" />
    <div class="container col-auto bg-dark">
      <nav class="navbar navbar-expand-lg m-0 p-0 navbar-light">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand col-0 text-light" href="#">SRI-O</a>
        <div class="collapse navbar-collapse col-auto" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active col-12">
              <a class="nav-link text-light active text-center" href="#">Inicio</a>
            </li>
            <li class="nav-item col-12 text-center">
              <a class="nav-link text-light" href="informes.php">Informes</a>
            <li class="nav-item col-12 text-center">
              <a class="nav-link text-light" href="index.php">Salir</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </head>
  <body>
    <div class="container">
      <h2 class="text-center text-white">Informes del operador</h2>
      <div class="p-2 text-white text-center mb-6" id="encuadre">
        <div class="row">
          <div class="datos col-4 float-left">
            <h3>datos</h3>
            <img
              src="../img/user.png"
              width="40%"
              height="40%"
              class="row-3"
              alt=" no se pudo argar imagen"
            />
            <div class="row-3 border border-white rounded ml-5 mr-5 mt-3 p-1">
              <p>
                nombre: Juan Perez <br />Matricula: JP82345L2 <br />Licencia:
                LM5743254 <br />Tipo: B
              </p>
            </div>
          </div>
          <div class="calendario col-8 float-right">
            <h3>calendarios</h3>
            <div class="col-6 float-right">
              <div id="cal">
                <div class="header">
                  <span class="left button" id="prev"> &lang; </span>
                  <span class="left hook"></span>
                  <span class="month-year" id="label"> June 2021 </span>
                  <span class="right hook"></span>
                  <span class="right button" id="next"> &rang; </span>
                </div>
                <table id="days">
                  <td>sun</td>
                  <td>mon</td>
                  <td>tue</td>
                  <td>wed</td>
                  <td>thu</td>
                  <td>fri</td>
                  <td>sat</td>
                </table>
                <div id="cal-frame">
                  <table class="curr">
                    <tbody>
                      <tr>
                        <td class="nil"></td>
                        <td class="nil"></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td class="today">11</td>
                        <td>12</td>
                      </tr>
                      <tr>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                        <td>19</td>
                      </tr>
                      <tr>
                        <td>20</td>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                        <td>25</td>
                        <td>26</td>
                      </tr>
                      <tr>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td>30</td>
                        <td class="nil"></td>
                        <td class="nil"></td>
                        <td class="nil"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-6 float-left">
              <div id="cal">
                <div class="header">
                  <span class="left button" id="prev"> &lang; </span>
                  <span class="left hook"></span>
                  <span class="month-year" id="label"> June 2021 </span>
                  <span class="right hook"></span>
                  <span class="right button" id="next"> &rang; </span>
                </div>
                <table id="days">
                  <td>sun</td>
                  <td>mon</td>
                  <td>tue</td>
                  <td>wed</td>
                  <td>thu</td>
                  <td>fri</td>
                  <td>sat</td>
                </table>
                <div id="cal-frame">
                  <table class="curr">
                    <tbody>
                      <tr>
                        <td class="nil"></td>
                        <td class="nil"></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td class="today">11</td>
                        <td>12</td>
                      </tr>
                      <tr>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                        <td>19</td>
                      </tr>
                      <tr>
                        <td>20</td>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                        <td>25</td>
                        <td>26</td>
                      </tr>
                      <tr>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td>30</td>
                        <td class="nil"></td>
                        <td class="nil"></td>
                        <td class="nil"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tabla row ml-1 mr-1 mb-0">
          <h3 class="col-12">Informe(Fecha de inicio - Fecha fin)</h3>
          <table class="table text-white table-bordered table-hover table-dark">
            <thead>
              <tr>
                <th scope="col">Origen</th>
                <th scope="col">Destino</th>
                <th scope="col">Fecha Salida</th>
                <th scope="col">Fecha entrega</th>
                <th scope="col">Concluido</th>
                <th scope="col">Bitacora</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Queretaro</th>
                <td>Celaya</td>
                <td>01/01/2020</td>
                <td>02/02/2020</td>
                <td>
                  <input
                    type="checkbox"
                    id="vehicle3"
                    name="vehicle3"
                    value="Boat"
                  />
                </td>
                <td>
                  <button
                    type="submit"
                    name="bit"
                    class="btn btn-sm btn-outline-light"
                    id="bit"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="20"
                      fill="currentColor"
                      class="bi bi-archive-fill"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"
                      />
                    </svg>
                  </button>
                </td>
              </tr>
              <tr>
                <th scope="row">Queretaro</th>
                <td>CDMX</td>
                <td>01/01/2020</td>
                <td>02/02/2020</td>
                <td>
                  <input
                    type="checkbox"
                    id="vehicle3"
                    name="vehicle3"
                    value="Boat"
                  />
                </td>
                <td>
                  <button
                    type="submit"
                    name="bit"
                    class="btn btn-sm btn-outline-light"
                    id="bit"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="20"
                      fill="currentColor"
                      class="bi bi-archive-fill"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"
                      />
                    </svg>
                  </button>
                </td>
              </tr>
              <tr>
                <th scope="row">Queretaro</th>
                <td>CD Juarez</td>
                <td>01/01/2020</td>
                <td>02/02/2020</td>
                <td>
                  <input
                    type="checkbox"
                    id="vehicle3"
                    name="vehicle3"
                    value="Boat"
                  />
                </td>
                <td>
                  <button
                    type="submit"
                    name="bit"
                    class="btn btn-sm btn-outline-light"
                    id="bit"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="20"
                      fill="currentColor"
                      class="bi bi-archive-fill"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"
                      />
                    </svg>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>

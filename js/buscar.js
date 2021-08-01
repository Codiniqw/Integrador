
  function buscarOperador() {
    var input = document.getElementById("buscador");
    var valor = input.value;

    window.location=`buscarUnidad.php?RFC=${valor}`
  }

  function buscarUnidad() {
    var boton = document.getElementById("BuscarU");

    boton.addEventListener("click", () => {
      var input = document.getElementById("buscador");
      var valor = input.value;

      alert("El valor del campo es:" + valor);
    });
  }


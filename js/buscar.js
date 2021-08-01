function buscarOperador() {
  function buscarOperador() {
    var boton = document.getElementById("Buscar");

    boton.addEventListener("click", () => {
      var input = document.getElementById("buscador");
      var valor = input.value;

      alert("El valor del campo es:" + valor);
    });
  }

  function buscarUnidad() {
    var boton = document.getElementById("BuscarU");

    boton.addEventListener("click", () => {
      var input = document.getElementById("buscador");
      var valor = input.value;

      alert("El valor del campo es:" + valor);
    });
  }
}


  function buscarOperador() {
    var input = document.getElementById("buscador");
    var valor = input.value;

    window.location=`buscarOperador.php?RFC=${valor}`;
  }

 function buscarUnidad() {
    var input = document.getElementById("buscarUnidad");
    var valor = input.value;

    window.location=`buscarUnidad.php?NumSerie=${valor}`;
  }


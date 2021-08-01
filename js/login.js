function admin(){
    var boton = document.getElementById("btnadmin");
    boton.addEventListener("click", () => {
      document.getElementById("admin").style.display="block";
      document.getElementById("operador").style.display="none";
    });
}
console.log("inflable");

$(document).ready(function () {
  document
    .getElementById("boton_cotizar")
    .addEventListener("click", getInflable1, false);
  document
    .getElementById("boton_cotizar")
    .addEventListener("click", getInflable2, false);
  document
    .getElementById("boton_cotizar")
    .addEventListener("click", getInflable3, false);
  document
    .getElementById("boton_cotizar")
    .addEventListener("click", totalGral, false);

  var totalT = 0;
  function getInflable1() {
    if ($("#tipoInflable1").prop("checked")) {
      var precioInflable = document.getElementById(
        "span_precio_inflable1"
      ).textContent;
      var tipoInflable = document.getElementById("span_inflable1").textContent;
      console.log("checked");
      //funcion para quitar el $ de el string
      var auxC = precioInflable;
      var aux = auxC.slice(2);
      //Funcion para cambiar a int el precio
      var parsePrecioInflable = parseInt(aux);

      var sub = parsePrecioInflable;
      $("#totalInflable1").html("" + tipoInflable + " es un total de: " + sub);

      totalT = sub+ totalT;
    } else {
      console.log("nada");
      $("#totalInflable1").html("");
    }
  }

  function getInflable2() {
    /* Para obtener el valor de las mesas */

    if ($("#tipoInflable2").prop("checked")) {
      var precioInflable = document.getElementById(
        "span_precio_inflable2"
      ).textContent;
      var tipoInflable = document.getElementById("span_inflable2").textContent;

      //funcion para quitar el $ de el string
      var auxC = precioInflable;
      var aux = auxC.slice(2);
      //Funcion para cambiar a int el precio
      var parsePrecioInflable = parseInt(aux);

      var sub = parsePrecioInflable;
      $("#totalInflable2").html("" + tipoInflable + " es un total de: " + sub);

      totalT=sub+totalT;
    } else {
      console.log("nada");
      $("#totalInflable2").html("");
    }
  }

  function getInflable3() {
    /* Para obtener el valor de las mesas */

    if ($("#tipoInflable3").prop("checked")) {
      var precioInflable = document.getElementById(
        "span_precio_inflable3"
      ).textContent;
      var tipoInflable = document.getElementById("span_inflable3").textContent;

      //funcion para quitar el $ de el string
      var auxC = precioInflable;
      var aux = auxC.slice(2);
      //Funcion para cambiar a int el precio
      var parsePrecioInflable = parseInt(aux);

      var sub = parsePrecioInflable;
      $("#totalInflable3").html("" + tipoInflable + " es un total de: " + sub);

      totalT=sub+totalT;
    } else {
      console.log("nada");
      $("#totalInflable3").html("");
    }
  }

  function totalGral() {
    console.log("clasee: " + totalT);
    $("#totalINF").html(totalT);
  }
});

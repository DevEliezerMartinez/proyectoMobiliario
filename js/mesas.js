console.log("entro a mesas");

$(document).ready(function () { 
  

  document.getElementById("boton_cotizar").addEventListener("click", getMesas1 , false);
  document.getElementById("boton_cotizar").addEventListener("click", getMesas2 , false);
  document.getElementById("boton_cotizar").addEventListener("click", getMesas3 , false);
  document.getElementById("boton_cotizar").addEventListener("click", totalGral , false);



var totalT=0;
  function getMesas1() {
    /* Para obtener el valor de las mesas */
    var cantidadMesas = document.getElementById("c_mesa_cuadrada").value;
    var precioMesas = document.getElementById("span_precio_mesa1").textContent;
    var tipoMesas = document.getElementById("span_tipo_mesa1").textContent;
    
    //funcion para quitar el $ de el string
    var auxC=precioMesas;
    var aux = auxC.slice(2);
    //Funcion para cambiar a int el precio
    var parsePrecioMesas= parseInt(aux);
    
    
  
    if(cantidadMesas!=0){
      
      var sub = (cantidadMesas*parsePrecioMesas);
      $("#totalCotizacion_Mesa1").html("" + cantidadMesas  +" "+tipoMesas+" a un precio de: "+parsePrecioMesas +" es un total de: "+sub);
     
      
      totalT=sub;
  

    }else{
      $("#totalCotizacion_Mesa1").html("");

    }
    
  }
 
  function getMesas2() {
    /* Para obtener el valor de las mesas */

    var cantidadMesas = document.getElementById("c_mesas_redondas").value;
    var precioMesas = document.getElementById("span_precio_mesa2").textContent
    var tipoMesas = document.getElementById("span_tipo_mesa2").textContent;


    //funcion para quitar el $ de el string
    var auxC=precioMesas;
    var aux = auxC.slice(2);
    //Funcion para cambiar a int el precio
    var parsePrecioMesas= parseInt(aux);
    
    

    if(cantidadMesas!=0){
      var sub = (cantidadMesas*parsePrecioMesas);
      $("#totalCotizacion_Mesa2").html("" + cantidadMesas  +" "+tipoMesas+" a un precio de: "+parsePrecioMesas +" es un total de: "+sub);
     
      totalT=sub+totalT;
      

    }else{
      $("#totalCotizacion_Mesa2").html("");

    }

    
  }

  

  function getMesas3() {
    /* Para obtener el valor de las mesas */

    var cantidadMesas = document.getElementById("c_mesas_rectangulares").value;
    var precioMesas = document.getElementById("span_precio_mesa3").textContent
    var tipoMesas = document.getElementById("span_tipo_mesa3").textContent;

    //funcion para quitar el $ de el string
    var auxC=precioMesas;
    var aux = auxC.slice(2);
    //Funcion para cambiar a int el precio
    var parsePrecioMesas= parseInt(aux);
    
    
   
    

    if(cantidadMesas!=0){
      var sub = (cantidadMesas*parsePrecioMesas);
      $("#totalCotizacion_Mesa3").html("" + cantidadMesas  +" "+tipoMesas+" a un precio de: "+parsePrecioMesas +" es un total de: "+sub);
      console.log("before");
     if (sub!=totalT) {
       console.log("es igual");
      totalT=sub+totalT;
     }
      
      
      

    }else{
      $("#totalCotizacion_Mesa3").html("");

    }

    
  }


  

  function totalGral()
{
  console.log("clasee: "+totalT);
  $("#totalTM").html(totalT);
}



  


});

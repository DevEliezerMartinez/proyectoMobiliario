console.log("entro a sillas");

$(document).ready(function () { 
  

  document.getElementById("boton_cotizar").addEventListener("click", getSillas1 , false);
  document.getElementById("boton_cotizar").addEventListener("click", getSillas2 , false);
  document.getElementById("boton_cotizar").addEventListener("click", getSillas3 , false);
  document.getElementById("boton_cotizar").addEventListener("click", getSillas4 , false);
  document.getElementById("boton_cotizar").addEventListener("click", totalGral , false);



var totalT=0;
  function getSillas1() {
    /* Para obtener el valor de las mesas */
    var cantidadSillas = document.getElementById("c_sillas_normales").value;
    var precioSillas = document.getElementById("span_precio_silla1").textContent;
    var tipoSilla = document.getElementById("span_tipo_silla1").textContent;
    
    //funcion para quitar el $ de el string
    var auxC=precioSillas;
    var aux = auxC.slice(2);
    //Funcion para cambiar a int el precio
    var parsePrecioSillas= parseInt(aux);
    
    
  
    if(cantidadSillas!=0){
      
      var sub = (cantidadSillas*parsePrecioSillas);
      $("#totalCotizacion_Silla1").html("" + cantidadSillas  +" "+tipoSilla+" a un precio de: "+parsePrecioSillas +" es un total de: "+sub);
     
      
      totalT=sub;
  

    }else{
      $("#totalCotizacion_Silla1").html("");

    }
    
  }
 
  function getSillas2() {
    /* Para obtener el valor de las mesas */

    var cantidadSillas = document.getElementById("c_sillas_plegables").value;
    var precioSillas = document.getElementById("span_precio_silla2").textContent
    var tipoSilla = document.getElementById("span_tipo_silla2").textContent;


    //funcion para quitar el $ de el string
    var auxC=precioSillas;
    var aux = auxC.slice(2);
    //Funcion para cambiar a int el precio
    var parsePrecioSillas= parseInt(aux);
    
    

    if(cantidadSillas!=0){
      var sub = (cantidadSillas*parsePrecioSillas);
      $("#totalCotizacion_Silla2").html("" + cantidadSillas  +" "+tipoSilla+" a un precio de: "+parsePrecioSillas +" es un total de: "+sub);
     
      totalT=sub+totalT;
      

    }else{
      $("#totalCotizacion_Silla2").html("");

    }

    
  }

  

  function getSillas3() {
    /* Para obtener el valor de las mesas */

    var cantidadSillas = document.getElementById("c_sillas_sin").value;
    var precioSillas = document.getElementById("span_precio_silla3").textContent
    var tipoSilla = document.getElementById("span_tipo_silla3").textContent;

    //funcion para quitar el $ de el string
    var auxC=precioSillas;
    var aux = auxC.slice(2);
    //Funcion para cambiar a int el precio
    var parsePrecioSillas= parseInt(aux);
    
    
   
    

    if(cantidadSillas!=0){
      var sub = (cantidadSillas*parsePrecioSillas);
      $("#totalCotizacion_Silla3").html("" + cantidadSillas  +" "+tipoSilla+" a un precio de: "+parsePrecioSillas +" es un total de: "+sub);
     
      totalT=sub+totalT;
      
      

    }else{
      $("#totalCotizacion_Silla3").html("");

    }

    
  }


  function getSillas4() {
    /* Para obtener el valor de las mesas */

    var cantidadSillas = document.getElementById("c_sillas_tiffany").value;
    var precioSillas = document.getElementById("span_precio_silla4").textContent
    var tipoSilla = document.getElementById("span_tipo_silla4").textContent;

     //funcion para quitar el $ de el string
     var auxC=precioSillas;
     var aux = auxC.slice(2);
     //Funcion para cambiar a int el precio
     var parsePrecioSillas= parseInt(aux);
   

    if(cantidadSillas!=0){
      var sub = (cantidadSillas*parsePrecioSillas);
      $("#totalCotizacion_Silla4").html("" + cantidadSillas  +" "+tipoSilla+" a un precio de: "+parsePrecioSillas +" es un total de: "+sub);
     
      totalT=sub+totalT;
      
      


    }else{
      $("#totalCotizacion_Silla4").html("");

    }

    

    
  }

  function totalGral()
{
  console.log("clasee: "+totalT);
  $("#totalT").html(totalT);
}



  


});

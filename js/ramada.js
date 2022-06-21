console.log("ramada");
$(document).ready(function(){

   

    document.getElementById("boton_cotizar").addEventListener("click",getRamada1, false);
    document.getElementById("boton_cotizar").addEventListener("click",getRamada2, false);
    document.getElementById("boton_cotizar").addEventListener("click",getRamada3, false);
    document.getElementById("boton_cotizar").addEventListener("click",totalGral, false);
    

   
    var totalT=0;
    function getRamada1() {
     

        if( $('#tipoRamada1').prop('checked') ) {
            var  precioRamada = document.getElementById("span_precio_ramada1").textContent;
      var tipoRamada = document.getElementById("span_ramada1").textContent;
      
      //funcion para quitar el $ de el string
      var auxC= precioRamada;
      var aux = auxC.slice(2);
      //Funcion para cambiar a int el precio
      var parsePrecioRamada= parseInt(aux);
      
        
        var sub = (parsePrecioRamada);
        $("#totalRamada1").html(""+tipoRamada +" es un total de: "+sub);
       
        
        totalT=sub;
    
         
           
        }else{
            console.log("nada");
            $("#totalRamada1").html("");

        }
      
    }
   
    function getRamada2() {
      /* Para obtener el valor de las mesas */

      if( $('#tipoRamada2').prop('checked') ) {
        var  precioRamada = document.getElementById("span_precio_ramada2").textContent;
  var tipoRamada = document.getElementById("span_ramada2").textContent;
  
  //funcion para quitar el $ de el string
  var auxC= precioRamada;
  var aux = auxC.slice(2);
  //Funcion para cambiar a int el precio
  var parsePrecioRamada= parseInt(aux);
  
    
    var sub = (parsePrecioRamada);
    $("#totalRamada2").html(""+tipoRamada +" es un total de: "+sub);
   
    
    totalT=sub+totalT;

     
       
    }else{
        console.log("nada");
        $("#totalRamada2").html("");

    }
        
      
    }

    function getRamada3() {
        /* Para obtener el valor de las mesas */
  
        if( $('#tipoRamada3').prop('checked') ) {
            var  precioRamada = document.getElementById("span_precio_ramada3").textContent;
      var tipoRamada = document.getElementById("span_ramada3").textContent;
      
      //funcion para quitar el $ de el string
      var auxC= precioRamada;
      var aux = auxC.slice(2);
      //Funcion para cambiar a int el precio
      var parsePrecioRamada= parseInt(aux);
      
        
        var sub = (parsePrecioRamada);
        $("#totalRamada3").html(""+tipoRamada +" es un total de: "+sub);
       
        
        totalT=sub+totalT;
    
         
           
        }else{
            console.log("nada");
            $("#totalRamada3").html("");
    
        }
            
    
        
      }

      function totalGral()
      {
        console.log("clasee: "+totalT);
        $("#totalRamada").html(totalT);
      }

     
       

 });

 function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('al')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}

 


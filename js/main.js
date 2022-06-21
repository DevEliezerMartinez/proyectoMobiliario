$(document).ready(function(){

   
    document.getElementById("sillaBox").addEventListener("click",mostrarSillas, false);
    document.getElementById("mesaBox").addEventListener("click",mostrarMesas, false);
    document.getElementById("ramadaBox").addEventListener("click",mostrarRamada, false);
    document.getElementById("inflableBox").addEventListener("click",mostrarInflable, false);
    document.getElementById("seleccionar_btn").addEventListener("click",btncotizar, false);
    document.getElementById("boton_cotizar").addEventListener("click",cotizacionFinal, false);
/*     document.getElementById("boton_cotizar").addEventListener("click",Desaparecer, false);
 */

    function mostrarSillas(){
     $(".sillasClass").toggleClass("box_block");
     $(".card-sillas").toggleClass("box_card_block");
    }

    function mostrarMesas(){
        $(".mesasClass").toggleClass("box_block");
        $(".card-mesas").toggleClass("box_card_block");
       }

       function mostrarRamada(){
        $(".ramadaClass").toggleClass("box_block");
        $(".card-ramadas").toggleClass("box_card_block");
       }

       function mostrarInflable(){
        $(".inflableClass").toggleClass("box_block");
        $(".card_inflable").toggleClass("box_card_block");
       }
       
       function btncotizar(){

        
            $(".container_boxes").addClass("container_block");
            
            
            
       
       
       
       }
       
       function cotizacionFinal(){
           console.log("finalcotizacion");
           var totalSillas = document.getElementById("totalT").textContent;
           var totalMesas = document.getElementById("totalTM").textContent;
           var totalRamadas = document.getElementById("totalINF").textContent;
           var totalInflables = document.getElementById("totalRamada").textContent;
           
           var parsePrecioSillas= parseInt(totalSillas);
           var parsePrecioMesas= parseInt(totalMesas);
           var parsePrecioRamadas= parseInt(totalRamadas);
           var parsePrecioInflable= parseInt(totalInflables);
           var sumaT = parsePrecioSillas+parsePrecioMesas+parsePrecioRamadas+parsePrecioInflable;
            console.log(sumaT);
            $("#TotalGral").html(sumaT);
            document.getElementById("TotalGral").value = sumaT;
          
       }
       

      /*  function Desaparecer(){
        $(".reserva").addClass("reservarDesaparece");

       } */

       

       

 });


 



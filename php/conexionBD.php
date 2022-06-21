<?php 

/* $dbhost="";
  $dbUsuario="";
  $dbPassword="";
  $dbNombre="";
  $conexion="";
  $consulta="";
  $fila="";
  */
/* 
    global $dbhost;
    global $dbUsuario;
    global $dbPassword;
    global $dbNombre;
    global $conexion;
  */
    $dbhost="localhost";
     $dbUsuario="root";
     $dbPassword="";
     $dbNombre="proyecto";
    
     $conexion=mysqli_connect($dbhost,$dbUsuario, $dbPassword,$dbNombre);
     
 

/*  function nombreSilla1(){
     $consulta1="";
    global $conexion;
    $fila1="";

    $consulta1="SELECT Tipo_Producto FROM `productos` WHERE Id_Producto = '2'";
    $resultado1= $conexion-> query($consulta1);
    $fila1=mysqli_fetch_row($resultado1);
    echo($fila1[0]);
 }

 */
?>
<?php
session_start();
session_id();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/styleReservaciones.css" />
  <title>Mis reservaciones</title>
</head>

<body>
  <header>
    <div class="logo">
      <img src="../img/My project.png" alt="" />
    </div>

    <div class="container_Derecha">
      <div class="menu">
        <ul>
          <a href="../main/cotizaciones.php">
            <li>Cotizaciones</li>
          </a>
          <a href="../main/galeria.html">
            <li>Galeria</li>
          </a>
        </ul>

        <div class="home">
          <a href="../main/index.php"><img src="../img/home.svg" alt="" /></a>
        </div>

        <div class="admin">

          <img src="../img/login.svg" alt="">
          <div class="dropdown">

            <button class="dropbtn"><?php echo  $_SESSION["nameUsuario"]; ?></button>
            <div class="dropdown-content">

              <a href="../php/cerrarSesion.php">Cerrar sesion</a>
              <a href="../main/sillas.html">Perfil</a>

            </div>
          </div>



        </div>
      </div>
    </div>
  </header>

  <main>
    <div class="principal">
      <h2>Reservaciones</h2>
      <div class="phpSection">
        <?php include('../php/conexionBD.php');
        //función para conexión
        /* $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $BD = "proyecto"; */
        $mysqli = new mysqli($dbhost, $dbUsuario, $dbPassword, $dbNombre);
        $mysqli->set_charset("utf8");

        $con = "SELECT `Id_Pedido`, `Descripcion`,`fecha_Pedido`,`fecha_Recoger`, `Total` FROM `pedidos` WHERE Id_Cliente =".$_SESSION['user_id']; 
        $res = $mysqli->query($con) or die("¡Error en la ejecución de la consulta!");
        $nfilas = mysqli_num_rows($res) or die("¡Error en conseguir la cantidad de filas devueltas!");
        ?>
      </div>
      <div class="box-principal">
        <h2>Mi historial de pedidos</h2>
  

          <div class="pedido_formato" id="pedido1">
           
              <label>Id del Pedido</label>
              <label>Descripcion</label>
              <label >Fecha Inicio</label>
              <label >Fecha fin</label>
              <label>Total</label>
          
            <?php
            while ($reg = mysqli_fetch_array($res)) {
            ?>
              
                <label><?php echo $reg[0]; ?></label>
                <label><?php echo $reg[1]; ?></label>
                <label><?php echo $reg[2]; ?></label>
                <label><?php echo $reg[3]; ?></label>
                <label><?php echo $reg[4]; ?></label>
              
            <?php
            }
            ?>
          

        </div>
       
        <?php

        ?>
      </div>




    </div>


  </main>
</body>

</html>
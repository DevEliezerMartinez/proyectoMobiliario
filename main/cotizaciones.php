<?php
session_start()
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <script src="../js/jquery.js"></script>
    <script src="../js/sillas.js"></script>
    <script src="../js/mesas.js"></script>
    <script src="../js/ramada.js"></script>
    <script src="../js/inflable.js"></script>
    <script src="../js/main.js"></script>
    <link rel="stylesheet" href="../css/styleCotizaciones.css">
    <script src="../js/responsivemenu.js"></script>

    <title>Cotizacion de mobiliario</title>
</head>

<body>

    <header>
        <img src="../img/My project.png" alt="logo-brand" />
        <div class="rotativo">
            <div class="desaparecido">
                <h1>Renta de mobiliario Sunsea</h1>
            </div>

            <div class="menu">
                <ul>




                </ul>
            </div>
            <div class="php">
                <?php

                /*  session_destroy(); */
                ?>
            </div>
            <div class="menu-movible">
                <div class="menu">
                    <ul>
                        <li><a href="../main/index.php">Inicio</a></li>

                        <li><a href="../main/galeria.html">Galeria</a></li>
                        <?php
                        if ($_SESSION['user_id'] != "") {
                            echo '<li><a href="../main/reservaciones.php">Mis pedidos</a></li>';
                        } else {
                            echo "<li><a href='../main/login.php'>
                            Inicio Sesion</li>
                        </a>";
                        }
                        ?>

                    </ul>
                </div>



            </div>

            <div class="admin">

                <img src="../img/login.svg" alt="">
                <div class="dropdown">

                    <button class="dropbtn"><?php echo  $_SESSION["nameUsuario"]; ?></button>
                    <div class="dropdown-content">

                        <a href="../php/cerrarSesion.php">Cerrar sesion</a>


                    </div>
                </div>

            </div>


            <div class="cascada">

                <div class="menu_bar">
                    <a href="#" class="bt-menu"><span class="icon-list2"></span>Menú</a>
                </div>
                <nav>
                    <ul>
                        <li><a href="../main/index.php"><span class=""></span>Inicio</a></li>
                        <li><a href="../main/cotizaciones.php"><span class=""></span>Cotizaciones</a></li>
                        <li><a href="../main/galeria.html"><span class="icon-suitcase"></span>Galeria</a></li>
                        <?php
                        if ($_SESSION['user_id'] != "") {
                            echo "";
                        } else {
                            echo "<li><a href='../main/login.php'><span class='icon-earth'></span>Inicio Sesion</a></li>";
                        }
                        ?>

                        <?php
                        if ($_SESSION['user_id'] != "") {
                            echo "<li><a href='../main/reservaciones.php'><span class='icon-earth'></span>Mis pedidos</a></li>";
                        } else {
                            echo "";
                        }
                        ?>
                    </ul>
                </nav>
            </div>

        </div>


    </header>

    <main>
        <div class="phpSection">

            <div class="php-conexion">

                <?php 
                function conexionDB($consulta)
                {
                    include('../php/conexionBD.php');
                    /* $dbhost = "localhost";
                    $dbUsuario = "root";
                    $dbPassword = "";
                    $dbNombre = "proyecto"; */
                    $conexion = mysqli_connect($dbhost, $dbUsuario, $dbPassword, $dbNombre);
                    $resultado = $conexion->query($consulta);
                    $fila = mysqli_fetch_row($resultado);
                    echo ($fila[0]);
                }

                function redir()
                {
                    header("Location: http://localhost/proyectoAvancesTerminados/Renta-Mobiliario/main/reservaciones.php");
                }

                ?>

            </div>


            <div class="php_contaniner_sillas">
                <?php





                function precioSilla1()
                {
                    $cambioConsulta = "SELECT Precio_Unitario FROM `productos` WHERE Id_Producto ='1'";
                    ConexionDB($cambioConsulta);
                }


                function precioSilla2()
                {
                    $cambioConsulta = "SELECT Precio_Unitario FROM `productos` WHERE Id_Producto ='2'";
                    ConexionDB($cambioConsulta);
                }

                function precioSilla3()
                {
                    $cambioConsulta = "SELECT Precio_Unitario FROM `productos` WHERE Id_Producto ='3'";
                    ConexionDB($cambioConsulta);
                }

                function precioSilla4()
                {
                    $cambioConsulta = "SELECT Precio_Unitario FROM `productos` WHERE Id_Producto ='4'";
                    ConexionDB($cambioConsulta);
                }


                function nombreSilla1()
                {
                    $cambioConsulta = "SELECT Tipo_Producto FROM `productos` WHERE Id_Producto ='1';";
                    ConexionDB($cambioConsulta);
                }


                function nombreSilla2()
                {
                    $cambioConsulta = "SELECT Tipo_Producto FROM `productos` WHERE Id_Producto ='2';";
                    ConexionDB($cambioConsulta);
                }

                function nombreSilla3()
                {
                    $cambioConsulta = "SELECT Tipo_Producto FROM `productos` WHERE Id_Producto ='3';";
                    ConexionDB($cambioConsulta);
                }

                function nombreSilla4()
                {
                    $cambioConsulta = "SELECT Tipo_Producto FROM `productos` WHERE Id_Producto ='4';";
                    ConexionDB($cambioConsulta);
                }


                ?>


            </div>

            <div class="php_contaniner_mesas">
                <?php


                function precioMesa1()
                {
                    $cambioConsulta = "SELECT Precio_Unitario FROM `productos` WHERE Id_Producto ='5'";
                    ConexionDB($cambioConsulta);
                }


                function precioMesa2()
                {
                    $cambioConsulta = "SELECT Precio_Unitario FROM `productos` WHERE Id_Producto ='6'";
                    ConexionDB($cambioConsulta);
                }

                function precioMesa3()
                {
                    $cambioConsulta = "SELECT Precio_Unitario FROM `productos` WHERE Id_Producto ='7'";
                    ConexionDB($cambioConsulta);
                }




                function nombreMesa1()
                {
                    $cambioConsulta = "SELECT Tipo_Producto FROM `productos` WHERE Id_Producto ='5';";
                    ConexionDB($cambioConsulta);
                }


                function nombreMesa2()
                {
                    $cambioConsulta = "SELECT Tipo_Producto FROM `productos` WHERE Id_Producto ='6';";
                    ConexionDB($cambioConsulta);
                }

                function nombreMesa3()
                {
                    $cambioConsulta = "SELECT Tipo_Producto FROM `productos` WHERE Id_Producto ='7';";
                    ConexionDB($cambioConsulta);
                }




                ?>


            </div>

            <!-- SALTO -->
            <div class="php_contaniner_inflables">
                <?php


                function precioInflable1()
                {
                    $cambioConsulta = "SELECT Precio_Unitario FROM `productos` WHERE Id_Producto ='14'";
                    ConexionDB($cambioConsulta);
                }


                function precioInflable2()
                {
                    $cambioConsulta = "SELECT Precio_Unitario FROM `productos` WHERE Id_Producto ='15'";
                    ConexionDB($cambioConsulta);
                }

                function precioInflable3()
                {
                    $cambioConsulta = "SELECT Precio_Unitario FROM `productos` WHERE Id_Producto ='16'";
                    ConexionDB($cambioConsulta);
                }




                function nombreInflable1()
                {
                    $cambioConsulta = "SELECT Tipo_Producto FROM `productos` WHERE Id_Producto ='14';";
                    ConexionDB($cambioConsulta);
                }


                function nombreInflable2()
                {
                    $cambioConsulta = "SELECT Tipo_Producto FROM `productos` WHERE Id_Producto ='15';";
                    ConexionDB($cambioConsulta);
                }

                function nombreInflable3()
                {
                    $cambioConsulta = "SELECT Tipo_Producto FROM `productos` WHERE Id_Producto ='16';";
                    ConexionDB($cambioConsulta);
                }




                ?>


            </div>

            <!-- salto br -->

            <!-- SALTO -->
            <div class="php_contaniner_ramadas">
                <?php


                function precioRamada1()
                {
                    $cambioConsulta = "SELECT Precio_Unitario FROM `productos` WHERE Id_Producto ='11'";
                    ConexionDB($cambioConsulta);
                }


                function precioRamada2()
                {
                    $cambioConsulta = "SELECT Precio_Unitario FROM `productos` WHERE Id_Producto ='12'";
                    ConexionDB($cambioConsulta);
                }

                function precioRamada3()
                {
                    $cambioConsulta = "SELECT Precio_Unitario FROM `productos` WHERE Id_Producto ='13'";
                    ConexionDB($cambioConsulta);
                }




                function nombreRamada1()
                {
                    $cambioConsulta = "SELECT Tipo_Producto FROM `productos` WHERE Id_Producto ='11';";
                    ConexionDB($cambioConsulta);
                }


                function nombreRamada2()
                {
                    $cambioConsulta = "SELECT Tipo_Producto FROM `productos` WHERE Id_Producto ='12';";
                    ConexionDB($cambioConsulta);
                }

                function nombreRamada3()
                {
                    $cambioConsulta = "SELECT Tipo_Producto FROM `productos` WHERE Id_Producto ='13';";
                    ConexionDB($cambioConsulta);
                }




                ?>


            </div>

            <!-- salto br -->

        </div>
        <div class="principal">



            <section class="titles">
                <h1>Cotizar precios de renta de sillas</h1>

                <h2>Cotizacion de mobiliario</h2>

            </section>


            <div class="box-flotante">


                <div class="envioReservaciones">
                    <?php



                    if (!empty($_POST['check_list'])) {
                        // Bucle para almacenar y mostrar los valores de la casilla de verificación comprobación individual.
                        echo "los seleccionados fueron <br>";

                        $Descripcion;
                        $Total;
                        $prueba = $_POST['check_list'];
                        $DescripcionPedido = "";

                        for ($i = 0; $i <= 4; $i++) {

                            if (!empty($prueba[$i]) && $prueba[$i] == "mesaBox") {
                                echo (" <span class ='encabezado'> mesas </span>  ");
                                $c_mesa_cuadrada = $_POST["c_mesa_cuadrada"];
                                if ($c_mesa_cuadrada > 0) {
                                    //  echo "<br>  " . $c_mesa_cuadrada . " mesas cuadradas ";
                                    $DescripcionPedido = $DescripcionPedido . $c_mesa_cuadrada . " mesas cuadradas ";
                                    //   echo "string: ".$DescripcionPedido;

                                }

                                $c_mesas_redondas = $_POST["c_mesas_redondas"];
                                if ($c_mesas_redondas > 0) {
                                    //  echo "<br>  " . $c_mesas_redondas . " mesas redondas  ";
                                    $DescripcionPedido = $DescripcionPedido . $c_mesas_redondas . "  mesas redondas";
                                }

                                $c_mesas_rectangulares = $_POST["c_mesas_rectangulares"];
                                if ($c_mesas_rectangulares > 0) {
                                    //   echo "<br>  " . $c_mesas_rectangulares . " mesas rectangulares ";
                                    $DescripcionPedido = $DescripcionPedido . $c_mesas_rectangulares . "  mesas rectangulares ";
                                }
                            }

                            if (!empty($prueba[$i]) && $prueba[$i] == "sillaBox") {
                                echo (" <br><span class ='encabezado'>sillaaaas </span> ");

                                $c_sillas_normales = $_POST["c_sillas_normales"];


                                if ($c_sillas_normales > 0) {
                                    //    echo "<br>  " . $c_sillas_normales . " sillas normales  ";
                                    $DescripcionPedido = $DescripcionPedido . $c_sillas_normales . " sillas normales  ";
                                }

                                $c_sillas_plegables = $_POST["c_sillas_plegables"];
                                if ($c_sillas_plegables > 0) {
                                    //   echo "<br>  " . $c_sillas_plegables . " sillas plegables  ";
                                    $DescripcionPedido = $DescripcionPedido . $c_sillas_plegables . " sillas plegables  ";
                                }

                                $c_sillas_sin = $_POST["c_sillas_sin"];
                                if ($c_sillas_sin > 0) {
                                    //  echo "<br>  " . $c_sillas_sin . " sillas sin descansabrazo";
                                    $DescripcionPedido = $DescripcionPedido . $c_sillas_sin . " sillas sin descansabrazo";
                                }

                                $c_sillas_tiffany = $_POST["c_sillas_tiffany"];
                                if ($c_sillas_tiffany > 0) {
                                    //  echo "<br>  " . $c_sillas_tiffany . " sillas tiffany ";
                                    $DescripcionPedido = $DescripcionPedido . $c_sillas_tiffany . " sillas tiffany";
                                }
                            }



                            if (!empty($prueba[$i]) && $prueba[$i] == "inflableBox") {
                                echo ("<span class ='encabezado'> inflable</span> <br> ");

                                if (!empty($_POST['inf'])) {

                                    $valorinf = $_POST['inf'];
                                    for ($j = 0; $j <= 2; $j++) {

                                        if ($valorinf[$j] == "princesas") {
                                            // echo "princesa <br>";
                                            $DescripcionPedido = $DescripcionPedido . " Inflable Princesa";
                                        }

                                        if ($valorinf[$j] == "cars") {
                                            // echo "cars <br>";
                                            $DescripcionPedido = $DescripcionPedido . " Inflable cars";
                                        }

                                        if ($valorinf[$j] == "mickey") {
                                            //echo "mickey <br>";
                                            $DescripcionPedido = $DescripcionPedido . " Inflable mickey";
                                        }
                                    }
                                }
                            }

                            if (!empty($prueba[$i]) && $prueba[$i] == "ramadaBox") {
                                echo ("<span class ='encabezado'> ramada </span>");

                                $radioVal = $_POST["al"];

                                if ($radioVal == "c") {
                                    // echo ("chico");
                                    $DescripcionPedido = $DescripcionPedido . " Ramada chica";
                                }

                                if ($radioVal == "m") {
                                    // echo ("mediano");
                                    $DescripcionPedido = $DescripcionPedido . " Ramada mediana";
                                }

                                if ($radioVal == "g") {
                                    //echo ("grande");
                                    $DescripcionPedido = $DescripcionPedido . " Ramada grande";
                                }
                            }
                        }

                        //  echo (" <br >**El pedido es:***<br>");
                        echo ("id cliente: " . $_SESSION['user_id'] . "<br>");
                        $_SESSION["descripcionBD"] = $DescripcionPedido;
                        // echo  $_SESSION["descripcionBD"] . "<br>";
                        $totalCotizacion = $_POST['totalCotizacion'];
                        // echo$totalCotizacion;
                        $fecha = $_POST['fecha'];
                        $fecha2 = $_POST['fechafin'];
                        echo $fecha;
                        echo $fecha2;



                       /*  $servername = "localhost";
                        $dbname = "proyecto";
                        $username = "root";
                        $password = "";
                        $dbname = "proyecto";
 */                         
                        // Create connection
                        include('../php/conexionBD.php');
                        $conn = new mysqli($dbhost, $dbUsuario, $dbPassword, $dbNombre);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        echo "<br> before echo <br>";

                        /*  $sql ="INSERT INTO pedidos(`Id_Cliente`, `Id_Producto`, `Descripcion`, `Total`) VALUES(2,21, 'd3scriBDDDD', 12);"; */
                        $sql = "INSERT INTO pedidos(`Id_Cliente`, `Descripcion`, `Total`, `fecha_Pedido`,`fecha_Recoger`) VALUES(" . $_SESSION['user_id'] . ",'" . $_SESSION["descripcionBD"] . "'," . $_POST['totalCotizacion'] . "," . "'" . $fecha . "','" . $fecha2 . "')";

                        /*   echo $sql; */

                        $pruebaXD = $_POST['totalCotizacion'];
                        /* echo $pruebaXD; */


                        if (mysqli_query($conn, $sql)) {
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                        mysqli_close($conn);




                        redir();
                    }




                    ?>
                </div>





                <div class="titleCheck">

                    <div class="boxes">
                        <span>¿Qué mobiliario desea?</span>
                        <div class="checkers">
                            <form action="" method="post">

                                <span for="">Mesas</span>
                                <input type="checkbox" name="check_list[]" id="mesaBox" value="mesaBox">
                                <span for="">Sillas</span>
                                <input type="checkbox" name="check_list[]" id="sillaBox" value="sillaBox">
                                <span for="">Inflables</span>
                                <input type="checkbox" name="check_list[]" id="inflableBox" value="inflableBox">
                                <span for="">Ramadas</span>
                                <input type="checkbox" name="check_list[]" id="ramadaBox" value="ramadaBox">
                                <br>
                                <span>Fecha de reservacion</span>
                                <input type="date" name="fecha" id="fecha" required>
                                <span>Fecha de desocupacion</span>
                                <input type="date" name="fechafin" id="fechafin" required>





                        </div>




                    </div>
                    <div class="formularios_cotizacion">

                        <span id="seleccionar_btn" class="up"> Mostrar</span>

                    </div>


                </div>

                <div class="container_boxes">

                    <div class="box-cards">

                        <!-- separacion cards -->
                        <div class="card-mesas  box-cards-formato">
                            <span>mesas</span>
                            <section class="celda_mesas, formato_celdas">
                                <!-- titulo tabla -->
                                <span>Nombre producto</span>
                                <span>Precio en </span>
                                <span>cantidad</span>



                                <span id="span_tipo_mesa1"> <?php nombreMesa1();  ?></span>
                                <span id="span_precio_mesa1">$ <?php precioMesa1();  ?></span>
                                <div class="form_number">


                                    <input type="number" name="c_mesa_cuadrada" id="c_mesa_cuadrada" class="input_number" min="0" max="50" maxlength="2" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">

                                </div>




                                <span id="span_tipo_mesa2"> <?php nombreMesa2();  ?></span>
                                <span id="span_precio_mesa2">$ <?php precioMesa2();  ?></span>
                                <div class="form_number">


                                    <input type="number" name="c_mesas_redondas" id="c_mesas_redondas" class="input_number" min="0" max="50" maxlength="2" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">

                                </div>


                                <span id="span_tipo_mesa3"> <?php nombreMesa3();  ?></span>
                                <span id="span_precio_mesa3">$ <?php precioMesa3();  ?></span>
                                <div class="form_number">


                                    <input type="number" name="c_mesas_rectangulares" id="c_mesas_rectangulares" class="input_number" min="0" max="50" maxlength="2" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">

                                </div>




                            </section>

                            <div class="right-bottom">

                                <span id="totalCotizacion_Mesa1"></span>

                                <span id="totalCotizacion_Mesa2"></span>

                                <span id="totalCotizacion_Mesa3"></span>


                                <p>El total es:$ </p> <span id="totalTM"></span>




                            </div>







                        </div>

                        <div class="card-sillas  box-cards-formato">
                            <span>Sillas</span>
                            <section class="celda_sillas formato_celdas">
                                <!-- titulo tabla -->
                                <span>Nombre producto</span>
                                <span>Precio</span>
                                <span>cantidad</span>



                                <span id="span_tipo_silla1"> <?php nombreSilla1();  ?></span>
                                <span id="span_precio_silla1">$ <?php precioSilla1();  ?></span>
                                <div class="form_number">


                                    <input type="number" name="c_sillas_normales" id="c_sillas_normales" class="input_number" min="0" max="500" maxlength="4" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />


                                </div>




                                <span id="span_tipo_silla2"> <?php nombreSilla2();  ?></span>
                                <span id="span_precio_silla2">$ <?php precioSilla2();  ?></span>
                                <div class="form_number">


                                    <input type="number" name="c_sillas_plegables" id="c_sillas_plegables" class="input_number" min="0" max="500" maxlength="4" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">

                                </div>


                                <span id="span_tipo_silla3"> <?php nombreSilla3();  ?></span>
                                <span id="span_precio_silla3">$ <?php precioSilla3();  ?></span>
                                <div class="form_number">


                                    <input type="number" name="c_sillas_sin" id="c_sillas_sin" class="input_number" min="0" max="500" maxlength="4" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">

                                </div>

                                <span id="span_tipo_silla4"> <?php nombreSilla4();  ?></span>
                                <span id="span_precio_silla4"> $ <?php precioSilla4();  ?></span>
                                <div class="form_number">


                                    <input type="number" name="c_sillas_tiffany" id="c_sillas_tiffany" class="input_number" min="0" max="500" maxlength="4" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">

                                </div>


                            </section>


                            <div class="right-bottom">

                                <span id="totalCotizacion_Silla1"></span>

                                <span id="totalCotizacion_Silla2"></span>

                                <span id="totalCotizacion_Silla3"></span>

                                <span id="totalCotizacion_Silla4"></span>

                                <p>El total es: $</p> <span id="totalT"></span>



                            </div>


                        </div>

                        <!-- separacion cards -->
                        <div class="card_inflable box-cards-formato">
                            <span>inflable</span>
                            <section class="celda_inflable, formato_celdas">
                                <!-- titulo tabla -->
                                <span>Nombre producto</span>
                                <span>Precio </span>
                                <span>Deseados</span>



                                <span id="span_inflable1"> <?php nombreInflable1();  ?></span>
                                <span id="span_precio_inflable1">$ <?php precioInflable1();  ?></span>
                                <div class="form_number">


                                    <!--  <input type="number" name="" id="c_mesa_cuadrada" class="input_number"> -->
                                    <input type="checkbox" name="inf[]" value="princesas" id="tipoInflable1" class="input_number">

                                </div>




                                <span id="span_inflable2"> <?php nombreInflable2();  ?></span>
                                <span id="span_precio_inflable2">$ <?php precioInflable2();  ?></span>
                                <div class="form_number">


                                    <input type="checkbox" name="inf[]" value="cars" id="tipoInflable2" class="input_number">

                                </div>


                                <span id="span_inflable3"> <?php nombreInflable3();  ?></span>
                                <span id="span_precio_inflable3">$ <?php precioInflable3();  ?></span>
                                <div class="form_number">


                                    <input type="checkbox" name="inf[]" value="mickey" id="tipoInflable3" class="input_number">

                                </div>




                            </section>

                            <div class="right-bottom">

                                <span id="totalInflable1"></span>

                                <span id="totalInflable2"></span>

                                <span id="totalInflable3"></span>


                                <p>El total es: $</p> <span id="totalINF"></span>


                            </div>


                        </div>

                        <!-- separacion cards -->
                        <div class="card-ramadas box-cards-formato">
                            <span>Ramadas</span>
                            <section class="celda_ramada, formato_celdas">
                                <!-- titulo tabla -->
                                <span>Nombre producto</span>
                                <span>Precio </span>
                                <span>Deseados</span>



                                <span id="span_ramada1"> <?php nombreRamada1();  ?></span>
                                <span id="span_precio_ramada1">$ <?php precioRamada1();  ?></span>
                                <div class="form_number">


                                    <!--  <input type="number" name="" id="c_mesa_cuadrada" class="input_number"> -->
                                    <input type="radio" name="al" value="c" id="tipoRamada1" class="input_number" onclick="onlyOne(this)">

                                </div>




                                <span id="span_ramada2"> <?php nombreRamada2();  ?></span>
                                <span id="span_precio_ramada2">$ <?php precioRamada2();  ?></span>
                                <div class="form_number">


                                    <input type="radio" name="al" value="m" id="tipoRamada2" class="input_number" onclick="onlyOne(this)">

                                </div>


                                <span id="span_ramada3"> <?php nombreRamada3();  ?></span>
                                <span id="span_precio_ramada3">$ <?php precioRamada3();  ?></span>
                                <div class="form_number">


                                    <input type="radio" name="al" value="g" id="tipoRamada3" class="input_number" onclick="onlyOne(this)">


                                </div>




                            </section>

                            <div class="right-bottom">

                                <span id="totalRamada1"></span>

                                <span id="totalRamada2"></span>

                                <span id="totalRamada3"></span>

                                <p>El total es: $</p> <span id="totalRamada"></span>

                            </div>


                        </div>


                    </div>


                    <div class="finalCotizacion">
                        <p>Total $ <span id="TotalGral">...</span> <!-- <input type="text" name="" id="TotalGral">  -->
                        </p>

                        <input class="auxi" type="text" name="totalCotizacion" id="aux">



                        <span id="boton_cotizar" onclick="obtener(); botn();"> COTIZAR</span>
                        <script>
                            function botn() {
                                document.getElementById("boton_reservar").disabled = false;
                            }

                            function obtener() {

                                setTimeout(() => {
                                    let total = document.getElementById("TotalGral").textContent;
                                    console.log(total);
                                    document.getElementById("aux").value = total;
                                }, 800);

                            }
                        </script>
                    </div>
                    <?php
                    if ($_SESSION['user_id'] != "") {
                        echo '<input type="submit" id="boton_reservar" name="submit" value="Reservar" />';
                    } else {
                        echo "";
                    }
                    ?>

                    </form>

                </div>


            </div>

        </div>


    </main>
    <!-- aqui hay problemas de responsive-->
    <footer>
        <div class="relleno">
            <h2>Ventajas de reservar tu mobiliario en Sunsea</h2>

            <div class="cards-relleno">
                <div class="card1, cards-relleno-formato">
                    <img src="../img/checklist.svg" alt="" id="reset">
                    <p>Agrega Productos y Servicios a tu evento y da click en Solicitar Cotización o Cotizar y Confirmar.</p>

                    <!--  </div>
                <div class="card2, cards-relleno-formato">
                    <img src="img/account.svg" alt="" id="reset">
                    <p>Suscríbete a nuestra lista y sé el primero en recibir promociones, Invitaciones a nuestros showrooms y más...
                    </p>



                </div>
                <div class="card3, cards-relleno-formato">
                    <img src="img/experience.svg" alt="" id="reset">
                    <p>En Sunsea llevamos más de 3 Años en producción para renta de eventos. Tenemos mobiliario para sentar hasta 600 personas. Te ayudamos a organizar tu evento de principio a fin.</p>


                </div> -->
                </div>

            </div>
    </footer>
</body>

</html>
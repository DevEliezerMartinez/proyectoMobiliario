<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion ADMIN</title>
    <link rel="stylesheet" href="../css/syleLogin.css">

    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>

<body>
    <header>
        <div class="logo">
            <img src="../img/My project.png" alt="">
        </div>

        <div class="container_Derecha">

            <div class="menu">
                <ul>
                    <a href="../main/reservaciones.php">
                        <li>Mis reservaciones</li>
                    </a>
                    <a href="../main/galeria.html">
                        <li>Galeria</li>
                    </a>

                </ul>

                <div class="home">
                    <a href="../main/index.php"><img src="../img/home.svg" alt=""></a>

                </div>

            </div>


        </div>

    </header>


    <div class="php_section">
        <?php

        include('../php/ConexionBDLogin.php');


        if (isset($_POST['Ingresar'])) {

            $Nombre = $_POST['Nombre'];
            $Contraseña = $_POST['Contraseña'];

            $query = $connection->prepare("SELECT * FROM clientes WHERE Nombre=:Nombre");
            $query->bindParam("Nombre", $Nombre, PDO::PARAM_STR);
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);

            if (!$result) {
                echo '<p class="error">¡La combinación de nombre de usuario y contraseña es incorrecta!</p>';
            } else {
                if (password_verify($Contraseña, $result['Contraseña'])) {
                    $_SESSION['user_id'] = $result['Id_Cliente'];
                    echo '<p class="success">Felicidades has ingresado exitosamente</p>';
                    echo ("Bienvenido: " . $Nombre);
                    $_SESSION["nameUsuario"] = $Nombre;
                    echo   $_SESSION['user_id']; 

                     redireccion(); 
                } else {
                    echo '<p class="error">¡La combinación de nombre de usuario y contraseña es incorrecta!</p>';
                }
            }
        }

        //Poner una imagen como 2 usuarios en usuario
        //Poner una imagen de un candado en contraseña
        //https://blog.hostdime.com.co/guia-para-crear-un-sistema-de-inicio-de-sesion-y-registro-usando-php-y-mysql/
        ?>


        <?php
        function redireccion()
        {
            header("Location: http://localhost/proyectoAvancesTerminados/Renta-Mobiliario/main/index.php");
        }
        ?>


    </div>



    <main>
        <div class="contenido">
            <div class="imagenCentral">
                <img src="../img/logo-brand.png" alt="">
            </div>
            <div class="formulario">
                <form action="" method="post" name="signin-form" class="formularion">
                    <label for="">Ingrese su usuario</label>
                    <input type="text" name="Nombre" pattern="[a-zA-Z0-9]+" required placeholder="Ejemplo Usuario">
                       
                    <label for="">Ingrese su contraseña</label>
                    <input type="password" name="Contraseña" value="" id="contraseña" placeholder="********">
                      
                    <a href="index.html"> <button type="submit" name="Ingresar" value="Ingresar">Ingresar</button>
                    </a>

                </form>

            </div>

            <div class="registro">
                <p>¿No estas registrado?</p>
                <a href="../php/Registrar.php">Registrate Aqui</a>
            </div>


        </div>

    </main>



</body>

</html>
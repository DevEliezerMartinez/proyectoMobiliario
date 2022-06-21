<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleRegistro.css">
    <title>Registrarse</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="../img/My project.png" alt="">
        </div>

        <div class="container_Derecha">

            <div class="menu">
                <ul>
                    <a href="../main/reservaciones.html">
                        <li>Mis reservaciones</li>
                    </a>
                    <a href="../main/galeria.html">
                        <li>Galeria</li>
                    </a>
                    <a href="">
                        <li>Mas detalles</li>
                    </a>

                </ul>

                <div class="home">
                    <a href="../main/index.php"><img src="../img/home.svg" alt=""></a>

                </div>

            </div>


        </div>

    </header>
    <main>
        <div class="php_section">
            <?php

            include('../php/ConexionBDLogin.php');
            session_start();

            if (isset($_POST['Registrar'])) {

                $Nombre = $_POST['Nombre'];
                $Apellido_Paterno = $_POST['Apellido_Paterno'];
                $Apellido_Materno = $_POST['Apellido_Materno'];
                $Direccion = $_POST['Direccion'];
                $Telefono = $_POST['Telefono'];
                $Email = $_POST['Email'];
                $Contraseña = $_POST['Contraseña'];
                $password_hash = password_hash($Contraseña, PASSWORD_BCRYPT);

                $query = $connection->prepare("SELECT * FROM clientes WHERE Email=:Email");
                $query->bindParam("Email", $Email, PDO::PARAM_STR);
                $query->execute();

                if ($query->rowCount() > 0) {
                    echo '<p class="error">¡La dirección de correo electrónico ya está registrada!</p>';
                }

                if ($query->rowCount() == 0) {
                    $query = $connection->prepare("INSERT INTO clientes(Nombre, Apellido_Paterno, 
                    Apellido_Materno, Direccion, Telefono, Contraseña, Email) VALUES (:Nombre, 
                    :Apellido_Paterno, :Apellido_Materno, :Direccion, :Telefono, :password_hash, :Email)");
                    $query->bindParam("Nombre", $Nombre, PDO::PARAM_STR);
                    $query->bindParam("Apellido_Paterno", $Apellido_Paterno, PDO::PARAM_STR);
                    $query->bindParam("Apellido_Materno", $Apellido_Materno, PDO::PARAM_STR);
                    $query->bindParam("Direccion", $Direccion, PDO::PARAM_STR);
                    $query->bindParam("Telefono", $Telefono, PDO::PARAM_STR);
                    $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
                    $query->bindParam("Email", $Email, PDO::PARAM_STR);
                    $result = $query->execute();

                    if ($result) {
                        echo '<p class="success">¡Tu registro fue exitoso!</p>';
                        $_SESSION["nameUsuario"] = $Nombre;
                        redireccion();
                    } else {
                        echo '<p class="error">¡Algo salió mal!</p>';
                    }
                }
            }

            ?>

            <?php
            function redireccion()
            {
                header("Location: http://localhost/proyectoAvancesTerminados/Renta-Mobiliario/main/index.php");
            }
            ?>
        </div>

        <div class="contenido">
            <div class="imagenCentral">
                <img src="../img/logo-brand.png" alt="">
            </div>



            <form method="post" action="" name="signup-form" class="formularion">
                <div class="form_element">

                    <label>Nombre</label>
                    <input type="text" name="Nombre" pattern="[a-zA-Z0-9]+" required />


                    <label>Apellido_Paterno</label>
                    <input type="text" name="Apellido_Paterno" required />


                    <label>Apellido_Materno</label>
                    <input type="text" name="Apellido_Materno" required />


                    <label>Direccion</label>
                    <input type="text" name="Direccion" required />


                    <label>Telefono</label>
                    <input type="text" name="Telefono" required />


                    <label>Email</label>
                    <input type="Email" name="Email" required />


                    <label>Contraseña</label>
                    <input type="password" name="Contraseña" required />

                    <button id="btn1" type="submit" name="Registrar" value="Registrar">Registrar</button>
            </form>
        </div>


    </main>

</body>

</html>
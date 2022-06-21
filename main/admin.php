<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styleAdmin.css">
	<title>ADMIN-SUNSEA</title>
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
					<a href="../main/sillas.html">
						<li>Productos</li>
					</a>
					<a href="../main/login.php">
						<li>Inicio Sesion</li>
					</a>

				</ul>

				<div class="home">
					<a href="../main/index.php"><img src="../img/home.svg" alt=""></a>

				</div>

				<div class="admin">

					<img src="../img/login.svg" alt="">
					<div class="dropdown">

						<button class="dropbtn"><?php echo  $_SESSION["nameUsuario"]; ?></button>
						<div class="dropdown-content">

							<a href="">Cerrar sesion</a>
							<a href="../main/sillas.html">Perfil</a>

						</div>
					</div>

				</div>


			</div>

	</header>
	<div class="php_section">
		<?php
		include('../php/conexionBD.php ');
		?>
	</div>
	<main>
		<div class="box">
			<form method="post" action="">
				<table align="center">
					<tr>
						<td><button type="submit" name="btnMostrarClientes">Mostrar Clientes</button></td>
					</tr>
				</table>
			</form>

			<form method="post" action="">
				<table align="center">
					<tr>
						<td><button type="submit" name="btnMostrarProductos">Mostrar Productos</button></td>
					</tr>
				</table>
			</form>

			<form method="post" action=" ">
				<table align="center">
					<tr>
						<td><button type="submit" name="btnMostrarPedidos">Mostrar Pedidos</button></td>
					</tr>
				</table>
			</form>

		</div>
		
		<div class="contenido">
			<div class="tablas">
				<span>awucf</span>
				<?php include("../php/conexionBD.php");
				
				
				if (isset($_POST['btnMostrarClientes'])) {
				
					
					//Datos para la conexion con MySQL
					/* $servidor = "localhost";
					$usuario = "root";
					$password = "";
					$BD = "proyecto"; */
					//función para conexión
					$mysqli = new mysqli($dbhost, $dbUsuario, $dbPassword, $dbNombre);
					$mysqli->set_charset("utf8");

					$con = "SELECT Id_Cliente, Nombre, Apellido_Paterno, Apellido_Materno, Direccion, Telefono, Email FROM clientes;";
					$res = $mysqli->query($con) or die("¡Error en la ejecución de la consulta!");
					$nfilas = mysqli_num_rows($res) or die("¡Error en conseguir la cantidad de filas devueltas!");

				?>
					<h2>Clientes Registrados</h2>
					<table align="center" border="10">
						<tr>
							<td><label>Id Cliente</label></td>
							<td><label>Nombre</label></td>
							<td><label>Apellido Paterno</label></td>
							<td><label>Apellido Materno</label></td>
							<td><label>Direccion</label></td>
							<td><label>Telefono</label></td>
							<td><label>Email</label></td>
						</tr>
						<?php
						while ($reg = mysqli_fetch_array($res)) {
						?>
							<tr>
								<td><?php echo $reg[0]; ?></td>
								<td><?php echo $reg[1]; ?></td>
								<td><?php echo $reg[2]; ?></td>
								<td><?php echo $reg[3]; ?></td>
								<td><?php echo $reg[4]; ?></td>
								<td><?php echo $reg[5]; ?></td>
								<td><?php echo $reg[6]; ?></td>
							</tr>
						<?php
						}
						?>
					</table>
					<br>
				<?php
				}
				?>



				<br>


				<?php
				include('../php/conexionBD.php ');
				if (isset($_POST['btnMostrarProductos'])) {
					
					//Datos para la conexion con MySQL
					/* $servidor = "localhost";
					$usuario = "root";
					$password = "";
					$BD = "proyecto"; */
					//función para conexión
					$mysqli = new mysqli($localhost, $dbUsuario, $dbPassword, $dbNombre);
					$mysqli->set_charset("utf8");

					$con = "SELECT Id_Producto, Categoria, Tipo_Producto, Precio_Unitario, Cantidad FROM productos;";
					$res = $mysqli->query($con) or die("¡Error en la ejecución de la consulta!");
					$nfilas = mysqli_num_rows($res) or die("¡Error en conseguir la cantidad de filas devueltas!");

				?>
					<h2>Productos Actuales</h2>
					
				
					<div class="diseñoTabla">
						<span><label>Id Producto</label></span>
						<span><label>Categoria</label></span>
						<span><label>Tipo Producto</label></span>
						<span><label>Precio Unitario</label></span>
						<span><label>Cantidad</label></span>
						

						<?php
						while ($reg = mysqli_fetch_array($res)) {
						?>

							<span><?php echo $reg[0]; ?></span>

							<span><?php echo $reg[1]; ?></span>
							<span><?php echo $reg[2]; ?></span>
							<span><?php echo $reg[3]; ?></span>

							<span><?php echo $reg[4]; ?></span>
							


						<?php
						}
						?>

						
						

						

					</div>


					







					<?php
					while ($reg = mysqli_fetch_array($res)) {
					?>
						<tr>
							<td><?php echo $reg[0]; ?></td>
							<td><?php echo $reg[1]; ?></td>
							<td><?php echo $reg[2]; ?></td>
							<td><?php echo $reg[3]; ?></td>
							<td><?php echo $reg[4]; ?></td>
						</tr>
					<?php
					}
					?>
					</table>
					<br>
				<?php
				}
				?>


				<?php
				include('../php/conexionBD.php ');
				if (isset($_POST['btnMostrarPedidos'])) {
					
					//Datos para la conexion con MySQL
				/* 	$servidor = "localhost";
					$usuario = "root";
					$password = "";
					$BD = "proyecto"; */
					//función para conexión
					$mysqli = new mysqli($dbhost, $dbUsuario, $dbPassword, $dbNombre);
					$mysqli->set_charset("utf8");

					$con = "SELECT pedidos.Id_Pedido, clientes.Nombre, clientes.Apellido_Paterno, clientes.Direccion, pedidos.Descripcion, pedidos.Total
					FROM pedidos JOIN clientes ON pedidos.Id_Cliente = clientes.Id_Cliente;";
					$res = $mysqli->query($con) or die("¡Error en la ejecución de la consulta!");
					$nfilas = mysqli_num_rows($res) or die("¡Error en conseguir la cantidad de filas devueltas!");

				?>
					<h2>Pedidos Actuales</h2>
					<table align="center" border="10">
						<tr>
							<td><label>Id Pedido</label></td>
							<td><label>Nombre Clientes</label></td>
							<td><label>Apellido</label></td>
							<td><label>Direccion</label></td>
							<td><label>Descripcion</label></td>
							<td><label>Total</label></td>
						</tr>
						<?php

						while ($reg = mysqli_fetch_array($res)) {
						?>
							<tr>
								<td><?php echo $reg[0]; ?></td>
								<td><?php echo $reg[1]; ?></td>
								<td><?php echo $reg[2]; ?></td>
								<td><?php echo $reg[3]; ?></td>
								<td><?php echo $reg[4]; ?></td>
								<td><?php echo $reg[5]; ?></td>
								
							</tr>
						<?php
						}
						?>
						
					</table>
					<br>
				<?php
				}
				?>
			</div>


		</div>



	</main>



</body>

</html>
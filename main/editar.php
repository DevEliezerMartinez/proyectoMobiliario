<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styleEditar.css">
	<title>Editar-ADMIN</title>
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

	<main>
		<section>
		<form action="" method="post" class="formularios">
			<span>Producto</span>
			<span>precio unitario</span>
			<span>Cantidad</span>
			
				<span>NOmbre Producto</span>
				<input type="text" name="" id="" placeholder="$5">
				<input type="text" name="" id="" placeholder="100">
				
			</form>
			
		</section>
		<div class="botones">

		</div>
	</main>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="MiEstilo.css">
    <title>Agregar Productos</title>
</head>
<body>

<?php
 
include('ConexionBD.php');
 
if (isset($_POST['Añadir'])) {
 
    $Categoria = $_POST['Categoria'];
    $Tipo_Producto = $_POST['Tipo_Producto'];
    $Precio_Unitario = $_POST['Precio_Unitario'];
    $Cantidad = $_POST['Cantidad'];
 
    $query = $connection->prepare("SELECT * FROM `productos` WHERE Tipo_Producto = :Tipo_Producto;");
    $query->bindParam("Tipo_Producto", $Tipo_Producto, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo '<p class="error">¡El producto ya se encuentra registrado!</p>';
    }
 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO `productos`(`Categoria`, `Tipo_Producto`, `Precio_Unitario`, `Cantidad`) VALUES
        (:Categoria, :Tipo_Producto, :Precio_Unitario, :Cantidad);");
        $query->bindParam("Categoria", $Categoria, PDO::PARAM_STR);
        $query->bindParam("Tipo_Producto", $Tipo_Producto, PDO::PARAM_STR);
        $query->bindParam("Precio_Unitario", $Precio_Unitario, PDO::PARAM_STR);
        $query->bindParam("Cantidad", $Cantidad, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo '<p class="success">¡El registro fue exitoso!</p>';
        } else {
            echo '<p class="error">¡Algo salió mal!</p>';
        }
    }
}
 
?>

<form method="post" action="" name="signup-form">
    <div class="form-element">
        <label>Categoria</label>
        <input type="text" name="Categoria" pattern="[a-zA-Z0-9]+" required />
    </div>
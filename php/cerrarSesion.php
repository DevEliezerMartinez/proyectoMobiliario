<?php
@session_start();
session_destroy();
header("Location: http://localhost/proyectoAvancesTerminados/Renta-Mobiliario/main/index.php");
?>
<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base_datos = "proyecto_agus"; // tu base de datos

$conexion = new mysqli($servidor, $usuario, $clave, $base_datos);

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}
?>

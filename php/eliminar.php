<?php
include("conexion.php");
$id = $_GET['id'];
$conexion->query("DELETE FROM hamburguesas WHERE id=$id");
header("Location: listar.php");
?>

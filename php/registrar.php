<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO mensajes (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

if ($conexion->query($sql) === TRUE) {
    echo "<script>
            alert('Registro exitoso');
            window.location.href = '../contacto.html';
          </script>";
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();
?>

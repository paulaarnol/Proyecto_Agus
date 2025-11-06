<?php
include("conexion.php");

$query = $conexion->query("SELECT nombre, email, mensaje FROM mensajes ORDER BY id DESC");

if (!$query) {
    echo "<p style='color:red;'>Error en la consulta SQL: " . $conexion->error . "</p>";
    exit;
}

if ($query->num_rows > 0) {
    while ($fila = $query->fetch_assoc()) {
        echo '<div class="reseña">';
        echo '<h3>' . htmlspecialchars($fila['nombre']) . '</h3>';
        echo '<p class="email">' . htmlspecialchars($fila['email']) . '</p>';
        echo '<p class="mensaje">' . nl2br(htmlspecialchars($fila['mensaje'])) . '</p>';
        echo '</div>';
    }
} else {
    echo "<p>No hay reseñas aún. ¡Sé el primero en dejar la tuya! 🍔</p>";
}
?>

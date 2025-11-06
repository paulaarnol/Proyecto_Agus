<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de Hamburguesas</title>
  <link rel="stylesheet" href="../css/style-crud.css">
</head>
<body>

<nav>
  <a href="../index.html">🏠 Inicio</a>
  <a href="../menu.html">🍔 Menú</a>
  <a href="agregar.php">➕ Agregar</a>
</nav>

<h1>Listado de Hamburguesas</h1>

<table>
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Precio</th>
    <th>Acciones</th>
  </tr>

  <?php
  $sql = "SELECT * FROM hamburguesas";
  $resultado = $conexion->query($sql);

  while($fila = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$fila['id']."</td>";
    echo "<td>".$fila['nombre']."</td>";
    echo "<td>".$fila['descripcion']."</td>";
    echo "<td>$".$fila['precio']."</td>";
    echo "<td>
            <a href='editar.php?id=".$fila['id']."'>✏️ Editar</a> |
            <a href='eliminar.php?id=".$fila['id']."'>🗑️ Eliminar</a>
          </td>";
    echo "</tr>";
  }
  ?>
</table>

</body>
</html>

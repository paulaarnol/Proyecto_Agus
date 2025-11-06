<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registros de Clientes</title>
  <link rel="stylesheet" href="../css/style-crud.css">
</head>
<body>
  <nav class="navbar">
    <div class="logo">🍔 Burger House</div>
    <ul class="nav-links">
      <li><a href="../index.html">Inicio</a></li>
      <li><a href="../menu.html">Menú</a></li>
      <li><a href="../contacto.html">Registro</a></li>
      <li><a href="lista_registros.php" class="active">Ver registros</a></li>
    </ul>
  </nav>

  <h1>Listado de Clientes Registrados</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Mensaje</th>
    </tr>

    <?php
    $query = $conexion->query("SELECT * FROM clientes");
    while ($fila = $query->fetch_assoc()):
    ?>
      <tr>
        <td><?= $fila['id'] ?></td>
        <td><?= $fila['nombre'] ?></td>
        <td><?= $fila['email'] ?></td>
        <td><?= $fila['mensaje'] ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>

<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar Hamburguesa</title>
  <link rel="stylesheet" href="../css/style-crud.css">
</head>
<body>

  <nav class="navbar">
    <div class="logo">🍔 Burger House</div>
    <ul class="nav-links">
      <li><a href="../index.html">Inicio</a></li>
      <li><a href="../menu.html">Menú</a></li>
      <li><a href="../contacto.html">Registro</a></li>
      <li><a href="listar.php">Admin</a></li>
    </ul>
  </nav>

  <h1>Agregar nueva hamburguesa</h1>

  <form action="" method="POST" class="form-crud">
    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>Descripción:</label>
    <textarea name="descripcion" required></textarea>

    <label>Precio:</label>
    <input type="number" name="precio" required>

    <button type="submit" name="guardar">Guardar</button>
  </form>

  <?php
  if (isset($_POST['guardar'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    $sql = "INSERT INTO hamburguesas (nombre, descripcion, precio)
            VALUES ('$nombre', '$descripcion', '$precio')";

    if ($conexion->query($sql) === TRUE) {
      echo "<script>alert('Hamburguesa agregada correctamente');
      window.location.href='listar.php';</script>";
    } else {
      echo "Error al agregar: " . $conexion->error;
    }
  }
  ?>

</body>
</html>

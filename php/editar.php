<?php
include("conexion.php");

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $resultado = $conexion->query("SELECT * FROM hamburguesas WHERE id=$id");
  $fila = $resultado->fetch_assoc();
}

if(isset($_POST['actualizar'])){
  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $precio = $_POST['precio'];

  $sql = "UPDATE hamburguesas SET nombre='$nombre', descripcion='$descripcion', precio='$precio' WHERE id=$id";
  $conexion->query($sql);
  header("Location: listar.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Hamburguesa</title>
  <link rel="stylesheet" href="../css/style-crud.css">
</head>
<body>

<nav>
  <a href="../index.html">🏠 Inicio</a>
  <a href="listar.php">📋 Listar</a>
</nav>

<h1>Editar Hamburguesa</h1>

<form method="POST">
  <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

  <label>Nombre:</label>
  <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>" required>

  <label>Descripción:</label>
  <textarea name="descripcion" required><?php echo $fila['descripcion']; ?></textarea>

  <label>Precio:</label>
  <input type="number" name="precio" value="<?php echo $fila['precio']; ?>" required>

  <button type="submit" name="actualizar">Actualizar</button>
</form>

</body>
</html>

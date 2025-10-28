<?php
session_start();
if (!isset($_SESSION["usuario"]) || $_SESSION["usuario"] != "julius") {
  header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <h2>Bienvenido al perfil de los estudiantes</h2>
  <nav>
    <a href="index.php">Inicio</a>
    <a href="estudiante.php">Estudiante</a>
    <a href="cerrar.php">Cerrar</a>
  </nav>
</body>

</html>
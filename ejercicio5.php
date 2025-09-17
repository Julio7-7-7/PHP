<?php
if ($_POST) {
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  echo "Hola " . $nombre . " " . $apellido . " que tal";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="ejercicio5.php" method="post">
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" id="nombre" placeholder="Juan">
    <label for="apellido">Apellido: </label>
    <input type="text" name="apellido" id="apellido" placeholder="Perez">
    <input type="submit" name="" id="" value="Enviar">
</body>

</html>
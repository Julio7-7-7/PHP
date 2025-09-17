<?php

// Hay un envio?
if ($_POST) {
  $nombre = $_POST['nombre'];

  echo $nombre;
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
  <h1>Este es un formulario</h1>

  <form action="ejercicio2.php" method="post">
    <input type="text" name="nombre" id="nombre" placeholder="Nombre">
    <input type="submit" name="" id="" value="Enviar">
  </form>
</body>

</html>
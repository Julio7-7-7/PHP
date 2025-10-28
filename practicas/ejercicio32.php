<?php

if ($_POST) {
  
  $_FILES["archivo"]["name"];

  move_uploaded_file($_FILES["archivo"]["tmp_name"], $_FILES["archivo"]["name"]);
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
  <form action="ejercicio32.php" method="post" enctype="multipart/form-data">

    <div>
      <h2>Imagen: </h2>
      <input type="file" name="archivo" id="archivo">
    </div>
    <br>
    <input type="submit" name="enviar" value="Enviar Foto">
  </form>

</body>

</html>
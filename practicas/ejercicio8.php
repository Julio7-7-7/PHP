<?php
if ($_POST) {
  $valorA = $_POST["valorA"];
  $valorB = $_POST["valorB"];

  echo "El resultado es " . $valorA + $valorB;
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
  <h1>Calcular total</h1>
  <form action="ejercicio8.php" method="post">
    <label for="valorA"></label>
    <input type="text" name="valorA" id="valorA" placeholder="Primer numero">
    <br>
    <label for="valorB"></label>
    <input type="text" name="valorB" id="valorB" placeholder="Primer numero">
    <br>
    <input type="submit" value="Calcular">
  </form>
</body>

</html>
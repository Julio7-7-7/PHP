<?php
if ($_POST) {
  $numeroA = $_POST["numeroA"];
  $numeroB = $_POST["numeroB"];

  if ($numeroA > $numeroB) {
    echo "Ya que el primero es mayor al segundo la suma es: " . $numeroA + $numeroB;
  } else {
    echo "Ya que el primero es mayor al segundo la suma es: " . $numeroA - $numeroB;
  }
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
  <h1>Sumatoria condicional</h1>
  <p>En esta pagína podrás sumar o restar números dependiendo si el primero es mayor que el segundo</p>
  <form action="ejercicio9.php" method="post">
    <label for="numeroA">Primer número: </label>
    <input type="text" name="numeroA" id="numeroA">
    <label for="numeroB">Segundo número: </label>
    <input type="text" name="numeroB" id="numeroB">
    <input type="submit" value="Calcular">
  </form>
</body>

</html>
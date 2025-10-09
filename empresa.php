<?php
$user = "root";
$password = "";
$servidor = "localhost";

if ($_POST) {
  $personCI = $_POST["personCI"];
  $personName = $_POST["personName"];
  $personLast = $_POST["personLast"];
  $personCel = $_POST["personCel"];

  try {
    $conexion = new PDO("mysql:host=$servidor; dbname=empresa", $user, $password);
    
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `empleado` (`ci`, `nombre`, `apellido`, `celular`)
          VALUES ('$personCI', '$personName', '$personLast', '$personCel');";
    $conexion->exec($sql);

    echo "Datos ingresados exitosamente";
  } catch (ErrorException $e) {
    echo "No se pudo crack" . $e;
  }
}

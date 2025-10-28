<?php

$user = "root";
$password = "";
$servidor = "localhost";


if ($_POST) {
  $registro = $_POST["stuReg"];
  $nombre = $_POST["stuName"];


  try {
    $conexion = new PDO("mysql:host=$servidor; dbname=universidad", $user, $password);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //INSERCIÓN
    // $sql = "INSERT INTO `universitario`(`registro`, `nombre`) VALUES ('$registro','$nombre')";
    // $conexion->exec($sql);

    //LECTURA
    $sql = "SELECT * FROM `universitario`";
    $consulta = $conexion->prepare($sql);
    $consulta->execute();
    $resultado = $consulta->fetchAll();

    foreach ($resultado as $fila) {
      echo $fila["nombre"] . " " . $fila["registro"] .  "<br>";
    }

    // echo "Inserción exitosa";
  } catch (ErrorException $e) {
    echo "No se pudo " . $e;
  }
}

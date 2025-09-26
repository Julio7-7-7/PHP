<?php

$servidor = "localhost";
$usuario = "root";
$password = "";

try {
  $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $password);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //INSERSIÓN DE DATOS EN SQL
  $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'programando waos', 'foto.jpg')";
  $conexion->exec($sql);
  echo "Conexión establecida";
} catch (PDOException $error) {
  echo "Conexion erronea" . $error;
}

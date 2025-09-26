<?php

$servidor = "localhost";
$user = "root";
$password = "";

try {
  $conexion = new PDO("mysql:server=$servidor; dbname=tienda", $user, $password);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO `producto` (`id`, `nombre`, `precio`, `stock`) VALUES (NULL, 'raton', '200', '20');";
  $conexion->exec($sql);
  echo "Conexión exitosa";
} catch (PDOException $e) {
  echo "No se pudo fuck" . $e;
}

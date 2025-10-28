<?php

$servidor = "localhost";
$usuario = "root";
$password = "";

try {
  $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $password);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //LECTURA DE DATOS

  $sql = "SELECT * FROM fotos";
  $sentencia = $conexion->prepare($sql);
  $sentencia->execute();

  $resultado = $sentencia->fetchAll();

  // print_r($resultado);

  foreach ($resultado as $foto) {
    print_r($foto);
  }

  echo "Conexión establecida";
} catch (PDOException $error) {
  echo "Conexion erronea" . $error;
}

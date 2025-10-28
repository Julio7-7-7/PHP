<?php

class conexion
{
  private $server = "localhost";
  private $user = "root";
  private $password = "";
  private $database = "universidad";
  private $conexion;

  public function __construct()
  {
    try {
      $this->conexion = new PDO("mysql:host=$this->server; dbname=$this->database", $this->user, $this->password);
      $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
      echo "Conexión fallida" . $e->getMessage();
    }
  }

  public function leer($sql)
  {
    $consulta = $this->conexion->prepare($sql);
    $consulta->execute();
    return $consulta->fetchAll();
  }

  public function ejecutar($sql)
  {
    $consulta = $this->conexion->prepare($sql);
    $consulta->execute();
  }
}

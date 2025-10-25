<?php
class conexion
{
  private $servidor = "localhost";
  private $usuario = "root";
  private $contraseña = "";
  private $dbase = "album";
  private $conexion;

  public function __construct()
  {
    try {
      $this->conexion = new PDO("mysql:host=$this->servidor;dbname=$this->dbase", $this->usuario, $this->contraseña);
      $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      return "Falló la Conexión" . $e;
    }
  }

  // Inserción, borrado, actualizado
  public function ejecutar($sql)
  {
    $this->conexion->exec($sql);
    return $this->conexion->lastInsertId();
  }

  public function consultar($sql)
  {
    $sentence = $this->conexion->prepare($sql);
    $sentence->execute();
    return $sentence->fetchAll();
  }
}

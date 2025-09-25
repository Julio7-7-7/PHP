<?php

class persona
{

  public $nombre;
  private $edad;
  protected $altura;

  public function asignarNombre($nuevoNombre)
  {
    $this->nombre = $nuevoNombre;
  }

  public function imprimirNombre()
  {
    echo "Hola soy " . $this->nombre;
  }

  public function mostrarEdad()
  {
    $this->edad = 21;
    return $this->edad;
  }
}

class trabajador extends persona
{
  public $puesto;
  public function presentarse()
  {
    echo "Hola soy " . $this->nombre . " y soy un " . $this->puesto;
  }
}


$trabajador = new trabajador();
$trabajador->asignarNombre("Julius");
$trabajador->puesto = "Auxiliar";
$trabajador->presentarse();

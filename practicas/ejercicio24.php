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

$alumno = new persona();
$alumno->asignarNombre("Julius");
echo $alumno->nombre;

echo "<br/>";

$alumno2 = new persona();
$alumno2->asignarNombre("César");
$alumno2->imprimirNombre();

echo "<br/>";

echo $alumno2->mostrarEdad();

<?php

class persona
{

  public $nombre;
  private $edad;
  protected $altura;

  public function __construct($nombre, $edad, $altura)
  {
    $this->nombre = $nombre;
    $this->edad = $edad;
    $this->altura = $altura;
  }

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

  public function presentar()
  {
    return "Hola soy " . $this->nombre . " , tengo " . $this->edad . " años y mido " . $this->altura;
  }
}

$alumno = new persona("Julio", 21, 173);
echo $alumno->presentar();

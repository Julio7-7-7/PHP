<?php

class clasePrueba
{

  public static function metodoEstatico()
  {
    echo "Hola desde una función estática";
  }
}

// $obj = new clasePrueba();
// $obj->metodoEstatico();

clasePrueba::metodoEstatico();

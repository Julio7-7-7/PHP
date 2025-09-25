<?php
//ARRAYS CON INDICE

$frutas = array("f" => "fresa", "c" => "coco", "p" => "pera", "m" => "manzana");

print_r($frutas);
print_r($frutas["m"]);

//FOR EACH

foreach ($frutas as $indice => &$valor) {
  echo $indice . "=> " . $valor . "<br/>";
  //O echo $frutas[$indice]."<br/>"
}

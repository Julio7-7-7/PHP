<?php
//ARRAYS

$frutas = array("Manzana", "pera", "fresa");

print_r($frutas);

echo "<br/>" . $frutas[0] . "<br/>";

for ($i = 0; $i < count($frutas); $i++) {
  echo $frutas[$i] . "<br/>";
}

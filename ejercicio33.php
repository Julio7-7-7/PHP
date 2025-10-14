<?php

$jsonContenido = '[ 
{"nombre" : "Julio", "apellido":"toledo"},
{"nombre" : "Cesar", "apellido":"vaca"}
]';

$resultado = json_decode($jsonContenido);
//print_r($resultado);

"/br";
foreach ($resultado as $persona) {
  print_r($persona->nombre . " " . $persona->apellido . " ");
}

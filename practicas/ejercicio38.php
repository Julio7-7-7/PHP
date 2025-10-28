<?php
//leyendo el contenido de un archivo
$archivo = "contenido.txt";

$archivoAbierto = fopen($archivo, "r");

$contenido = fread($archivoAbierto, filesize($archivo));

print_r($contenido);

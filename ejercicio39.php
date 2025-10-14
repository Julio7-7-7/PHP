<?php

$nombreArchivo = "archivo.txt";

$contenidoArchivo = "Hola soy un txt waos";

$archivoACrear = fopen($nombreArchivo, "w");

fwrite($archivoACrear, $contenidoArchivo);

fclose($archivoACrear);

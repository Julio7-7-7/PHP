<?php
// INSERT INTO `alumnos` (`id`, `nombre`, `apellidos`) VALUES (NULL, 'Julio', 'Toledo');

include_once '../configuraciones/bd.php';
$conexionBD = BD::crearInstancia();

$consulta = $conexionBD->prepare("SELECT * FROM alumnos");
$consulta->execute();
$listaAlumnos = $consulta->fetchAll();

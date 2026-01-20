<?php
// INSERT INTO `cursos` (`id`, `nombre_curso`) VALUES (NULL, 'Sistema web con php');

include_once '../configuraciones/bd.php';
$conexionBD = BD::crearInstancia();

$consulta = $conexionBD->prepare("SELECT * FROM cursos");
$consulta->execute();
$listaCursos = $consulta->fetchAll();

<?php
// INSERT INTO `cursos` (`id`, `nombre_curso`) VALUES (NULL, 'Sistema web con php');

include_once '../configuraciones/bd.php';
$conexionBD = BD::crearInstancia();

$consulta = $conexionBD->prepare("SELECT * FROM cursos");
$consulta->execute();
$listaCursos = $consulta->fetchAll();

$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$nombre_curso = (isset($_POST['nombre_curso'])) ? $_POST['nombre_curso'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

if ($action) {
  switch ($accion) {
    case "agregar":
      $sql = "INSERT INTO cursos (id, nombre_curso) VALUES (NULL, '$nombre_curso')";
      //$conexionBD->ejecutarConsulta($sql);
      echo $sql;
      break;
  }
}

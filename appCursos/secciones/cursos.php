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

if ($accion) {
  switch ($accion) {
    case "agregar":
      // 1. Usamos el marcador :nombre_curso (el "enchufe")
      $sql = "INSERT INTO cursos (id, nombre_curso) VALUES (NULL, :nombre_curso)";

      $consulta = $conexionBD->prepare($sql);

      // 2. Vinculamos la variable al marcador
      $consulta->bindParam(':nombre_curso', $nombre_curso);

      // 3. Ejecutamos
      $consulta->execute();
      header("Location: vista_cursos.php");
      echo "Curso agregado con éxito";
      break;
  }
  switch ($accion) {
    case "editar":
      $sql = "UPDATE cursos SET nombre_curso='$nombre_curso' WHERE id='$id'";
      //$conexionBD->ejecutarConsulta($sql);
      echo $sql;
      break;
  }
  switch ($accion) {
    case "borrar":
      $sql = "DELETE FROM cursos WHERE id='$id'";
      //$conexionBD->ejecutarConsulta($sql);
      echo $sql;
      break;
  }
}

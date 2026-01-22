<?php

include_once '../configuraciones/bd.php';
$conexionBD = BD::crearInstancia();

//Llamado a todos los registros de la base de datos
$consulta = $conexionBD->prepare("SELECT * FROM cursos");
$consulta->execute();
$listaCursos = $consulta->fetchAll();

//Recepción de datos del formulario
$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$nombre_curso = (isset($_POST['nombre_curso'])) ? $_POST['nombre_curso'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

//Recepción de la acción seleccionada
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
      $sql = "UPDATE cursos SET nombre_curso= :nombre_curso WHERE id= :id";
      $consulta = $conexionBD->prepare($sql);
      $consulta->bindParam(':nombre_curso', $nombre_curso);
      $consulta->bindParam(':id', $id);
      $consulta->execute();
      header("Location: vista_cursos.php");
      echo "Curso actualizado con éxito";
      break;
  }

  switch ($accion) {
    case "borrar":
      $sql = "DELETE FROM cursos WHERE id= :id";
      $consulta = $conexionBD->prepare($sql);
      $consulta->bindParam(':id', $id);
      $consulta->execute();
      header("Location: vista_cursos.php");
      echo "Curso eliminado con éxito";
      break;
  }

  switch ($accion) {
    case "Seleccionar":
      $sql = "SELECT * FROM cursos WHERE id=:id";
      $consulta = $conexionBD->prepare($sql);
      $consulta->bindParam(':id', $id);
      $consulta->execute();
      $curso = $consulta->fetch(PDO::FETCH_ASSOC);
      $nombre_curso = $curso['nombre_curso'];
      break;
  }
}

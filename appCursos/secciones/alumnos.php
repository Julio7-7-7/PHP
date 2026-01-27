<?php
// INSERT INTO `alumnos` (`id`, `nombre`, `apellidos`) VALUES (NULL, 'Julio', 'Toledo');

include_once '../configuraciones/bd.php';
$conexionBD = BD::crearInstancia();

//Llamado a todas las personas de la base de datos
$consulta = $conexionBD->prepare("SELECT * FROM alumnos");
$consulta->execute();
$listaAlumnos = $consulta->fetchAll();

//Llamado a todos los cursos de la base de datos
$consulta = $conexionBD->prepare("SELECT * FROM cursos");
$consulta->execute();
$listaCursos = $consulta->fetchAll();

//llamado a todos los cursos asignados a los alumnos
foreach ($listaAlumnos as $alumno) {
  $sql = "SELECT * FROM cursos WHERE id IN (SELECT curso_id FROM alumnos_curso WHERE alumno_id = :alumno_id)";
  $consulta = $conexionBD->prepare($sql);
  $consulta->bindParam(':alumno_id', $alumno['id']);
  $consulta->execute();
  $cursosAsignados = $consulta->fetchAll();
  $alumno['cursos'] = $cursosAlumno;
}



//Recepción de datos del formulario

$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
$apellidos = (isset($_POST['apellidos'])) ? $_POST['apellidos'] : "";
$cursos = (isset($_POST['cursos'])) ? $_POST['cursos'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

//Recepción de la acción seleccionada
if ($accion) {
  switch ($accion) {
    case "guardar":
      // 1. Usamos el marcador :nombre (el "enchufe")
      $sql = "INSERT INTO alumnos (id, nombre, apellidos) VALUES (NULL, :nombre, :apellidos)";
      $consulta = $conexionBD->prepare($sql);
      // 2. Vinculamos la variable al marcador
      $consulta->bindParam(':nombre', $nombre);
      $consulta->bindParam(':apellidos', $apellidos);
      // 3. Ejecutamos
      $consulta->execute();
      header("Location: vista_alumnos.php");
      echo "Alumno agregado con éxito";
      $idAlumno = $conexionBD->lastInsertId();
      break;
  }

  switch ($accion) {
    case "Seleccionar":
      $sql = "SELECT * FROM alumnos WHERE id=:id";
      $consulta = $conexionBD->prepare($sql);
      $consulta->bindParam(':id', $id);
      $consulta->execute();
      $alumno = $consulta->fetch(PDO::FETCH_ASSOC);
      $nombre = $alumno['nombre'];
      $apellidos = $alumno['apellidos'];
      break;
  }

  switch ($accion) {
    case "editar":
      $sql = "UPDATE alumnos SET nombre= :nombre, apellidos= :apellidos WHERE id= :id";
      $consulta = $conexionBD->prepare($sql);
      $consulta->bindParam(':nombre', $nombre);
      $consulta->bindParam(':apellidos', $apellidos);
      $consulta->bindParam(':id', $id);
      $consulta->execute();
      header("Location: vista_alumnos.php");
      echo "Alumno actualizado con éxito";
      break;
  }

  switch ($accion) {
    case "eliminar":
      $sql = "DELETE FROM alumnos WHERE id= :id";
      $consulta = $conexionBD->prepare($sql);
      $consulta->bindParam(':id', $id);
      $consulta->execute();
      header("Location: vista_alumnos.php");
      echo "Alumno eliminado con éxito";
      break;
  }
}

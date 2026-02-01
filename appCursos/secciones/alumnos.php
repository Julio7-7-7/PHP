<?php

include_once '../configuraciones/bd.php';
$conexionBD = BD::crearInstancia();

//Recepción de datos del formulario
$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
$apellidos = (isset($_POST['apellidos'])) ? $_POST['apellidos'] : "";
$listaCursos = (isset($_POST['cursos'])) ? $_POST['cursos'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

//Llamado a todas las personas de la base de datos
$consulta = $conexionBD->prepare("SELECT * FROM alumnos");
$consulta->execute();
$listaAlumnos = $consulta->fetchAll();

//llamado a todos los cursos de la base de datos
$consulta = $conexionBD->prepare("SELECT * FROM cursos");
$consulta->execute();
$listaCursos = $consulta->fetchAll();
print_r($listaCursos);

//leyendo los cursos asignados al alumno
foreach ($listaAlumnos as $clave => $alumno) {
  $sql = "SELECT * FROM cursos
  WHERE id IN (SELECT idcurso FROM alumnos_cursos WHERE idalumno=:idalumno)";

  $consulta = $conexionBD->prepare($sql);
  $consulta->bindParam(':idalumno', $alumno['id']);
  $consulta->execute();
  $cursosAlumno = $consulta->fetchAll();
  $listaAlumnos[$clave]['cursos'] = $cursosAlumno;
}

//Recepción de la acción seleccionada
if ($accion) {
  switch ($accion) {
    case "guardar":
      // 1. Insertar el alumno (esto ya lo tienes bien)
      $sql = "INSERT INTO alumnos (id, nombre, apellidos) VALUES (NULL, :nombre, :apellidos)";
      $consulta = $conexionBD->prepare($sql);
      $consulta->bindParam(':nombre', $nombre);
      $consulta->bindParam(':apellidos', $apellidos);
      $consulta->execute();

      $idAlumno = $conexionBD->lastInsertId();

      // 2. Insertar en la tabla intermedia
      if (!empty($cursosSeleccionados)) {
        // Preparamos la consulta una sola vez
        $sqlIntermedia = "INSERT INTO alumnos_cursos (id, idalumno, idcurso) VALUES (NULL, :idalumno, :idcurso)";
        $consultaIntermedia = $conexionBD->prepare($sqlIntermedia);

        foreach ($cursosSeleccionados as $idCursoIndividual) {
          // $idCursoIndividual aquí ya es un número (ej: "1", "3"), no un array
          $consultaIntermedia->bindParam(':idalumno', $idAlumno);
          $consultaIntermedia->bindParam(':idcurso', $idCursoIndividual);
          $consultaIntermedia->execute();
        }
      }

      header("Location: vista_alumnos.php");
      exit();
      break;
  }
}

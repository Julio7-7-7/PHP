<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php

// INSERCIÓN
if ($_POST) {
  $nombre = $_POST["nProject"];
  $descripcion = $_POST["pDesc"];

  // Datos del archivo
  $imagen = $_FILES["pImg"]["name"];
  $imagenTmp = $_FILES["pImg"]["tmp_name"];

  // Generar nombre único con timestamp
  $fecha = new DateTime();
  $nombreImagenFinal = $fecha->getTimestamp() . "_" . $imagen;

  // Carpeta destino (asegúrate de que exista)
  $rutaDestino = "Imagenes/" . $nombreImagenFinal;

  // Mover archivo desde carpeta temporal a tu carpeta Imagenes
  move_uploaded_file($imagenTmp, $rutaDestino);

  $objConexion = new conexion();
  $sql = "INSERT INTO proyectos (id, nombre, imagen, descripcion)
          VALUES (NULL, '$nombre', '$nombreImagenFinal', '$descripcion')";
  $objConexion->ejecutar($sql);

  header("location:portafolio.php");
  exit();
}


//ELIMINACIÓN
if (isset($_GET["borrar"])) {
  $objConexion = new conexion();
  $id = $_GET["borrar"];

  // Obtener el nombre real del archivo
  $imagen = $objConexion->consultar("SELECT imagen FROM proyectos WHERE id=" . $id);

  // Si existe el archivo, eliminarlo
  if (!empty($imagen[0]['imagen']) && file_exists("Imagenes/" . $imagen[0]['imagen'])) {
    unlink("Imagenes/" . $imagen[0]['imagen']);
  }

  // Eliminar el registro de la base de datos
  $sqlDelete = "DELETE FROM proyectos WHERE id = " . $id;
  $objConexion->ejecutar($sqlDelete);

  header("location:portafolio.php");
  exit();
}


//LECTURA
$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM proyectos");

?>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">Datos Del proyecto</div>
        <div class="card-body">

          <form action="portafolio.php" method="post" enctype="multipart/form-data">
            <br>

            <div>
              <label for="nProject">Nombre del proyecto</label>
              <input type="text" name="nProject" id="nProject" class="form-control">
            </div>

            <br>

            <div>
              <label for="pImg">Archivo</label>
              <input type="file" name="pImg" id="pImg" class="form-control">
            </div>

            <br>

            <div>
              <label for="pDesc">Descripción</label>
              <br>
              <textarea name="pDesc" id="pDesc" placeholder="Comentarios del proyecto..."></textarea>
            </div>

            <div>
              <input type="submit" value="Enviar" class="btn btn-success">
            </div>

          </form>

        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="table-responsive">

        <table class="table table-primary">

          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Imagen</th>
              <th scope="col">Descripción</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($proyectos as $proyecto) { ?>
              <tr class="">
                <td scope="row"><?php echo $proyecto['id']; ?></td>
                <td scope="row"><?php echo $proyecto['nombre']; ?></td>
                <td scope="row"><img src="Imagenes/<?php echo $proyecto['imagen']; ?>" width="120"></td>
                <td scope="row"><?php echo $proyecto['descripcion']; ?></td>
                <td scope="row"><a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>">Eliminar</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>

        </table>
      </div>
    </div>

  </div>
</div>










<?php
include("pie.php");
?>
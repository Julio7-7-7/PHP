<?php
include("header.php");

//CREAR CONEXIÓN
include("conexion.php");
$objetoConexion = new conexion();

//CONSULTA PARA MOSTRAR TODO
$sqlRead = "SELECT * FROM universitario";
$universitarios = $objetoConexion->leer($sqlRead);

//INSERCIÓN DE DATOS
if ($_POST) {
  //DATOS DEL ESTUDIANTE
  $sName = $_POST["sName"];
  $sReg = $_POST["sReg"];
  $sCarr = $_POST["sCarr"];

  //DATOS DE LAS IMAGENES
  $sImg = $_FILES["sImg"]["name"];
  $sImgTemp = $_FILES["sImg"]["tmp_name"];

  //CREAR UN NOMBRE UNICO
  $fecha = new DateTime();
  $nombreFinal = $fecha->getTimestamp() . "_" . $sImg;

  //RUTA PARA GUARDAR EN EL SERVIDOR
  $ruta = "fotos/" . $nombreFinal;

  //MOVER A LA CARPETA DE DESTINO
  move_uploaded_file($sImgTemp, $ruta);

  if (isset($_POST["sName"]) && isset($_POST["sReg"])) {
    $check = "SELECT COUNT(*) FROM universitario WHERE registro = '$sReg'";
    $result = $objetoConexion->leer($check);

    if ($result[0][0] == 0) {
      $sqlInsert = "INSERT INTO universitario (registro, nombre, carrera, foto) VALUES ('$sReg', '$sName', '$sCarr', '$nombreFinal')";
      $objetoConexion->ejecutar($sqlInsert);
      header("Location: estudiante.php");
      exit();
    } else {
      echo "<script>alert('⚠️ Ya existe un estudiante con ese número de registro');</script>";
    }
  }
}

//ELIMINAR UN REGISTRO
if ($_GET) {
  if (isset($_GET["borrar"])) {
    $objetoConexion = new conexion();
    $registro = $_GET["borrar"];

    $sImg = $objetoConexion->leer("SELECT foto FROM universitario WHERE registro = " . $registro);

    if (!empty($sImg[0]['foto']) && file_exists("fotos/" . $sImg[0]['foto'])) {
      unlink("fotos/" . $sImg[0]['foto']);
    }

    $sqlDelete = "DELETE FROM `universitario` WHERE registro = $registro";
    $objetoConexion->ejecutar($sqlDelete);
    header("location:estudiante.php");
    exit();
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estudiantes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <h2>Información de los estudiantes</h2>

  <form action="estudiante.php" method="post" enctype="multipart/form-data">

    <div>
      <h3>Por favor introduzca los datos del estudiante</h3>
    </div>

    <div>
      <label for="sName">Nombre</label>
      <input type="text" name="sName" id="sName" placeholder="ej: Juan Pérez">
    </div>

    <div>
      <label for="sReg">Registro</label>
      <input type="text" name="sReg" id="sReg" placeholder="12345678" pattern="\d*" inputmode="numeric">
    </div>

    <div>
      <label for="sReg">Carrera</label>
      <input type="text" name="sCarr" id="sCarr" placeholder="Ing. Sistemas">
    </div>

    <div>
      <label for="sReg">Foto</label>
      <br>
      <input type="file" name="sImg" id="sImg">
    </div>

    <div>
      <input type="submit" value="Registrar">
    </div>

  </form>

  <?php if (!empty($universitarios)) { ?>
    <div class="container py-5">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body">
          <h3 class="text-center mb-4 text-primary fw-bold">Tabla de Estudiantes</h3>

          <table class="table table-striped table-hover align-middle text-center">
            <thead class="table-dark">
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Registro</th>
                <th scope="col">Carrera</th>
                <th scope="col">Foto</th>
                <th scope="col">Borrar</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($universitarios as $universitario) { ?>
                <tr>
                  <td><?php echo $universitario["nombre"] ?></td>
                  <td><?php echo $universitario["registro"] ?></td>
                  <td><?php echo $universitario["carrera"] ?></td>
                  <td><?php echo $universitario["foto"] ?></td>
                  <td><a class="btn btn-danger" href="?borrar=<?php echo $universitario['registro']; ?>">Eliminar</a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  <?php } ?>



</body>

</html>
<?php
include("footer.php");
?>
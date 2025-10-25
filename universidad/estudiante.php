<?php
include("header.php");

include("conexion.php");
$objetoConexion = new conexion();

$sqlRead = "SELECT * FROM universitario";
$universitarios = $objetoConexion->leer($sqlRead);

if ($_POST) {
  $sName = $_POST["sName"];
  $sReg = $_POST["sReg"];

  if(isset($_POST[""]))
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

  <form action="estudiante.php" method="post">
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
      <input type="submit" value="Registrar">
    </div>
  </form>

  <div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4">
      <div class="card-body">
        <h3 class="text-center mb-4 text-primary fw-bold">Tabla de Estudiantes</h3>

        <table class="table table-striped table-hover align-middle text-center">
          <thead class="table-dark">
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Registro</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($universitarios as $universitario) { ?>
              <tr>
                <td><?php echo $universitario["nombre"] ?></td>
                <td><?php echo $universitario["registro"] ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>



</body>

</html>
<?php
include("footer.php");
?>
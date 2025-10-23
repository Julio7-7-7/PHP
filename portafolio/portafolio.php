<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php

if ($_POST) {
  $nombre = $_POST["nProject"];
  // $imagen = $_POST["pImg"];
  $objConexion = new conexion();
  $sql = "INSERT INTO proyectos (id, nombre, imagen, descripcion)
  VALUES (NULL, '$nombre' , 'imagen3.jpg', 'Tercer proyecto')";
  $objConexion->ejecutar($sql);
}

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
                <td scope="row"><?php echo $proyecto['id'] ?></td>
                <td scope="row"><?php echo $proyecto['nombre'] ?></td>
                <td scope="row"><?php echo $proyecto['imagen'] ?></td>
                <td scope="row"><?php echo $proyecto['descripcion'] ?></td>
                <td scope="row"><a class="btn btn-danger" href="#">Eliminar</a>
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
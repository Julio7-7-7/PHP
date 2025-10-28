<?php
include("cabecera.php");
include("conexion.php");

//LECTURA
$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM proyectos");
?>

<div class="row align-items-md-stretch">
  <div class="col-md-6">
    <div
      class="h-100 p-5 text-white bg-primary border rounded-3">
      <h2>Bienvenidos</h2>
      <p>Esta es la página principal de los portafolios</p>
    </div>
  </div>
</div>




<div class="card-deck">
  <?php foreach ($proyectos as $proyecto) { ?>

    <div class="card">
      <img class="card-img-top" src="Imagenes/<?php echo $proyecto['imagen']; ?>" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?php echo $proyecto['nombre']; ?></h5>
        <p class="card-text"><?php echo $proyecto['descripcion']; ?></p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>

  <?php } ?>
</div>

<?php
include("pie.php");
?>
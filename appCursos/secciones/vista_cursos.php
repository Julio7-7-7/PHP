<?php include('../templates/cabecera.php'); ?>
<?php include('../secciones/cursos.php'); ?>

<h1>Vista Cursos</h1>
<br>

<div class="col-md-5">
  <form action="" method="post">
    <div class="card">
      <div class="card-header">Cursos</div>

      <div class="card-body">
        <div class="mb-3">
          <label class="form-label">ID</label>
          <input type="text" class="form-control" name="id" id="id" placeholder="ID">
        </div>

        <div class="mb-3">
          <label class="form-label">Nombre del curso</label>
          <input type="text" class="form-control" name="nombre_curso" id="nombre_curso" placeholder="Nombre del curso">
        </div>

        <div class="btn-group" role="group">
          <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
          <button type="submit" name="accion" value="editar" class="btn btn-warning">Editar</button>
          <button type="submit" name="accion" value="borrar" class="btn btn-danger">Borrar</button>
        </div>
      </div>
    </div>
  </form>
</div>

<div class="col-md-7">
  <div class="table-responsive">
    <table class="table table-dark">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($listaCursos as $curso) { ?>
          <tr>
            <td> <?php echo $curso['id'] ?></td>
            <td><?php echo $curso['nombre_curso'] ?></td>
            <td>Seleccionar</td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<?php include('../templates/pie.php'); ?>
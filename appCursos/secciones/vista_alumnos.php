<?php include('../templates/cabecera.php'); ?>
<?php include('../secciones/alumnos.php'); ?>

<h1>Vista alumnos</h1>

<div class="container-fluid mt-4">
  <div class="row">

    <div class="col-md-3">
      <div class="card shadow">
        <div class="card-header bg-primary text-white">
          <h5 class="mb-0">Datos del Usuario</h5>
        </div>
        <div class="card-body">
          <form action="" method="POST">
            <div class="mb-2">
              <label class="form-label">ID</label>
              <input type="text" name="id" class="form-control form-control-sm" placeholder="ID" value="<?php echo $id ?>">
            </div>
            <div class="mb-2">
              <label class="form-label">Nombre</label>
              <input type="text" name="nombre" class="form-control form-control-sm" placeholder="Nombre" value="<?php echo $nombre ?>">
            </div>
            <div class="mb-3">
              <label class="form-label">Apellidos</label>
              <input type="text" name="apellidos" class="form-control form-control-sm" placeholder="Apellidos" value="<?php echo $apellidos ?>">
            </div>

            <div class="d-grid gap-2">
              <button type="submit" name="accion" value="guardar" class="btn btn-success btn-sm">Guardar</button>
              <div class="btn-group">
                <button type="submit" name="accion" value="editar" class="btn btn-warning btn-sm">Editar</button>
                <button type="submit" name="accion" value="eliminar" class="btn btn-danger btn-sm">Eliminar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-9">
      <div class="table-responsive shadow-sm">
        <table class="table table-hover table-bordered align-middle">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th class="text-center">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($listaAlumnos as $alumnos) { ?>
              <tr>
                <td><?php echo $alumnos['id'] ?></td>
                <td><?php echo $alumnos['nombre'] ?></td>
                <td><?php echo $alumnos['apellidos'] ?></td>
                <td class="text-center">
                  <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="<?php echo $alumnos['id'] ?>">
                    <input type="submit" value="Seleccionar" name="accion" class="btn btn-info btn-sm">
                  </form>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>


<?php include('../templates/pie.php'); ?>
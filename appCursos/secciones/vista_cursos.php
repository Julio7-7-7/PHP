<?php include('../templates/cabecera.php'); ?>


<h1>Vista Cursos</h1>

<div class="col-md-5">

  <form action="" method="post">
    <div class="card">
      <div class="card-header">Cursos</div>
      <div class="card-body">
        <div class="mb-3">
          <label for="" class="form-label">ID</label>
          <input type="text"
            class="form-control"
            name="id"
            id="id"
            aria-describedby="helpId"
            placeholder="ID" />
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Nombre del curso</label>
          <input
            type="text"
            class="form-control"
            name="nombre_curso"
            id="nombre_curso"
            aria-describedby="helpId"
            placeholder="Nombre del curso" />
        </div>

        <div class="btn-group" role="group" aria-label="Button group name">
          <button type="button" class="btn btn-primary"> Agregar </button>
          <button
            type="button"
            class="btn btn-primary">
            Editar
          </button>
          <button
            type="button"
            class="btn btn-primary">
            Borrar
          </button>
        </div>

      </div>
    </div>
  </form>

</div>
<div class="col-md-7">

</div>




<?php include('../templates/pie.php'); ?>
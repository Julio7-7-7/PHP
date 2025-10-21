<?php

include("cabecera.php");
?>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">Datos Del proyecto</div>
        <div class="card-body">
          <form action="portafolio.php" method="post">

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
            </tr>
          </thead>

          <tbody>
            <tr class="">
              <td scope="row">3</td>
              <td>Aplicación Web</td>
              <td>Imagen.jpg</td>
            </tr>
          </tbody>

        </table>
      </div>
    </div>

  </div>
</div>










<?php
include("pie.php");
?>
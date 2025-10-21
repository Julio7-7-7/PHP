<?php
session_start();
if ($_POST) {
  if (($_POST["userName"] == "julius") && ($_POST["uPassword"] == "root")) {
    header("location:index.php");
    $_SESSION["usuario"] = "julius";
  } else {
    echo "<script> alert('Usuario incorrecto'); </script>";
  }
}
?>



<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous" />
</head>

<body>

  <div class="container">

    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">

        <br>
        <div class="card">
          <div class="card-header">Iniciar Sesión</div>
          <div class="card-body">
            <form action="login.php" method="post">

              <div>
                <label for="userName">Usuario</label>
                <input type="text" id="userName" name="userName" class="form-control">
              </div>
              
              <div>
                <label for="uPassword">Contraseña</label>
                <input type="password" id="uPassword" name="uPassword" class="form-control">
              </div>
              <br>

              <div>
                <input type="submit" value="Ingresar" class="btn btn-success">
              </div>

            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>


  </div>

</body>

</html>
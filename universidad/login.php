<?php
session_start();
if ($_POST) {
  if (isset($_POST["user"]) && isset($_POST["pass"])) {
    if ($_POST["user"] == "julius" && $_POST["pass"] == "root") {
      header("location:index.php");
      $_SESSION["usuario"] = $_POST["user"];
    } else {
      echo "<script> alert('Incorrecto');</script>";
    }
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <h2>Bienvenido a la universidad</h2>
  <form action="login.php" method="post">
    <div>
      <label for="user">Usuario</label>
      <input type="text" name="user" id="user">
    </div>
    <br>
    <div>
      <label for="pass">Contraseña</label>
      <input type="password" name="pass" id="pass">
    </div>
    <br>
    <div>
      <input type="submit" value="Ingresar">
    </div>
  </form>
</body>

</html>
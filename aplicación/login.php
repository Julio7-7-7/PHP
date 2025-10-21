<?php
session_start();
if ($_POST) {
  if (isset($_POST["uName"]) && isset($_POST["uPass"])) {
    if ($_POST["uName"] == "julius" && $_POST["uPass"] == "root") {
      header("location:index.php");
      $_SESSION["usuario"] = $_POST["uName"];
    } else {
      echo "<script> alert('Usuario incorrecto'); </script>";
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
</head>

<body>
  <h1>Por favor ingrese los datos</h1>
  <form action="login.php" method="post">

    <div>
      <label for="uName">Usuario</label>
      <input type="text" name="uName" id="uName">
    </div>

    <div>
      <label for="uPass">Password</label>
      <input type="password" name="uPass" id="uPass">
    </div>

    <div>
      <input type="submit" value="Ingresar">
    </div>
  </form>
</body>

</html>
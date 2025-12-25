<?php

// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//   if (!empty($_POST["userName"]) && !empty($_POST["userPass"])) {
//     session_start();
//     $_SESSION["usuario"] = $_POST["userName"];
//     print_r($_SESSION);
//     header("location:/views/index.html");
//   }
// }

if ($_POST) {
  if (isset($_POST["userName"]) && isset($_POST["userPass"])) {
    echo "hola";
  }
}

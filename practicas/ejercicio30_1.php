<?php

session_start();

if (isset($_SESSION["usuario"])) {
  echo "Sesión iniciada como " . $_SESSION["usuario"] . "<br>";
  echo "Estados :" . $_SESSION["status"];
} else {
  echo "No hay datos";
}

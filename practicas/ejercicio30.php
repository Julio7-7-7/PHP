<?php

session_start();

$_SESSION["usuario"] = "julius";
$_SESSION["status"] = "logueado";

echo "Sesión iniciada como " . $_SESSION["usuario"] . "<br>";
echo "Estado :" . $_SESSION["status"];

<?php

$txtName = "";
$lenguaje = "";
$cbHTML = "";
$cbCSS = "";
$cbJS = "";

if ($_POST) {
  $txtName = isset($_POST["txtName"]) ? trim($_POST["txtName"]) : "";
  $dato = !empty($txtName);

  $lenguaje = isset($_POST["lenguaje"]) ? $_POST["lenguaje"] : "";

  $cbHTML = (isset($_POST["cbHTML"]) == "si")  ? "checked" : "";
  $cbCSS = (isset($_POST["cbCSS"]) == "si") ? "checked" : "";
  $cbJS = (isset($_POST["cbJS"]) == "si") ? "checked" : "";
} else {
  $dato = false;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>

<body>
  <form action="PracticaForms.php" method="post">

    <!-- Sección de datos personales -->
    <section>
      <?php if ($dato == true) { ?>
        <strong>Hola: </strong><?php echo $txtName . " Te gusta " . $lenguaje; ?>
      <?php } ?>

      <br>
      <div>
        <label for="txtName">Ingrese su nombre</label>
        <input type="text" name="txtName" id="txtName" value=<?php echo $txtName; ?>>
      </div>
    </section>

    <br>
    <!-- Sección de gusta -->
    <section>
      <h3>Te gusta...</h3>
      <div>
        <label for="rdHTML">HTML</label>
        <input type="radio" name="lenguaje" id="rdHTML" value="html" <?php echo ($lenguaje == "html") ? "checked" : ""; ?>>
      </div>
      <div>
        <label for="rdCSS">CSS</label>
        <input type="radio" name="lenguaje" id="rdCSS" value="css" <?php echo ($lenguaje == "css") ? "checked" : ""; ?>>
      </div>
      <div>
        <label for="rdJS">JS</label>
        <input type="radio" name="lenguaje" id="rdJS" value="js" <?php echo ($lenguaje == "js") ? "checked" : ""; ?>>
      </div>
    </section>

    <!-- Sección aprendizaje -->
    <section>
      <h3>Estás aprendiendo...</h3>
      <div>
        <label for="cbHTML">HTML</label>
        <input type="checkbox" name="cbHTML" id="cbHTML" value="si" <?php echo $cbHTML; ?>>
      </div>
      <div>
        <label for="cbCSS">CSS</label>
        <input type="checkbox" name="cbCSS" id="cbCSS" value="si" <?php echo $cbCSS; ?>>
      </div>
      <div>
        <label for="cbJS">JS</label>
        <input type="checkbox" name="cbJS" id="cbJS" value="si" <?php echo $cbJS; ?>>
      </div>
    </section>

    
    <div>
      <br>
      <input type="submit" value="Enviar Información">
    </div>
  </form>
</body>

</html>
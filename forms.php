<?php

//Sección Datos Personales
$nombre = "";
$identificado = "";

// Sección de lenguaje favorito
$rdLenguaje = "";

//Sección de aprendizaje
$cbPHP = "";
$cbPython = "";
$cbPascal = "";

//Sección de navegador favorito
$slNav = "";



if ($_POST) {
  $nombre = isset($_POST["personName"]) ? trim($_POST["personName"]) : "";
  $identificado = !empty($nombre);

  $rdLenguaje = isset($_POST["rdLenguaje"]) ? $_POST["rdLenguaje"] : "";

  $cbPHP = isset($_POST["cbPHP"]) ? $_POST["cbPHP"] : "";
  $cbPython = isset($_POST["cbPython"]) ? $_POST["cbPython"] : "";
  $cbPascal = isset($_POST["cbPascal"]) ? $_POST["cbPascal"] : "";

  $slNav = isset($_POST["slNav"]) ? $_POST["slNav"] : "";
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
  <form action="forms.php" method="post">
    <?php if ($identificado == true) { ?>
      <strong> Hola: </strong> <?php echo "Tu nombre es " . $nombre . " y tu lenguaje favorito es " . $rdLenguaje; ?>
      <br>
      <strong>Además de eso estás aprendiendo : </strong> <?php echo $cbPHP . " " . $cbPascal . " " . $cbPython; ?>
      <br>
      <strong>Y tu navegador favorito es </strong><?php echo $slNav; ?>
    <?php } ?>

    <!-- Sección datos personales -->
    <section>
      <div>
        <h3>Ingresa tu nombre</h3>
        <label for="personName">Nombre:</label>
        <input type="text" name="personName" id="personName" value="<?php echo $nombre ?>">
      </div>
    </section>

    <!--Sección de gustos-->
    <section>
      <div>
        <h3>Qué lenguaje de programación te gusta más?</h3>
        <br>
        <label for="rdHTML">HTML</label>
        <input type="radio" name="rdLenguaje" id="rdHTML" value="HTML" <?php echo ($rdLenguaje == "HTML") ?   "checked" : ""; ?>>
        <br>
        <label for="rdCSS">CSS</label>
        <input type="radio" name="rdLenguaje" id="rdCSS" value="CSS" <?php echo ($rdLenguaje == "CSS") ? "checked" : "" ?>>
        <br>
        <label for="rdJS">JS</label>
        <input type="radio" name="rdLenguaje" id="rdJS" value="JS" <?php echo ($rdLenguaje == "JS") ? "checked" : ""; ?>>
      </div>
    </section>


    <!--Sección de aprendizaje-->
    <section>
      <h3>Estás aprendiendo: </h3>
      <label for="cbPHP">PHP</label>
      <input type="checkbox" name="cbPHP" id="cbPHP" value="PHP" <?php echo ($cbPHP == "PHP") ? "checked" : ""; ?>>
      <label for="cbPython">Python</label>
      <input type="checkbox" name="cbPython" id="cbPython" value="Python" <?php echo ($cbPython == "Python") ? "checked" : ""; ?>>
      <label for="cbPascal">Pascal</label>
      <input type="checkbox" name="cbPascal" id="cbPascal" value="Pascal" <?php echo ($cbPascal == "Pascal") ? "checked" : ""; ?>>
    </section>

    <!--Sección de selecciones-->
    <section>
      <h3>Seleccione su navegador preferido</h3>
      <select name="slNav" id="slNav">
        <option value="">Seleccione una opcion</option>
        <option value="Brave" <?php echo ($slNav == "Brave") ? "selected" : ""; ?>>Brave</option>
        <option value="Opera" <?php echo ($slNav == "Opera") ? "selected" : ""; ?>>OperaGX</option>
        <option value="Firefox" <?php echo ($slNav == "Firefox") ? "selected" : ""; ?>>Firefox</option>
      </select>

    </section>


    <!--Sección de envios-->
    <section>
      <input type="submit" value="Registrar">
    </section>
  </form>
</body>

</html>
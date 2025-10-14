<?php
$txtNombre = "";
$rdgLenguje = "";
$cbhtml = "";
$cbcss = "";
$cbjs = "";
$lsAnime = "";
$txtDuda = "";


if ($_POST) {
  $txtNombre = (isset($_POST["txtNombre"])) ? $_POST["txtNombre"] : "";
  $rdgLenguje = (isset($_POST["lenguaje"])) ? $_POST["lenguaje"] : "";

  $cbhtml = (isset($_POST["cbhtml"]) == "si") ? "checked" : "";
  $cbcss = (isset($_POST["cbcss"]) == "si") ? "checked" : "";;
  $cbjs = (isset($_POST["cbjs"]) == "si") ? "checked" : "";;

  $lsAnime = (isset($_POST["lsAnime"])) ? $_POST["lsAnime"] : "";

  $txtDuda = (isset($_POST["txtDuda"])) ? $_POST["txtDuda"] : "";
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>

<body>
  <?php if ($_POST) { ?>
    <strong>Hola: </strong> <?php echo $txtNombre . " te gusta " . $rdgLenguje . " y tu anime fav es " . $lsAnime; ?>
    <br>
    <strong>Tu duda es: </strong><?php echo $txtDuda . " cierto?" ?>
  <?php } ?>
  <form action="ejercicio31.php" method="post">

    <div>
      <input type="text" name="txtNombre" id="txtNombre" value="<?php echo $txtNombre; ?>">
    </div>

    <h3>Te gusta...?</h3>

    <div>
      <label for="HTML">HTML</label>
      <input type="radio" name="lenguaje" id="HTML" value="HTML" <?php echo ($rdgLenguje == "HTML") ? "checked" : "" ?>>
    </div>

    <div>
      <label for="CSS">CSS</label>
      <input type="radio" name="lenguaje" id="CSS" value="CSS" <?php echo ($rdgLenguje == "CSS") ? "checked" : ""; ?>>
    </div>

    <div>
      <label for="JS">JS</label>
      <input type="radio" name="lenguaje" id="JS" value="JS" <?php echo ($rdgLenguje == "JS") ? "checked" : "" ?>>
    </div>

    <h3>Estas aprendiendo...?</h3>

    <div>
      <label for="cbhtml">HTML</label>
      <input type="checkbox" name="cbhtml" id="cbhtml" value="si" <?php echo $cbhtml; ?>>
    </div>

    <div>
      <label for="cbcss">CSS</label>
      <input type="checkbox" name="cbcss" id="cbcss" value="si" <?php echo $cbcss; ?>>
    </div>

    <div>
      <label for="cbjs">JS</label>
      <input type="checkbox" name="cbjs" id="cbjs" value="si" <?php echo $cbjs; ?>>
    </div>

    <div>
      <h3>Anime favorito?</h3>
      <select name="lsAnime" id="">
        <option value="">[Ninguno]</option>
        <option value="Naruto" <?php echo ($lsAnime == "Naruto") ? "selected" : "" ?>>Naruto</option>
        <option value="Dragon" <?php echo ($lsAnime == "Dragon") ? "selected" : "" ?>>Dragon Ball</option>
        <option value="Demon" <?php echo ($lsAnime == "Demon") ? "selected" : "" ?>>Demon Slayer</option>
      </select>
    </div>

    <div>
      <h3>Tienes alguna duda?</h3>
      <textarea name="txtDuda" id="txtDuda"></textarea>
    </div>

    <input type="submit" value="Enviar Información">
  </form>
</body>

</html>
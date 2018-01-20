<?php
//Para mandar al mismo archivo puedes dejar el action en blanco
//Variable super global htmlspecialchars($_SERVER['PHP_SELF']);
if($_POST){
  echo $_POST['nombre'];
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
      <input type="text" name="nombre" placeholder="Nombre">
      <br>

      <label for="hombre">Hombre</label>
      <input type="radio" name="sexo" value="hombre" id="hombre">
      <br>

      <label for="mujer">Mujer</label>
      <input type="radio" name="sexo" value="mujer" id="mujer">
      <br>

      <select class="" name="year" id="year">
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
      </select>
      <br>

      <label for="terminos">Acepta los Terminos?</label>
      <input type="checkbox" name="terminos" value="ok">


      <input type="submit" name="" value="Enviar">
    </form>
  </body>
</html>

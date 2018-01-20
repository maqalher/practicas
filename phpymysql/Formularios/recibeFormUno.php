<?php

//print_r($_POST);

/*if($_POST){
  $nombre = $_POST['nombre'];
  $sexo = $_POST['sexo'];
  $year = $_POST['year'];
  $terminos = $_POST['terminos'];

  echo "Hola, $nombre eres $sexo";
}else{
  header('Location: fromuno.php');
}*/


/* Metodo POST

      if(!$_POST){
        header('Location: fromuno.php');
      }

      $nombre = $_POST['nombre'];
      $sexo = $_POST['sexo'];
      $year = $_POST['year'];
      $terminos = $_POST['terminos'];

      echo "Hola, $nombre eres $sexo";
*/

//print_r($_GET);

//$nombre = $_GET['nombre'];
//echo htmlspecialchars($nombre);

if(!$_GET){
  header('Location: fromuno.php');
}

$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];

echo "Hola, $nombre eres $sexo";



?>

<?php

$nombre = "Alan";

echo "Hola, $nombre <br>";

echo gettype($nombre)."<br>";

define ('PI', 3.14)."<br>";

echo PI;

/*Arreglos*/

$semana = array('Lunes', 'Martes', 'Mircoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

$arreglo = ['L', 'M', 'M', 'J', 'V', 'S', 'D'];

//echo $semana[7] = "<br> otro dia <br>";

/*Arreglos asociativos*/

$alex = array('telefono'=>'01800772', 'edad'=>'22', 'apellido'=>'Master', 'pais'=>'Mexico');
echo $alex['apellido']." ".$alex['pais']."<br>";

/*Arreglos multidimencionales*/

$amigos = array(
  array('Alejandro', 20),
  array('Cesar', 21),
  array('Mauel', 18)
);

echo $amigos[1][0]."<br>";

$meses = array(
  "Enero", "Febreo", "Marzo", "Abril",
  "Mayo", "Junio", "Julio", "Agosto",
  "Septiembre", "Octubre", "Noviembre", "Diciembre"
);

echo count($meses)."<br>";


foreach ($meses as $mes) {
  echo $mes."<br>";
}

$i=0;
foreach ($arreglo as $dia){

  echo "El dia $i es: $dia <br>";
  $i++;
}

$semana[7] = "diaNuevo";
$semana[8] = "ortoDia";

foreach ($semana as $dias){
  echo "$dias ";
}

echo "<br>";

$numeros = array(18,4,56,3,20,35);

sort($numeros);
sort($meses);

foreach ($numeros as $num){
  echo "$num ";
}

rsort($numeros);

foreach ($numeros as $num){
  echo "$num ";
}

foreach ($meses as $mes) {
  echo "$mes ";
}

/*Operador Cadena*/
$texo = "Mensaje";
$texo .= " otro Mensaje";

echo "<br>$texo<br>";


/*Switch*/

$mes = 'Enero';

switch($mes){
  case 'Diciembre':
    echo "Feliz Navidad";
    break;
  case 'Enero':
    echo "Feliz Año";
    break;
  default:
    echo "Este mes no se celebra nada";
    break;
}

echo "<br><br>";

$genero = "ska";

switch($genero){
  case 'ska':
    echo "Escucha a los Autenticos";
    break;
  case 'rock':
    echo "Escucha Kiss";
    break;
  case 'pop':
    echo "Escucha Rio Roma";
    break;
  default:
    echo "Pon un genro";
    break;
}

echo "<br>";
/*isset*/

//(isset($edad))

$edad = 18;

$edad = (isset($edad))?$edad:'El usuario no establecio su edad';

echo $edad;


$edad = 19;

$edad = ($edad>=18)?'Eres mayor de edad':'Eres menor de edad';

echo "<br>".$edad;

$var = "";

if (isset($var)) {
    echo "Si esta seteada";
}

echo "<br><br>";


//$myVar; //si no tiene valor no ejecuta al accion
$myVar = "Alan";

if(isset($myVar)){
  echo "Hola $myVar";
}else{
  echo "No reconozco tu nombre";
}

for($i=1; $i<=10; $i++){
  echo "Hola".$i."<br>";
}

?>

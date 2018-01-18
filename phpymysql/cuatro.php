<?php

$paises = ['Mexico', 'Alemania', 'Corea', 'Brasil'];

var_dump($paises);
echo "<br>";

print_r($paises);
echo "<br>";

/*Funciones*/

echo "<br>***************************************<br>";

function saludo(){
  echo 'Hola';
}

saludo();

echo "<br>***************************************<br>";

function saludos($nombre){
  echo "Hola $nombre";
}

saludos("Alan");

echo "<br>***************************************<br>";

function suma($num1, $num2){
  $resultado = $num1 + $num2;
  echo $resultado;
}

suma(10,5);

//Trata de evitar poner echo dentro de una funcion
echo "<br>***************************************<br>";


function sumaDos($num1, $num2){
  $resultado = $num1 + $num2;
  return $resultado;
}

$resultado = sumaDos(10,10);

echo "El resultado de la suma es: $resultado";

echo "<br>***************************************<br>";

//Las funciones deben de procurar hacer solo una cosa

$base = 5;
$altura = 10;

function calcular_area_triangulo($base, $altura){
  $resultado = ($base * $altura)/2;
  return $resultado;
}

$resultado = calcular_area_triangulo($base,$altura);

echo "El area del triangulo es: $resultado metros cuadrados";
echo "<br>***************************************<br>";




?>

<?php
$texto = "Esta es mi cadena";

echo strlen($texto)."<br>"; //Cuenta el numero de caracteres que tiene mi cadena

echo substr($texto,0,4)."<br>"; //Corta la cadena desde el 0 hasta el 4


$palabra = "texto";
echo strtoupper($palabra)."<br>";  //convierte los caracteres a mayusculas

echo strtolower($palabra)."<br>"; //convierte los caracteres a minisculas

/*Funciones arreglos*/

$amigos = array('telefono'=>65563767, 'edad'=>20);
//echo $amigos['telefono']." ".$amigos['edad'];

extract($amigos);
echo $telefono." ".$edad;  //Te permite extraer los valores como si fueran variables

$semana = array('Lunes', 'Martes', 'Miercoles','Jueves',
                'Viernes', 'Sabado', 'Domingo');

$ultimo_dia = array_pop($semana); //Extrae el ultimo elemento de la cadena
echo "<br>$ultimo_dia<br>";

echo join('-', $semana)."<br>"; //Muestra todos los valores del arreglo

$vuelta = array_reverse($semana);

//var_dump($vuelta);
print_r($vuelta);

/*Funciones Matematicas*/

$numero = 15.485;
echo "<br>".round($numero)."<br>"; //redondea

$paginacion = 12.1;
echo "<br>".ceil($paginacion)."<br>"; //redondea hacia arriba se usa para paginacion

$noAleatorio = rand(1,20);
echo "$noAleatorio<br>";


?>

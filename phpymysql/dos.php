<?php

$nombre = "Alan";
$apellido = "Maqueda";
$edad = 19;

//echo gettype($nombre);
//echo gettype($apellido);
//echo gettype($edad);




$alumno = array('Nombre'=>$nombre, 'Apellido'=>$apellido);

//echo "Tu eres $alumno[Nombre] $alumno[Apellido]";


$miArreglo = ['Azul', 'Negro', 'Blanco', 'Morado', 'Rojo'];
sort($miArreglo);

foreach($miArreglo as $colores){
  echo $colores."<br>";
}

/*while*/

$x = 1;
while($x<=10){
  echo $x."<br>";
  $x++;
}

for($i=0; $i<count($miArreglo); $i++){
  echo $miArreglo[$i]."<br>";
}

$contador = 0;
while($contador < count($miArreglo)){
  echo $miArreglo[$contador]."<br>";
  $contador++;
}

$meses = array(
  'Enero', 'Febreo', 'Marzo', 'Abril',
  'Mayo', 'Junio', 'Julio', 'Agosto',
  'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

echo "*****************";
for($i=0; $i<count($meses); $i++){
  echo $meses[$i]."<br>";
}
echo "*****************";
$count = 0;
while($count<count($meses)){
  echo $meses[$count]."<br>";
  $count++;
}
echo "*****************";

foreach($meses as $mes){
  echo $mes."<br>";
}


echo "*****************";

/*do-While*/

$i = 1;
do{
  echo $i."<br>";
  $i++;
}while($i<=10);

?>

<?php

$dias = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Sabado', 'Domingo'];

foreach ($dias as $dia){
  echo $dia."<br>";
}

echo "..............................<br>";

sort($dias);

for($i=0; $i<count($dias); $i++){
  echo $dias[$i]."<br>";
}

echo "..............................<br>";

rsort($dias);

$count = 0;
while($count<count($dias)){
  echo $dias[$count]."<br>";
  $count++;
}


echo "..............................<br>";

$j=1;
do{
  echo "Hola No. $j <br>";
  $j++;
}while($j<=10);


/*Foreach asociativo*/
echo "..............................<br>";

$alejandro = array('telefono'=>551243, 'edad'=>20, 'pais'=>'Mexico');

foreach($alejandro as $dato => $valor){
  echo "$dato : $valor <br>";
}

echo "..............................<br>";

/*break and continue*/

$paises = ['Mexico', 'Argentina', 'Colombia', 'España', 'Rusia', 'Venezuela', 'Canada'];

foreach($paises as $pais){
  if($pais == 'Colombia'){
    break;
  }
  echo $pais."<br>";
}

echo "..............................<br>";

foreach($paises as $pais){
  if($pais == 'España'){
    continue;
  }
  echo $pais."<br>";
}

echo "..............................<br>";

$variable = 10;
$texto = "This is a mesage";
var_dump($variable); //tipo y contenido
echo "<br>";
var_dump($texto);
echo "<br>";

print_r($variable); //solo contenido
echo "<br>";
print_r($texto);

 ?>

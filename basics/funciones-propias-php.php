<?php

$string = "Hola jasubi como estas?";
$name1 = "Jasubi";
$name2 = "Jasubi";

echo "La palabra $string contiene " . mb_strlen($string) . " caracteres";
echo "<br>";
echo "La letra u esta en el indice " . strpos($string, "u");
echo "<br>";
echo "La frase $string contiene '?' :" . (str_contains($string, "?") ? " true" : "false");
echo "<br>";
echo "La frase $string empiza con la palabra 'como'?:" . (str_starts_with($string, "como") ? " true" : "false");
echo "<br>";

if($name1 == $name2){
  echo "Son iguales";
}else{
  echo "Son Diferentes";
}
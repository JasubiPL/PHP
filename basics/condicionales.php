<?php

//Esta es la manera corta de usar un switch, disponioble apartir de la vercion 8
$a = 4;
echo match($a){
  1 => "el valor es Luenes",
  2 => "el valor es Martes",
  3 => "el valor es Miercoles",
  4 => "el valor es Jueves",
  5 => "el valor es Viernes",
  6 => "el valor es Sabado",
  7 => "el valor es Domingo"
};
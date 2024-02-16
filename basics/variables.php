<?php

  $variable = "Hola Mundo";
  define("CONSTANTE", "Hola Mundo");
  define("CONSTANTE_ARRAY", ["valor1", "valor2"]);


  echo "Mi variable es $variable <br>";
  echo "Mi constante es " . CONSTANTE . "<br>";
  echo "Mi version de PHP es: " . PHP_VERSION . "<br>";
  echo "La ruta es " . __FILE__ . "<br>"; //debuelve la ruta del archivo


echo "<br>";
  //booleanos

  $verdadero =  true; // --> debuelbe  1
  $falso = false; // --> debuelbe  0

  echo "Verdaddero es $verdadero y falso es $falso <br>";
  echo "Verdaddero es" . var_dump($verdadero) . " y falso es " . var_dump($falso); // ---> debuelve primero los boleanos y despues el texto

  
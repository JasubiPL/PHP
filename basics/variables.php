<?php

  $variable = "Hola Mundo";
  define("CONSTANTE", "Hola Mundo");
  define("CONSTANTE_ARRAY", ["valor1", "valor2"]);


  echo "Mi variable es $variable <br>";
  echo "Mi constante es " . CONSTANTE . "<br>";
  echo "Mi version de PHP es: " . PHP_VERSION . "<br>";
  echo "La ruta es " . __FILE__; //debuelve la ruta del archivo
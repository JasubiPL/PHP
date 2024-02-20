<?php

  $nombres = ["Ana", "Pepito", "Esteban", "Armando", "Jasubi"];

  foreach($nombres as $nombre){
    echo $nombre . "<br>";
  }

  echo "<br><br>";

  foreach($nombres as $index => $nombre){
    echo $nombre . " con indice " . $index . "<br>";
  }
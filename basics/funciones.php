<?php
  //ambito de las variuables

  $a = 5;

  function test(){
    global $a;
    $a = $a + 3;
    echo "Usando variable global " . $a . "<br>";
  }

  function test2(){
    $a = 3;
    $a = $a + 3;
    echo "Usando variable local " . $a . "<br>";
  }

  function test3(&$n){//con esta funcion estamos sumandole 10 a la variable $a global
    $n = $n + 10;

    
  }

  test();
  test2();
  test3($a);
  echo "El valor de a es $a";

  //Tipar parametros de una funcion
  // si se ingresan decimales, redondea el numero
  //los demas tipos no los puede convertir y envia un error

  function suma(int $num1, int $num2 ){
    $resultado = $num1 + $num2;

    echo "la suma de $num1 + $num2 = $resultado";
  }

  //Agregando ":" seguido de los parentesis podemos indicar el valor que queremos que retorne

  function sumaInt(int $num1, int $num2 ):int{
    $resultado = ($num1 + $num2)/2; //Esto daria error ya que 5 / 2 = 2.5

    echo "la suma de $num1 + $num2 = $resultado";
  }


  suma(3, 2);
  sumaInt(3, 2);
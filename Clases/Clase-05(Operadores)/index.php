<?php

//operadores aritmeticos

$num1 = 55;
$num2 = 33;

echo 'Suma: '. ($num1 + $num2). '<br>';
echo 'Resta: '. ($num1 - $num2). '<br>';

$mult = $num1*$num2;

echo 'Multiplicacion: '. $mult. '<br>';
echo 'Division: '. ($num1 / $num2). '<br>';
echo 'Modulo: '. ($num1 % $num2). '<br>';


//Operadores de incremento y decremento

$year= 2020;

//incremento
$year++;
echo 'Incremento var++:  '. $year. '<br>';

++$year;
echo 'Incremento ++var: '. $year. '<br>';

//decremento
$year--;
echo 'Decremento var--: '. $year. '<br>';

--$year;
echo 'Decremento --var:' . $year. '<br>';

//operadores de asignacion

$edad = 55; 
echo $edad. '<br>';
echo ($edad+=5). '<br>';
echo ($edad-=5). '<br>';
echo ($edad*=5). '<br>';
echo ($edad/=5). '<br>';



?>

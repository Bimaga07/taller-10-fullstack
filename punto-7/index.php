<?php
$numberOne = 0;
$numberTwo = 0;
$option = "";
$result = 0;

echo "Elija la opcion a realizar \n";
echo "1. Suma \n";
echo "2. restar \n";
echo "3. multiplicar \n";
echo "4. dividir \n";
$option = readline();

echo "digte el primer numero a operar: ";
$numberOne = readline();
echo "digite el segundo numero a operar: ";
$numberTwo = readline();

switch ($option) {
  case '1':
  $result = $numberOne + $numberTwo;
break;
case "2":
  $result = $numberOne - $numberTwo;
break;
case "3":
$resul = $numberOne * $numberTwo;
break;
case "4":
  $result = $numberOne / $numberTwo;
break;
default:
echo "la opcion no es valida a realizar la operacion \n";
  };
echo "el resultado es: ".$result;
?>
<?php
include "./operationUtil.php";
//datos de entrada
$numberOne = 0;
$numberTwo = 0;
$operation = "";

$numberOne = getNumber();
$numberTwo = getNumber();

$operation = showMenu();

$result = operation($numberOne, $numberTwo, $operation);

echo "el resultado de la operacion es: " . $result;
?>
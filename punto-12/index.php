<?php


echo 'ingrese el numero a multiplicar ';
$numero = readline();

for($i = 0; $i <= 30; $i ++){
  echo $numero . " x " . $i . "=" . ( $numero * $i) . "\n";
}

?>
<?php
$usuarioNumber = 0;
 $i = 0;
echo 'por favor digite el numero a multiplicar: ';
$usuarioNumber = readline();

while($i <= 30){
  $result = $usuarioNumber * $i;
  echo $usuarioNumber . "x" . $i . "=" . $result . "\n";
 
  $i++;
}
 
  
?>
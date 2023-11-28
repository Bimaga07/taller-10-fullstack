<?php
$numberArray = array(1,6,65,7,9);

$sum = 0;
foreach($numberArray as $num){
  $sum += $num;
}
echo 'la suma del arreglo es ' . $sum;
?>
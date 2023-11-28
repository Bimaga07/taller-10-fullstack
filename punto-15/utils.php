<?php
function getNumber(){
  echo "ingrese el numero: \n";
  return readline();
}
function showMenu(){
  echo "ingrese la operacion a realizar: \n";
  echo "1 - suma\n";
  echo "2 - resta \n";
  echo "3 - multiplicar \n";
  echo "4 - dividir \n";

  return readline();

}
function operation($x, $y, $operation){
  switch($operation){
    case 1:
    return sum($x, $y);
    case 2:
    return res($x, $y);
    case 3:
    return multi($x, $y);
    case 4:
    return divi($x, $y);
    default: 
    echo "option no valida ";
      return 0;
  }
}
function sum($x, $y){
 return $x + $y;
}
function res($x, $y){
  return $x - $y;
  
}
function multi($x, $y){
 
  return $x * $y;
  
}
function divi($x, $y){
 
  return $x / $y;
    
}
?>
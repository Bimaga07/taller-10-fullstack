<?php
$name = "";
$age = 0;
echo "ingrese su nombre \n";
$name = strtoupper(readline());
echo "ingrese su edad \n";
$age = readline();

if( $age >= 18 ){
  echo "$name . usted es mayor de edad puede ingresar \n";
}else {
echo "$name . usted no puede ingresar es menor de edad \n";
  
}
?>
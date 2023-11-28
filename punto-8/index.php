<?php
$tipoDeUsuario = "";
$numeroDePersonas = 0;
const TICKET = 25000;



echo "digite tipo de afiliacion \n"; 
  $tipoDeUsuario = strtoupper(readline());

echo "digite el numero de personas \n";
  $numeroDePersonas = readline();

$result = $numeroDePersonas * TICKET;

switch($tipoDeUsuario){
  case "A":
     $result = $result * 0.7;
  break;
  case "B":
    $result = $result * 0.75;
  break;
  case "C":
    $result = $result * 0.9;  
  break;
  case "D":
    $result = $result * 0.95;
  break;
default:
  echo "no tiene descuento";
}
echo "el precio es: $result";
?>
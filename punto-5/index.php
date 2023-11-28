<?php
const VALOR_TICKET = 25000;
$tipoDeAfiliacion = "";
$numeroDePersonas = 0;
echo "digite su tipo de afiliacion: \n";
$tipoDeAfiliacion =  strtoupper(readline());
echo "digite el numero de personas: \n";
$numeroDePersonas = readline();

$totalSinDescuento = $numeroDePersonas * VALOR_TICKET;

if($tipoDeAfiliacion == "A"|| $tipoDeAfiliacion == "B"){
  $descuento = 0.3 * $totalSinDescuento;
  $totalSinDescuento -= $descuento;
}
  echo "el costo total :" . $totalSinDescuento;
?>
<?php
include "./passwordCheck.php";

$user = "";
$password = "";

echo "digite su usuario \n";
$user = readline();

echo "digite su password \n";
$password = readline();

if(hasSegurityLong($password) && hasUpperLetter($password) && hasNumber($password)){
  echo "su contraseña es segura";

}else{
  echo "su contraseña no es segura";
}



?>
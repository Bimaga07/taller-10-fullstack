<?php

function hasSegurityLong ($pass) {
 return strlen($pass) >= 8;
}
function hasUpperLetter ($pass) {
  $array = str_split($pass);
  foreach($array as $elemt){
    if(ctype_upper($elemt)){
      return true;
    } 
  }
  return false;
}
function hasNumber($pass){
  $array = str_split($pass);
  foreach($array as $elemt){
    if(is_numeric($elemt)){
      return true;
    } 
  }
  return false;
}

?>
<?php
function cuentaLetraA ($palabra) {
  $contador = 0;
  for ($i = 0; $i < strlen($palabra); $i++) {
    if($palabra[$i] == 'a' || $palabra[$i] == 'A')
      $contador++;
  }
  return $contador;
} 

echo cuentaLetraA("Upgrade Hub");
?>
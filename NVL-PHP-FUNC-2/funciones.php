<?php
function cuentaLetras ($palabra, $letra) {
    $contador = 0;
    for ($i = 0; $i < strlen($palabra); $i++) {
      if($palabra[$i] == strtoupper($letra) || $palabra[$i] == strtolower($letra))
        $contador++;
    }
    return $contador;
  } 
  
  echo cuentaLetras("Upgrade Hub", 'u');
?>

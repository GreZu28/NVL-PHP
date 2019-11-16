<?php
function contieneVocales ($frase) {
    $contiene5vocales = 0;
    $fraseMinusculas = strtolower($frase);
    $array = str_split($fraseMinusculas);
  
    if(in_array('a', $array) && in_array('e', $array) &&
      in_array('i', $array) && in_array('o', $array) &&
      in_array('u', $array))
        $contiene5vocales++;
  
    return $contiene5vocales;
  } 
  
  $resultado = 0;
  $resultado = contieneVocales("Hoy es un gran dia");
  
  if($resultado == true)
    echo 'LA PALABRA CONTIENE LAS 5 VOCALES';
  else
    echo 'NO CONTIENE TODAS LAS VOCALES';
?>
<?php

function reemplazar($ficheroOrigen,$ficheroDestino,$viejoString,$nuevoString) {
  $fdOrigen = fopen($ficheroOrigen, 'r');
  $fdDestino = fopen($ficheroDestino, 'r+');
  while (($contenido = fgets($fdOrigen))!== false) {
    $nuevoContenido = str_replace($viejoString,$nuevoString,$contenido);
    fwrite($fdDestino, $nuevoContenido);
  }
}

reemplazar('quijote.txt', 'quijote-modificado.txt', 'Sancho', 'Morty');

echo 'Fin';

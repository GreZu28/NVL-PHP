<?php
$fd = fopen('quijote.txt', 'r');
$word = 'Molino';
$cont = 0;
while (($contenido = fgets($fd)) !== false) {
  $cont += substr_count(strtoupper($contenido), strtoupper($word));
}
echo $cont;
?>
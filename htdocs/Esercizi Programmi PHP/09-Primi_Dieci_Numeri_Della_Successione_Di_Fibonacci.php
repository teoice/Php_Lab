<?php

 echo '0 1 1';

 $precedente=1;
 $successivo=1;

 while ($successivo<34) {  $appoggio=$successivo;
  $successivo+=$precedente;
  $precedente=$appoggio;
  echo ' ', $successivo;
 }

?>
<?php

 function cambia_segno_se_negativo (&$numero){
  if ($numero<0) $numero=-$numero;
 }

 $numero=-1;
 cambia_segno_se_negativo ($numero);
 echo $numero

?>
<?php

 function Cerca_Numero_Telefonico_Da_Elenco ($Elenco,$Numero_Telefonico) {

  $Numero_Non_Trovato=true;

  foreach ($Elenco as $Numero_Telefonico_Corrente) {
   if ($Numero_Telefonico_Corrente == $Numero_Telefonico) {
    echo 'Numero Telefonico Trovato!';
    $Numero_Non_Trovato=false;
    break;
   }
  }
  if ($Numero_Non_Trovato) echo 'Numero Telefonico Non Trovato!';
 }

 Cerca_Numero_Telefonico_Da_Elenco ($Elenco_Numeri_Telefonici=array('042158789','+39041235689','3338974568','021589687'),'3338974568')

?>
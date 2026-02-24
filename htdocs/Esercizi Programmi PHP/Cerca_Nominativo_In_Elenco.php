<?php

 function Cerca_Nominativo_Da_Elenco ($Elenco,$Nominativo) {

  foreach ($Elenco as $ValoreElemento) if ($ValoreElemento==$Nominativo) echo "$Nominativo Trovato!";

 }

 Cerca_Nominativo_Da_Elenco ($Elenco_Nominativi=array('Bianchi','Verdi','Rossi','Neri'),'Rossi')

?>
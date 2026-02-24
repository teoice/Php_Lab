<?php

 function  visualizza_cognomi_in_ordine_crescente ($PrimoCognome,$SecondoCognome){
   if ($PrimoCognome<$SecondoCognome) echo $PrimoCognome,' ',$SecondoCognome;
   else echo $SecondoCognome,' ',$PrimoCognome;
 }

 visualizza_cognomi_in_ordine_crescente ("Bianchi","Rossi")

?>
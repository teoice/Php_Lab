<?php

 function Visualizza_Media_Umidità_Relativa_Settimanale ($Umidità_Relativa_Settimanale) {

  $Somma_Umidità_Relativa_Settimanale=0;
  
  foreach ($Umidità_Relativa_Settimanale as $ValoreElemento) {
   $Somma_Umidità_Relativa_Settimanale+=$ValoreElemento;
  }

  echo round($Somma_Umidità_Relativa_Settimanale/7,1),'%';

 }

 Visualizza_Media_Umidità_Relativa_Settimanale ($Dati_Umidità_Relativa_Settimanale=array(50,50,35,10,95,85,70))

?>
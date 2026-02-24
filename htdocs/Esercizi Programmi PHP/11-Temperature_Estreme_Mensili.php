<?php

// Temperature estreme mensili dal 1961 al 2016 - Stazione metereologica di Venezia Tessera

 function Visualizza_Picchi_Dato_Un_Certo_Valore ($MinoreUguale_o_MaggioreUguale,$Picco_Trigger,$Picchi_Mensili) {
  $Mesi=array('Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre');

  if ($MinoreUguale_o_MaggioreUguale=='Sotto') {
   for ($Indice=0;$Indice<12;$Indice++)
    if ($Picchi_Mensili[0][$Indice]<=$Picco_Trigger) echo $Mesi[$Indice],' ',number_format($Picchi_Mensili[0][$Indice], 1, '.', ''),'<BR>';
  }
  else {
   for ($Indice=0;$Indice<12;$Indice++)
    if ($Picchi_Mensili[1][$Indice]>=$Picco_Trigger) echo $Mesi[$Indice],' ',number_format($Picchi_Mensili[1][$Indice], 1, '.', ''),'<BR>';
  }
 }
 
 // Minime
 $Dati_Picchi_Mensili[0][0]=-13.6;
 $Dati_Picchi_Mensili[0][1]=-12.6;
 $Dati_Picchi_Mensili[0][2]=-7.4;
 $Dati_Picchi_Mensili[0][3]=-0.8;
 $Dati_Picchi_Mensili[0][4]=2.0;
 $Dati_Picchi_Mensili[0][5]=7.0;
 $Dati_Picchi_Mensili[0][6]=10.2;
 $Dati_Picchi_Mensili[0][7]=10.0;
 $Dati_Picchi_Mensili[0][8]=5.0;
 $Dati_Picchi_Mensili[0][9]=-1.1;
 $Dati_Picchi_Mensili[0][10]=-8.8;
 $Dati_Picchi_Mensili[0][11]=-12.5;

 // Massime
 $Dati_Picchi_Mensili[1][0]=15.7; 
 $Dati_Picchi_Mensili[1][1]=21.4;
 $Dati_Picchi_Mensili[1][2]=25.3;
 $Dati_Picchi_Mensili[1][3]=27.2;
 $Dati_Picchi_Mensili[1][4]=31.5;
 $Dati_Picchi_Mensili[1][5]=34.3;
 $Dati_Picchi_Mensili[1][6]=36.6;
 $Dati_Picchi_Mensili[1][7]=35.8;
 $Dati_Picchi_Mensili[1][8]=32.4;
 $Dati_Picchi_Mensili[1][9]=27.3;
 $Dati_Picchi_Mensili[1][10]=23.0;
 $Dati_Picchi_Mensili[1][11]=16.7;

 Visualizza_Picchi_Dato_Un_Certo_Valore ('Sotto',30.0,$Dati_Picchi_Mensili);
 echo '<BR>';
 Visualizza_Picchi_Dato_Un_Certo_Valore ('Sopra',0.0,$Dati_Picchi_Mensili)

?>
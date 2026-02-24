<?php

 $temperature=array(-5,0,5,10,-5,-5,-10);
 $SommaTemperature=0;

 foreach ($temperature as $ValoreElemento)
  $SommaTemperature+=$ValoreElemento;

 echo round($SommaTemperature/7,2)

?>
<?php

 function ControlloEmail($Email,$ConfermaEmail) {
  if ($Email==$ConfermaEmail) echo 'Email Confermata!';
  else echo 'Email Non Confermata!';
 }

 ControlloEmail('mario.rossi@libero.it','mario.rosi@libero.it')

?>
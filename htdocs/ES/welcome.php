<?php
    $montante = $_POST["montante"];
    $taeg = $_POST["taeg"];
    $mesi = $_POST["mesi"];

    $interessi = $montante * ($taeg/100/12) * ($mesi/12);
    $rimborso_tot = $interessi + $montante;

    print_r($montante);
    print_r( $taeg);
    print_r( $mesi);
    print_r( $rimborso_tot);
?>

<html>
    <body>
     

    </body>
</html> 

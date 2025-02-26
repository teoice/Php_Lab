<?php
 /* First method to create array. */
 $intnumbers = array( 1, 2, "tre", 4.2, 5);
 
 /* We iterate the array */
 foreach( $intnumbers as $value ) {
 echo "Array member value is $value <br />";
 }
 
 
/* Second method to create array. */
 $letternumbers[0] = 1;
 $letternumbers[1] = "two";
 $letternumbers[2] = "three";
 $letternumbers[3] = 43.2;
 $letternumbers[4] = "five";

foreach( $letternumbers as $value ) {
 echo "Array member value is $value <br />";
}

#Array associativo
$intnumbers = array( 1 => 3,"two" => 12,"three" => 3,"four" => 4,"five" => 7);
 /* We iterate the array */
 foreach( $intnumbers as $k => $value ) {       #K è la keyword, "value" il valore associato.
 echo "$k => $value <br />";
 }
?>

<?php
    //Local variables
    $samplevar = 10;
    function sumvars() {
        $a = 5;
        $b = 3;
        $samplevar = $a + $b; //$samplevar is local variable inside this function
        echo "\$samplevar inside this function is $samplevar. <br />";          //All'interno della funzione il valore sarà 8
    }
    sumvars();
    echo "\$samplevar outside the previous function is $samplevar. <br />";     //Ma fuori dalla funzione il valore sarà 10, anche se abbiamo richiamato la funzione

    //Function parameters
    function phpfunction($parameter1,$parameter2){
        return ($parameter1 * $parameter2);
    }
    $funcval = phpfunction(6,3);                                                //Qui inizializziamo i valori dei parametri della funzione
    echo "Return value from phpfunction() is $funcval <br />";

    //Global variables
    $globalvar = 55;

    function dividevalue() {
        GLOBAL $globalvar;                                                      //In questo modo andiamo a richiamare la variabile gia esistente fuori dalla funzione
        $globalvar/= 11;
        echo "Division result $globalvar <br />";
    }dividevalue();

    //Static variables
    function countingsheeps(){
        STATIC $sheepnumber = 0;                                                //Qui invece il valore viene mantenuto solo all'interno della funzione
        $sheepnumber++;
        echo "Sheep number $sheepnumber <br />"; 
    }
    countingsheeps();
    countingsheeps();
    countingsheeps();
    countingsheeps();
    countingsheeps();
?>
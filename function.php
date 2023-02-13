<?php 
    function addTwoNumber(){
        $num1 = 10;
        $num2 = 10;
        $result = $num1 + $num2;
        return "$result";

    }

    echo addTwoNumber()+1;

    echo "<br>";
    // fibonacci series

    $veryOld = 0;
    $old = 1;
    $new = 1;

    for($i=0;$i<10;$i++){
        echo $veryOld." ";
        $old = $new;
        $new = $old + $veryOld;
        $veryOld = $old;
    }

    echo "<br>";

    // fDefault value of function parameter or optional parameter 

    function serve($foodType,$NumberOfItems){

        echo "{$foodType} of {$NumberOfItems} have been served";
    }
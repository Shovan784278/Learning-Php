<?php 
    include_once("function.php");

    
    $global_variable = "i am Robot";

    function scope(){
        global $global_variable;
        return $global_variable;
    }
    echo "$global_variable";

    echo "<br>";

    function numberAdd(int $num1, int $num2){

        $sum = $num1 + $num2;
        return $sum;
        
    }

    echo numberAdd(5,5);
    
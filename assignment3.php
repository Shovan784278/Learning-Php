<?php 

    // ==========Assignment 3=========

    // Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision

    function evenOdd($num){

        if($num % 2==0){
            return "This is an Even Number";
        }elseif($num %2==1){
            return "This is a Odd Number";
        }
      
    }

    //case 1 check for Even Number   

    echo evenOdd(2);
    echo "<br>";

    //case 2 check for Odd Number

    echo evenOdd(1);
    echo "<br>";

    //Another way to get value for Even Number   
    $num = 2;
    echo evenOdd($num);
    echo "<br>";

    //Another way to get value for Even Number
    $num = 1;
    echo evenOdd($num);

    echo "<br>";

     // 1+2+3...…….100  Write a loop to calculate the summation of the series

     $sum=0;
     for($i=0;$i<=100; $i++){
           $sum= "$sum"+$i;
     }

     echo "1+2+3...…….100 summation of the series is: {$sum} <br>"; //result of the series
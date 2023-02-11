<?php 

// switch case readability

    $n = 13;
    $r = $n % 2;
    switch($r){

        case 0:
            switch($n){
            case $n>0:
            echo "{$n} is an postive Even number";
            break;
            case $n<0:
            echo "{$n} is a negative Even number";
            break;
        }
        break;
        default:
       
        switch($n){
            case $n > 0:
                echo "{$n} is a positive odd number";
                break;
            case $n < 0:
                echo "{$n} is a Negative odd number";
                break;
        }
          
    }
    

    echo "<br>";

    
// switch case readability

    $color = "green";
    switch("$color"){
        case "red":
            echo "Red is like blood";
            break;
        
        case "green":
            echo "Green is my favorite color";
            break;
        
        case "blue":
            echo "blue is favorite color of saree";
            break;

        default:
            echo "This is default color";
            break;
    }


    echo "<br>";

    
// switch case readability

    switch(true){
        case (0==$r && $n>0):
            echo "{$n} is an postive Even number";
            break;
        case(1==$r && $n>0):
            echo "{$n} is a positive odd number";
            break;
        case(0==$r && $n<0):
            echo "{$n} is an negative even number";
            break;
        case(-1==$r && $n<0):
            echo "{$n} is an negative odd number";
            break;
    }
    
    echo "<br>";

    // Alternative Syntax of controll structure


    if($n%2==0){
        echo "Even Number";

    }elseif($n%2==1){
        echo "Odd Number";
    }

    echo "<br>";

    if($n%2==0):
        echo "{$n} is an even Number";
        echo "<br>";
        echo "More Text";
    else:
        echo "{$n} is odd Number";
        echo "<br>";
        echo "More Text++";
    endif;
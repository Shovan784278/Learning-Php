<?php 

    // for loop

    for($i=1; $i<10; $i++){
        // echo "$i";
        echo "<br>";
            for($j=0; $j<$i; $j++){
                echo "*";
            }
    }

    echo "<br>";

    // while loop

    $i = 0;
    while($i<10){
        $i++;
        echo $i."<br>";
    }

    // do while loop

    echo "<br>";
    $i = 0;
    do{
        $i++;
        echo "$i";
        echo "<br>";
    }while($i<10);

    echo "<br>";

    // multiple stepping in for loops

    for($i = 10, $j = 1; $i > 0; $i -= 1,$j++){
        echo $i.":".$j;
        echo "<br>";

    }

    echo "<br>";
    // continue and break between loop
    $i = 0;
    for($i=2; $i<20;$i++){
        if($i==15){
            
           continue;
            
        }
        echo "<br>";
        echo "$i";
    }
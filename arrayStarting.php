<?php

    $student = array(
        "Jahid",
        "Monir",
        123
    );

    $student[1] = "Rofiq";

    // $studen = array_pop($student);
    

    
    // array_shift($student)."\n";

   

    // var_dump($student) ; 
    // echo $student [0]; // print index data in the array
    // echo count($student); // count how many element have in the array 



    array_push($student, "Sohel"); //if any new data entry last in the array

    array_unshift($student,"Anik"); //if any new data entry first in the array


    $n = count($student); // if all the data want to show together use count and loop
    for($i=0;$i<$n;$i++){

        echo $student[$i]."\n";
    }

   

    PHP_EOL;


    // echo"---------Decending------"."\n";


    // for($i=$n-1;$i>=0;$i--){

    //     echo $student[$i]."\n";
    // }


    //array can be modify by a process. Array is not immuatble.. here is an example..

    // array_shift();
    // array_pop();
    // array_push();
    // array_unshift(); 





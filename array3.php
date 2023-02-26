<?php 

//Let's find whether an variable has any data or not or empty by isset,empty and ternary check..

    $student = 0;

    if(isset($student)){
        echo "Data is set";
    }else{
        echo "Data is empty";
    }

    echo "\n";

    if(empty($student)){
        echo "Data is empty";
    }else{
        echo "Data is not empty";
    }


    echo "\n";

    if(isset($student) && (is_numeric($student)) || $student != ''){

        echo "The data is set and it's not empty";

    }else{
        echo "Data is either not set or it's empty";
    }
  

    // Now we will see how to extract data from array 

    

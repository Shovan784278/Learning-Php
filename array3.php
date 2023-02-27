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
  

    echo "\n";

    // Now we will see how to extract data from array using by array_slice() function

    $drinks = array('Water','Milk','Juice','Orange-Juice');

    // $someDrinks = array_slice($drinks,2,2); //It can pick from any offset number to end. Also, can pick any selective offset from an array

    // $someDrinks = array_slice($drinks,1, -1);  
    /* (1,-1) indicate previous offset from last offset.. Because here (-1) is the last offset of an Array..eg: 'Orange-juice' offset value is -1..'Juice' is -2..'Milk is -3' and so on to 1st index of array. */

   

    // Now here is a problem about original offset number problem.. When we call any offset from array its don't give the original offset.. For this we can use (True) after offset call..
    
    $someDrinks = array_slice($drinks,1, -1,true);
    print_r($someDrinks);

    echo "\n";

    //Now, If we want to preserve assosiative array offset 


    $randomNumber = array('a'=>10,'b'=>11,'c'=>12,'d'=>13, 12=>18,'e'=>14); // normally (18) offset number will come 0 unless we use Null and True last at the offset call inside of array_slice($randomNumber,1,null,true) function

    $randomNumber = array_slice($randomNumber,1,null,true);
    print_r($randomNumber);
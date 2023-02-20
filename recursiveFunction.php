<?php 

    //recursive function/recursion

    function addNumber($counter,$end,$stepping =1){

        if($counter>$end){
            return;
        }

        echo "$counter"."\n";
        $counter += $stepping;

        addNumber($counter,$end,$stepping);

    }

    addNumber(25,37,4);


    


    //fibonacci series with recursive function with static variable
    PHP_EOL;
    
    function fibonacci($old,$new,$end){

        static $start;
        $start = $start ?? 1;

        if($start>$end){
            return;
        }

        $start++;

        echo "$old"." ";
        $_temp = $old+$new;;
        $old = $new;
        $new=$_temp;

        fibonacci($old,$new,$end);
    }

    fibonacci(0,1,5);
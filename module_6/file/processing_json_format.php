<?php 


    $filename = "/xampp/htdocs/Learning-Php/module_6/file/read4.txt";

    $students = array( 
        
    array(
        'fname'=>'Shovan',
        'lname'=>'Nag',
        'age'=> '32',
        'batch'=>'1st',
        'course'=>'Php and Laravel'
    ),
    array(
        'fname'=>'Rinku',
        'lname'=>'Nag',
        'age'=> '33',
        'batch'=>'2nd',
        'course'=>'React'
    ),

);

$encodeData = json_encode($students);
file_put_contents($filename,$encodeData,LOCK_EX);
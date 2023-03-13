<?php 
    $filename = "/xampp/htdocs/Learning-Php/module_6/file/read3.txt";

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

$fp = fopen($filename,"w");
foreach($students as $student){
    sprintf("%s,%s,%s,%s,s",$student['fname'],$student['lname'],$student['age'],$student['batch'],$student['course'],);
}
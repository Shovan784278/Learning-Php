<?php 

//Here is an array that contains with value which will read and write mode with read3.txt file
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

//Here is the example of write mode.. We can write any types of data inside the read3.txt

$fp = fopen($filename,"w");
foreach($students as $student){
   $data = sprintf("%s,%s,%s,%s,%s",$student['fname'],$student['lname'],$student['age'],$student['batch'],$student['course'],);

   fwrite($fp,$data);
}
fclose($fp);


//Here is the example of read mode.. We can read any types of data from the read3.txt

// $fp = fopen($filename,"r");
// while($data = fgets($fp)){
//     $student = explode(",",$data);
//     printf("Name = %s %s\nAge = %s\nBatch = %s\nCourse= %s\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
// }
// fclose($fp);


//There is another easy way to write data at read3.txt file by fputcsv() function
// $fp = fopen($filename,"w");
// foreach($students as $student){
//     fputcsv($fp,$student);
// }
// fclose($fp);

// There is another easy way to read data at read3.txt file by fgetcsv() function

$fp = fopen($filename,"r");
while($student = fgetcsv($fp)){
   
    printf("Name = %s %s\nAge = %s\nBatch = %s\nCourse= %s\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
}
fclose($fp);

//If we add more data

$student = array(
    'fname'=>'John',
    'lname'=>'Petrucci',
    'age'=> '33',
    'batch'=>'2nd',
    'course'=>'MERN'
);

$fp = fopen($filename,"a");
fputcsv($fp,$student);
fclose($fp);
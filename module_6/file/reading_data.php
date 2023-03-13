<?php


$filename = "/xampp/htdocs/Learning-Php/module_6/file/read.txt"; //Use pwd in terminal for knowing current path of a file

echo getcwd(); //Another way to find correct path of a file 

if (is_readable($filename)) {
    $fp = fopen($filename, 'r'); //here $fp is file pointer and we can open a file and read by a function named fopen function.

    echo "\n";

    //if we want to get a specific line from read.txt file, then we can use this way.
    /* $line = fgets($fp);
    echo $line;
    $line = fgets($fp);
    echo $line;
    $line = fgets($fp);
    echo $line; */

    //if we want to get a all the line from read.txt file, then we can use this way.
    while ($line = fgets($fp)) {
        echo $line;
    }

    //If we want to get more same line again then we will have to use rewind() function to call it again..

    // echo "\n";
    // rewind($fp);

    fseek($fp, 10); //fseek() functions mainly use for pick specific line 

    while ($line = fgets($fp)) {
        echo $line . "-";
    }

    // If we want to close this file then, we can us fclose() function
    // fclose($fp); 

    echo "\n";
    //For quick access to the text file we can also read by array
    $data = file($filename);
    echo $data[2];
    print_r($data);


    //IF we want to read whole the data from the read.txt file then we can use file_get_contents() function..
    echo "\n";
    $data = file_get_contents($filename);
    echo $data;


}
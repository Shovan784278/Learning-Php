<?php

    $filename = "/xampp/htdocs/Learning-Php/module_6/file/read2.txt";

    $fp = fopen($filename,"a+");
    $line = fgets($fp);
    echo $line;
    fwrite($fp,"Bangladesh\n"); 
    rewind($fp);
    fwrite($fp,"USA\n"); 
    $line = fgets($fp);
    echo $line;
    // fseek($fp,0);
    // fwrite($fp,"USA\n");
    // echo $line;

    fclose($fp);
<?php 

    /*
        Here is an example of write and appending data. Previous time we learned from the reading_data that how to connect path of the text file and opened by fopen() function. In this page same process as reading_data.php file...But here we will see how to write new and store privious data by using write $fp = fopen($filename,"a"); and append it with  $fp = fopen($filename,"a"); 
    
    */

    $filename = "/xampp/htdocs/Learning-Php/module_6/file/read2.txt";

    //$existingData = file_get_contents($filename);
    if(is_writable($filename)){
    $fp = fopen($filename,"a");

    //fwrite($fp, $existingData);
    fwrite($fp,"HTML\n");
    fwrite($fp,"CSS\n");
    fwrite($fp,"PHP\n");
    echo $fp;
    fclose($fp);
}

//Opening file in differet mode
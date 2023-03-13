<?php
    $filename = "/xampp/htdocs/Learning-Php/module_6/file/read2.txt";

    // file_put_contents($filename,"Shovan\n",FILE_APPEND);
    // file_put_contents($filename,"Rinku\n",FILE_APPEND);

    file_put_contents($filename,"\nSumit\n", FILE_APPEND | LOCK_EX);
    file_put_contents($filename,"Sujon", FILE_APPEND | LOCK_EX);
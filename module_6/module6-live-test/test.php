<?php
// File name
$file_name = "/xampp/htdocs/Learning-Php/module_6/Module6-Live-Test/ostad.txt";

// Check if file exists, if not create it
if(!file_exists($file_name)) {
    $file = fopen($file_name, "w");
    fclose($file);
}

// Open file for reading and writing
$file = fopen($file_name, "r+");

// Read contents of file
$contents = fread($file, filesize($file_name));

// Add current date and time to contents of file
$contents .= "Current date and time: " . date("Y-m-d H:i:s") . "\n";

// Move pointer to the beginning of the file
fseek($file, 0);

// Write new contents to file
fwrite($file, $contents);

// Close file
fclose($file);

echo "File updated successfully!";
?>

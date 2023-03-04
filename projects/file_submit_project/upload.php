<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Project</title>
</head>
<body>
    <?php 
        if(isset($_FILES['file'])){
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES['file']['name']);
            $upload_ok = 1;
            $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        }
        
        //Check if file already exist
        if(file_exists($target_file)){
            echo "Error: File already exist!";
            $upload_ok = 0;
        }

        //check file size
        if($_FILES['file']['size'] > 500000){

            echo "Your File is too large!";
            $upload_ok = 0;
        }

        //Allow certain file formats..
        if($image_file_type != "jpg" && $image_file_type != "jpeg" && $image_file_type != "png" && $image_file_type != "gif"){

            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $upload_ok = 0;
        }


        /*This code is a PHP script that handles file uploads from a form. It first checks if the value of $upload_ok is equal to zero. If it is, it means there was an error in uploading the file, and the script outputs a message "Sorry, your file isn't uploaded!". If $upload_ok is not equal to zero, the script attempts to move the uploaded file from its temporary location to the target directory specified by $target_file.*/


        if($upload_ok==0){
            echo "Sorry, your file isn't uploaded!";
        }else{
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){

                echo "The File" . htmlspecialchars(basename($_FILES['file']['name'])) . "has been uploaded";

            }else{
                echo "Sorry, there is an error occured in uploading!";
            }
        }
    ?>
</body>
</html>
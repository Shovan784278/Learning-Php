<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Users Data</h3>

    <?php
        //handle form submisssion

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $name = $_POST['name'];
            $email = $_POST['email'];

            echo "Your Name is : {$name}";
            echo "<br>";
            echo "Your Email is : {$email}";
        }else{

            echo "Error: Invalid Submission";
        }

/// output query string parameters using $_GET


        if(!empty($_GET)){

            echo "<h2>Query String Parameters : </h2>";
            echo "<ul>";

            foreach($_GET as $key => $value){
                echo "<li>$key: $value</li>";
            }

            echo "<ul>";

        }
        
///This is $_REQUEST and using by assosiative Array wih $key=>$value//

        if(!empty('$_REQUEST')){

            echo "<h2>This is from assosiative key and Value</h2>";
            echo "<ul>";
            
            foreach($_REQUEST as $key=>$value){
                echo "<li>$key: $value</li>";
            }

            echo "<ul>";

        }


    ?>
</body>
</html>
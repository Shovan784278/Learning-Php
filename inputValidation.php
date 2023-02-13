<?php 

$email = "Shovanr06@gmail.com";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "This is valid email";

}else{
    echo "This is invalid email";
}
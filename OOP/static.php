<?php 

    class myClass{

        public static $my_static_property = "Hello! i'm static property \n";

        public static function my_static_method(){
            echo "Hello! this called from method";

        }

    }

    echo myClass::$my_static_property; // directly class can be call without create an object.  
    myClass::my_static_method(); // Directly method can be call from the class without object.
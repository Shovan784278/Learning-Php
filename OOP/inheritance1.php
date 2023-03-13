<?php 

//Here is the HH class practice starts

    class ParentClass{
        public $name;
        function __construct($name){
            $this->name = $name;
            $this->sayHi();
        }

        public function sayHi(){
            echo "Hi from {$this->name} \n";
        }
    }

    class ChildClass extends ParentClass{
        public function sayHi(){
            parent::sayHi(); //This is the method where we can call parent class from the child class
            
            echo "Hello";
        }
    }

    $cc = new ChildClass("ABCD");
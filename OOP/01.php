<?php 

//class,objects,method and property..

    class Human{
        public $name;
        // public $age;
        function sayHi(){
            echo "Hi! \n";
            $this->sayName();
        }

        
        function sayName(){
            echo "my name is : {$this->name}\n";
        }
       
    }

    class Student{
        
        function sayHi(){
            echo "Hello \n";
        }
    }

    class Teacher{
        function sayHi(){
            echo "Hello Students! \n";
        }

    }

    $obj1 = new Human(); // new object of class human
    $obj1->name = "Shovan"; //set operation $obj1

    $obj = new Human(); // new object of class human
    $obj ->name = "Rinku"; //set operation $obj
    
    // $obj1->age = 32; //set operation

    $obj2 = new Student; // new object of class Student
    $obj3 = new Teacher; // new object of class Teacher
    
    
    $obj1 -> sayHi();
    // echo $obj1->name."\n";  //Get operation
    // echo $obj1->age; //Get operation
    // echo $obj1->age;
    // $obj2 -> sayHi();
    // $obj3 -> sayHi();
  

    $obj -> sayHi();
    // echo $obj->name."\n";
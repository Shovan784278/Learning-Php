<?php 

    //here we will learn about function __construct()

 class Student{
        public $name;
        public $roll;
        function __construct($personName,$studentsRoll = 0){
            // echo "New Students record has been Created Succesfully! \n";     
            $this->name = $personName;  //we can use this construct name by $personName variable
            $this->roll = $studentsRoll;
        }

        function sayName(){
            echo "Hi \n";
            $this->records();
        }

        function records(){

            if($this->roll){
                echo "Students Name : {$this->name} \n", "Roll No :  {$this->roll} \n";
            }else{
                echo "Students Name : {$this->name} \n", "I forgot my roll \n";
            }
            
        }
 }

 //we can create object in one class .. here Student() is a class..
 $obj = new Student("Shovan",31);
 $obj ->sayName();

 $obj1 = new Student("Rinku",33);
 $obj1 ->sayName();

 $obj3 = new Student("John");
 $obj3 -> sayName();
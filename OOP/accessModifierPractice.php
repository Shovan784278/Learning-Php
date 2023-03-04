<?php 

    //here we start basic concept of access modifier 

    class access_modifier{
        public $public_property;
        protected $protected_property;
        private $private_property;

        public function public_method(){
            echo "I am public method";

        }
        protected function protected_method(){
            echo "I am protected method";

        }
        private function private_method(){
            echo "I am private method";

        }


    }

    $obj = new access_modifier();
    echo $obj-> protected_property = "Hello! \n";
    
    $obj-> protected_method();


    //Here is a problem about access modifier down bellow..

    // class Record{
    //     public $name;
    //     public $age;

    //     public function __construct($studentsName,$studentAge){
          
    //             $this-> name = $studentsName;
    //             $this-> age = $studentAge;
           
    //     }

    //     public function student(){
    //         echo "Students Name : {$this->name} and Age is {$this->age} "."\n";
    //     }

    //     public function students_gurdian(){
    //         // echo "Students Name is : {$this->name} and Age is {$this->age}";
    //         echo "Gurdian Name : {$this->name} Age : {$this->age} Years Old";
    //     }
    // }


    // $obj = new Record("Asad",22);
    // $obj -> student();
   


 


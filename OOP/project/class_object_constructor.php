<?php 
    class Dog{
        public $name;
        public $breed;
        public $age;

        public function __construct($DogName,$DogBreed,$DogAge){
            $this->name = $DogName;
            $this->breed = $DogBreed;
            $this->age = $DogAge;
        }

        public function bark(){
            echo "Woof woof! \n";
        } 

        public function get_info(){
            echo "Name : ".$this->name."\n";
            echo "Breed : ".$this->breed."\n";
            echo "Age : ".$this->age."\n";
        }

    }

    $dog = new Dog("Alex","German-Sephered",4);
    $dog -> bark();
    $dog -> get_info();
<?php 

/*
In this example, we create a Car class with three private properties: $make, $model, and $year. We also define a constructor method to set the values of these properties when a new object is created.
We then define six additional methods: get_make(), get_model(), get_year(), set_make(), set_model(), and set_year(). The get_ methods allow us to retrieve the values of the private properties, while the set_ methods allow us to update them.
We also define a display_info() method to echo out the car's make, model, and year.
We then create a Car object with the make, model, and year of a 2015 Toyota Corolla. We call the display_info() method to display the car's information.
We then use the set_make() and set_model() methods to update the car's make and model to a 2015 Honda Civic. We call the display_info() method again to display the updated car information.
*/

    class Car{
        private $make;
        private $model;
        private $year;

        public function __construct($make,$model,$year){
            $this-> make = $make;
            $this-> model = $model;
            $this-> year = $year;

        }

        public function getMake(){
            return $this->make;
        }

        public function getModel(){
            return $this->model;
        }

        public function getYear(){
            return $this->year;
        }

        public function setMake($make){
            $this-> make = $make;
        }
        public function setModel($model){
            $this-> model = $model;
        }
        public function setYear($year){
            $this-> year = $year;
        }

        public function display_info(){
            echo "Make : ".$this->make."\n";
            echo "Model : ".$this->model."\n";
            echo "Year : ".$this->year."\n";

        }

        
    }

    $make = new Car("Toyota","Corrolla",2015);
    
    $make-> display_info();

    $make -> setMake("Honda");
    $make -> setModel("Civic");

    $make -> setMake("Honda Prem");
    $make -> setModel("Civic");
    $make -> setYear(2018);

    $make -> display_info();
<?php 
    class Car{

        public $name;
        public $color;

        function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }

        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }

        public function setColor($color){
            $this->color = $color;
        }
        public function getColor(){
            return $this->color;
        }


    }

    class Toyota extends Car{
        public $secret_engine;
        public function set_engine($engine){
            $this-> secret_engine = $engine;
        }

        public function full_spaces($name,$color){

            echo "Car name is : {$name} \n"."Color : {$color} \n"."Engine No: {$this->secret_engine}";
        }
    }

    $toyota = new Toyota('Toyota','Blue');
    // print_r($toyota);

    $toyota -> set_engine('1256rtyg891321');
    // print_r($toyota);

    $toyota -> setColor("red");
    $toyota -> setName("BMW");
    $toyota -> full_spaces($toyota ->getName(),$toyota ->getColor());
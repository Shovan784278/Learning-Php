<?php 

    class Student{
        protected $id;
        protected $name;
        
        function __construct($id,$name){
            $this->id = $id;
            $this-> name = $name;
        }

        function getId(){
            return $this->id;
        }

        function getName(){
            return $this-> name;
        }
    }
<?php 

// Here is my practice about constructor Function
    
class Record{

    public $name;
    public $age;
    public function __construct($name , $age){

        // echo "Person Name Is: {$this->name}";
        $this-> name = $name;
        $this-> age = $age;
    }

    function students(){

        echo "Student Name : {$this->name} \n"."Student Age : {$this->age} \n";
    }

    function teachers(){

        echo "Teachers Name : {$this->name} \n"."Teachers Age : {$this->age} \n";
    }

} 

$obj = new Record("Shovan",32);
echo "Name : {$obj -> name} \n";
echo "Name : {$obj -> age} \n";

$obj1 = new Record("Rinku",30);
echo $obj1 -> students();
$obj2 = new Record("Subroto",30);
echo $obj2 -> teachers();